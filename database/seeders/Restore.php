<?php

namespace Database\Seeders;

use App\Models\Main\Main_Access;
use App\Models\Oor\Oor_Inv_InDate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class Restore extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Main_Access::create([
            'modul_id' => 7,
            'user_id' => 51,
            'level_id' => 4
        ]);

        Oor_Inv_InDate::create([
            'date' => Carbon::createFromTimestamp(0)->format('Y-m-d'),
            'is_active' => true
        ]);
    }
}
