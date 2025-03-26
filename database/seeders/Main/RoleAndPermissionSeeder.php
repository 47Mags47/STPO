<?php

namespace Database\Seeders\Main;

use App\Models\Main\Permission;
use App\Models\Main\Role;
use App\Models\Main\RolePivotPermission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['code' => 'asp_developer',        'name' => 'Разработчик АСП']);
        Role::create(['code' => 'sys_admin',            'name' => 'Системный администратор']);
        Role::create(['code' => 'division_admin',       'name' => 'Администратор подразделения']);

        Permission::create(['code' => 'appeal-work',        'name' => 'Работа с обращениями']);
        Permission::create(['code' => 'veteran-work',       'name' => 'Работа с заявлениями "Ветеран труда"']);
        Permission::create(['code' => 'veteran-admin',      'name' => 'Администратор модуля по ветеранам труда']);
        Permission::create(['code' => 'technical-work',     'name' => 'Работа с модулем "Техника подразделения"']);

        RolePivotPermission::create([
            'role_code' => 'asp_developer',
            'permission_code' => 'appeal-work'
        ]);

        RolePivotPermission::create([
            'role_code' => 'sys_admin',
            'permission_code' => 'technical-work'
        ]);
    }
}
