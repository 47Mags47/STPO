<?php

namespace Database\Seeders\Main;

use App\Models\Glossary\Glossary_Main_PageTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Glossary_Main_PageTable::create(['id' => 1, 'link' => 'appeal']);
    }
}
