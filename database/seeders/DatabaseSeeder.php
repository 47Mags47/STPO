<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(Main\DivisionSeeder::class);
        $this->call(Main\UserSeeder::class);
        $this->call(Main\RoleAndPermissionSeeder::class);
        $this->call(Main\ModulSeeder::class);

        $this->call(CSVI\AppealSeeder::class);

        if(env('APP_ENV') === 'local')
            $this->call(DevSeeder::class);
    }
}
