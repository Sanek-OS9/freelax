<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;
use App\User;

class SocialiteController extends Controller
{
    public function gitHubProvider()
    {
        return Socialite::driver('github')->redirect();
    }
    public function gitHubCallback()
    {
        $user = Socialite::driver('github')->user();
        $this->auth($user);
        return redirect()->intended('home');
    }


    public function facebookProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function facebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        dd($user);
        $this->auth($user);
        return redirect()->intended('home');
    }


    public function googleProvider()
    {
        return Socialite::driver('google')->redirect();
    }
    public function googleCallback()
    {
        $user = Socialite::driver('google')->user();
        dd($user);
        $this->auth($user);
        return redirect()->intended('home');
    }


    protected function auth($user): void
    {
        $password = $this->bcrypt($user->getId());
        $newUser = User::updateOrCreate([
            'email' => $user->getEmail(),
        ], [
            'name' => $user->getName(),
            'password' => $password,
            'socialite' => 'github',
        ]);
        Auth::loginUsingId($newUser->id);
        return;
    }

    protected function bcrypt(int $user_id): string
    {
        return bcrypt(bcrypt($user_id . $user_id) . md5($user_id));
    }
}
