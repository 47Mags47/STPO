<?php

namespace Database\Seeders\Main;

use App\Models\Glossary\Glossary_Main_UserRole;
use App\Models\Glossary\Glossary_User_Them;
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
        Glossary_Main_UserRole::create(['id' => 1, 'name' => 'Администратор']);
        Glossary_Main_UserRole::create(['id' => 2, 'name' => 'Модератор']);
        Glossary_Main_UserRole::create(['id' => 3, 'name' => 'Программист']);
        Glossary_Main_UserRole::create(['id' => 4, 'name' => 'Пользователь']);

        /* THEMS */
        Glossary_User_Them::create(['id' => 1, 'name' => 'light']);
        Glossary_User_Them::create(['id' => 2, 'name' => 'dark']);
    }
}
