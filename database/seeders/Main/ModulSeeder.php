<?php

namespace Database\Seeders\Main;

use App\Models\Main\Department;
use App\Models\Main\Modul;
use App\Models\Main\ModulPivotPermission;
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
            'route'                     => 'technical.index',
        ]);
        ModulPivotPermission::create([
            'modul_code' => 'csvi-technical',
            'permission_code' => 'technical-work'
        ]);


        Modul::create([
            'code'                      => 'csvi-veteran',
            'department_code'           => 'CSVI',
            'name'                      => 'Кол-во заявлений по присвоению звания "Ветеран труда"',
            'route'                     => 'veteran.raport.index',
        ]);
        ModulPivotPermission::create([
            'modul_code' => 'csvi-veteran',
            'permission_code' => 'veteran-work'
        ]);
        ModulPivotPermission::create([
            'modul_code' => 'csvi-veteran',
            'permission_code' => 'veteran-admin'
        ]);
    }
}
