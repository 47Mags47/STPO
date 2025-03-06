<?php

namespace Database\Seeders;

use Database\Seeders\Dev\UserSeeder;
use Database\Seeders\Main\DivisionSeeder;
use Illuminate\Database\Seeder;

class DevSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(UserSeeder::class);
    }
}
