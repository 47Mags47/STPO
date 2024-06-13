<?php

namespace Database\Seeders\Main;

use App\Models\Glossary\Glossary_UserRole;
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
        Glossary_UserRole::create(['id' => 1, 'name' => 'Администратор']);
        Glossary_UserRole::create(['id' => 2, 'name' => 'Модератор']);
        Glossary_UserRole::create(['id' => 3, 'name' => 'Программист']);
        Glossary_UserRole::create(['id' => 4, 'name' => 'Пользователь']);
    }
}
