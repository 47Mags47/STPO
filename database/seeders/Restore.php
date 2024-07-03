<?php

namespace Database\Seeders;

use App\Models\Main\Main_Access;
use App\Models\Main\Main_User;
use App\Models\Oor\Oor_Inv_InDate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class Restore extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Model::unguard();
        Main_User::create([
            'id' => 7,
            'first_name' => 'Test',
            'middle_name' => 'Test',
            'last_name' => 'Test',
            'nickname' => 'Test',
            'login' => 'test-u',
            'password' => Hash::make('test-u'),
            'role_id' => 4,
            'division_id' => 2,
        ]);
        Main_User::create([
            'id' => 17,
            'first_name' => 'Test',
            'middle_name' => 'Test',
            'last_name' => 'Test',
            'nickname' => 'Test',
            'login' => 'test-a',
            'password' => Hash::make('test-a'),
            'role_id' => 1,
            'division_id' => 2,
        ]);

        Main_Access::create([
            'modul_id' => 7,
            'user_id' => 7,
            'level_id' => 2
        ]);
        Main_Access::create([
            'modul_id' => 7,
            'user_id' => 17,
            'level_id' => 4
        ]);

        Oor_Inv_InDate::create([
            'date' => Carbon::createFromTimestamp(0)->format('Y-m-d'),
            'is_active' => true
        ]);

        Model::reguard();
    }
}
