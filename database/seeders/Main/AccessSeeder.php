<?php

namespace Database\Seeders\Main;

use App\Models\Glossary\Glossary_AccessLevel;
use App\Models\Main\Main_Access;
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
        Glossary_AccessLevel::create([
            'id' => 1,
            'name' => 'Просмотр заполняющей организации'
        ]);
        Glossary_AccessLevel::create([
            'id' => 2,
            'name' => 'Заполнитель'
        ]);
        Glossary_AccessLevel::create([
            'id' => 3,
            'name' => 'Просмотр проверяющей организации'
        ]);
        Glossary_AccessLevel::create([
            'id' => 4,
            'name' => 'Проверяющий'
        ]);
    }
}
