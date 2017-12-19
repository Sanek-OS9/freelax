<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            ['name' => 'Moder', 'caption' => 'Модератор', 'description' => 'Помошник в управлении сайтом'],
            ['name' => 'Admin', 'caption' => 'Администратор', 'description' => 'Управляет сайтом'],
            ['name' => 'Role', 'caption' => 'Управляющий ролями', 'description' => 'Назначет роли пользователям'],
        ]);
    }
}
