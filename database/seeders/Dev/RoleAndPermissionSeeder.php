<?php

namespace Database\Seeders\Dev;

use App\Models\Main\UserPivotRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserPivotRole::create([
            'user_id' => 2,
            'role_code' => 'sys_admin',
        ]);

        UserPivotRole::create([
            'user_id' => 2,
            'role_code' => 'division_admin',
        ]);
    }
}
