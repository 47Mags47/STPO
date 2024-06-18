<?php

namespace Database\Seeders\Main;

use App\Models\Glossary\Glossary_Main_AlertType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Glossary_Main_AlertType::create(['id' => 1, 'name' => 'Изменение статуса обращения']);
        Glossary_Main_AlertType::create(['id' => 2, 'name' => 'Новое сообщение в чате обращения']);
    }
}
