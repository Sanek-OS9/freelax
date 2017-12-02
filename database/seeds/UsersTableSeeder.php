<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name' => 'Александр',
            'last_name' => 'Шаповал',
            'email' => 'Sanek_OS9@mail.ru',
            'password' => '111111',
        ]);
    }
}
