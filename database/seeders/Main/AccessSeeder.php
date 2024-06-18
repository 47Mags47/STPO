<?php

namespace Database\Seeders\Main;

use App\Models\Glossary\Glossary_Main_AccessLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* Access Levels */
        Glossary_Main_AccessLevel::create([
            'id' => 1,
            'name' => 'Просмотр заполняющей организации'
        ]);
        Glossary_Main_AccessLevel::create([
            'id' => 2,
            'name' => 'Заполнитель'
        ]);
        Glossary_Main_AccessLevel::create([
            'id' => 3,
            'name' => 'Просмотр проверяющей организации'
        ]);
        Glossary_Main_AccessLevel::create([
            'id' => 4,
            'name' => 'Проверяющий'
        ]);
    }
}
