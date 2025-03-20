<?php

namespace Database\Seeders\Dev;

use App\Models\CSVI\Technical\Folder;
use App\Models\CSVI\Technical\Technical;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnicalSeeder extends Seeder
{
    public function run(): void
    {
        Folder::factory(20)->create();
        Folder::factory(180)->create();

        foreach (Folder::all() as $folder) {
            Technical::factory(3)->create([
                'folder_id' => $folder->id,
                'division_id' => $folder->division->id
            ]);
        }
    }
}
