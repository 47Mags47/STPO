<?php

namespace Database\Seeders\Main;

use App\Models\Main\Division;
use App\Models\Main\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (User::whereKey(1)->count() === 0)
            User::create([
                'last_name' => 'СИСТЕМА',
                'middle_name' => null,
                'first_name' => null,
                'full_name' => 'СИСТЕМА test',
                'phone' => null,
                'email' => env('MAIL_USERNAME'),
                'login' => env('SYSTEM_USER_LOGIN', 'system'),
                'password' => Hash::make(env('SYSTEM_USER_PASSWORD', 'system')),
                'logo' => null,
                'division_id' => Division::where('name', 'ГКУ ЦСВИ')->get()->first()->id,
            ]);
    }
}
