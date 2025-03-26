<?php

namespace Database\Seeders\Dev;

use App\Models\CSVI\Veteran\Date;
use App\Models\CSVI\Veteran\Raport;
use App\Models\Main\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VeteranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Date::create([
            'date' => now(),
            'is_actual' => true,
        ]);
        Date::create([
            'date' => now()->addMonth(-1),
            'is_actual' => false,
        ]);
        Date::create([
            'date' => now()->addMonth(-2),
            'is_actual' => false,
        ]);

        foreach (User::all() as $user) {
            $user->addPermission('veteran-work');

            foreach (Date::all() as $date) {
                Raport::firstOrCreate([
                    'division_id' => $user->division_id,
                    'in_date' => $date->id,
                ],[
                    'created_by' => $user->id,
                    'all' => rand(1, 1000),
                    'el' => rand(1, 1000),
                    'mfc' => rand(1, 1000),
                    'open' => false,
                ]);
            }
        }
    }
}
