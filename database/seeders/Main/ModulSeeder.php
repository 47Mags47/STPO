<?php

namespace Database\Seeders\Main;

use App\Models\Main\Department;
use App\Models\Main\Modul;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create(['code' => 'administration',     'name' => 'Администрирование']);
        Department::create(['code' => 'CSVI',               'name' => 'ЦСВИ']);
        Department::create(['code' => 'ORVDKN',             'name' => 'Отдел по работе с ветеранами и другими категориями населения']);
        Department::create(['code' => 'OOR',                'name' => 'Отдел организации реабилитации и интеграции инвалидов']);

        Modul::create([
            'code'                      => 'csvi-technical',
            'department_code'           => 'CSVI',
            'name'                      => 'Сведения по технике',
            'route'                     => 'csvi.technical',
            'require_permission_code'   => 'technical-work',
        ]);
    }
}
