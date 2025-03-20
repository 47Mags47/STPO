<?php

namespace Database\Seeders\Dev;

use App\Models\Main\Division;
use App\Models\Main\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::create([
            'id' => 2,
            'last_name' => 'Администратор',
            'middle_name' => null,
            'first_name' => null,
            'full_name' => 'Администратор',
            'phone' => null,
            'email' => 'admin@test.ru',
            'login' => 'admin',
            'password' => Hash::make('admin'),
            'logo' => null,
            'division_id' => Division::where('name', 'ГКУ ЦСВИ')->get()->first()->id,
        ]);

        $test_user = User::create([
            'id' => 3,
            'last_name' => 'Пользователь',
            'middle_name' => null,
            'first_name' => null,
            'full_name' => 'Пользователь',
            'phone' => null,
            'email' => 'user@test.ru',
            'login' => 'user',
            'password' => Hash::make('user'),
            'logo' => null,
            'division_id' => Division::where('name', 'ГКУ ЦСВИ')->get()->first()->id,
        ]);

        User::factory(10)->create();
    }
}
