<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(Main\CitySeeder::class);
        $this->call(Main\DivisionSeeder::class);
        $this->call(Main\UserSeeder::class);
        $this->call(Main\AlertSeeder::class);
        $this->call(Main\ModulSeeder::class);
        $this->call(Main\AccessSeeder::class);
        $this->call(Main\PageTableSeeder::class);

        $this->call(CSVI\AppealSeeder::class);

        if(env('APP_ENV') == 'local'){
            $this->call(Oor\InvSeeder::class);
        }
    }
}
