<?php

namespace Database\Seeders\Main;

use App\Models\Glossary\Glossary_User_Them;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserThemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Glossary_User_Them::create(['id' => 1, 'name' => 'light']);
        Glossary_User_Them::create(['id' => 2, 'name' => 'dark']);
    }
}
