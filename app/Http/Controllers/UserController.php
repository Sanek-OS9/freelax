<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class UserController extends Controller
{
    /**
     * Редактирование ролей (форма)
     */
    public function roleEdit(Request $request)
    {
        $user = $request->user;
        $roles = \App\Role::get();
        return view('profile.roleEdit', compact('user', 'roles'));
    }

    /**
     * Редактирование ролей (сохранение)
     */
    public function roleSave(Request $request)
    {
        $user = $request->user;
        $user->roles()->detach();
        if (is_array($request->role)) {
            foreach ($request->role as $role => $v) {
                if ($role = Role::where('name', '=', $role)->firstOrFail()) {
                    $user->roles()->attach($role);
                }
            }
        }
        return redirect()->back()->with('message', 'Роли успешно сохранены');
    }
}
