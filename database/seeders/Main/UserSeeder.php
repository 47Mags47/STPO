<?php

namespace Database\Seeders\Main;

use App\Models\Main\Main_UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* ROLES */
        Main_UserRole::create(['id' => 1, 'name' => 'Администратор']);
        Main_UserRole::create(['id' => 2, 'name' => 'Модератор']);
        Main_UserRole::create(['id' => 3, 'name' => 'Программист']);
        Main_UserRole::create(['id' => 4, 'name' => 'Пользователь']);
    }
}
