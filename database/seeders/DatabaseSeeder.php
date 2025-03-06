<?php

namespace Database\Seeders;

use Database\Seeders\Main\DivisionSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(DivisionSeeder::class);

        if(env('APP_ENV') === 'local')
            $this->call(DevSeeder::class);
    }
}
