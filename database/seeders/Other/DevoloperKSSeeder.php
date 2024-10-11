<?php

namespace Database\Seeders\Other;

use App\Models\Main\Main_TableFilter;
use App\Models\Main\Main_User;
use App\Models\Main\Main_User_Them;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DevoloperKSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Main_User::unguard();
        $user = Main_User::create([
            'first_name' => 'К',
            'middle_name' => 'С',
            'last_name' => 'Проект',
            'nickname' => 'Проект К. С.',
            'login' => 'devops_ks',
            'email' => 'example@mail.ru',
            'password' => Hash::make(')co(7*HqgRC0'),
            'role_id' => 2,
            'division_id' => '200',
        ]);
        Main_User::reguard();

        Main_User_Them::create([
            'user_id' => $user->id,
            'them_id' => 2,
        ]);

        Main_TableFilter::create([
            'user_id' => $user->id,
            'table_id' => 1,
            'filters' => collect([
                'them_id' => [112],
            ]),
        ]);
    }
}
