<?php

namespace Database\Seeders\Dev;

use App\Models\Main\UserPivotPermission;
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
        UserPivotPermission::create([
            'user_id' => 2,
            'permission_code' => 'technical-work',
        ]);
    }
}
