<?php

namespace Database\Seeders\Dev;

use App\Models\CSVI\Appeal\Appeal;
use App\Models\Main\UserPivotPermission;
use Illuminate\Database\Seeder;

class AppealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Appeal::factory(50)->create();
        UserPivotPermission::create([
            'user_id' => 2,
            'permission_code' => 'appeal-work'
        ]);
    }
}
