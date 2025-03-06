<?php

namespace Database\Seeders;

use Database\Seeders\Main\DivisionSeeder;
use Illuminate\Database\Seeder;

class DevSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(Dev\UserSeeder::class);
        $this->call(Dev\RoleAndPermissionSeeder::class);
    }
}
