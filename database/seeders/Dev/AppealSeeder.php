<?php

namespace Database\Seeders\Dev;

use App\Models\CSVI\Appeal\Appeal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Appeal::factory(50)->create();
    }
}
