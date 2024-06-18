<?php

namespace Database\Seeders\Main;

use App\Models\Glossary\Glossary_Main_ModulDepartment;
use App\Models\Main\Main_Modul;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Glossary_Main_ModulDepartment::create([
            'id' => 1,
            'name' => 'Администрирование',
            'altname' => 'administration'
        ]);
        Glossary_Main_ModulDepartment::create([
            'id' => 2,
            'name' => 'ЦСВИ',
            'altname' => 'csvi'
        ]);
        Glossary_Main_ModulDepartment::create([
            'id' => 3,
            'name' => 'Отдел по работе с ветеранами и другими категориями населения',
            'altname' => 'orvdkn'
        ]);
        Glossary_Main_ModulDepartment::create([
            'id' => 4,
            'name' => 'Отдел организации реабилитации и интеграции инвалидов',
            'altname' => 'oor'
        ]);

        Main_Modul::create([
            'id' => 1,
            'name' => 'Привелегии',
            'link' => 'privileges',
            'department_id' => 1,
            'visible' => true,
            'local' => false,
        ]);
        Main_Modul::create([
            'id' => 2,
            'name' => 'Пользователи',
            'link' => 'users',
            'department_id' => 1,
            'visible' => true,
            'local' => false,
        ]);

        Main_Modul::create([
            'id' => 3,
            'name' => 'Проверка федерального реестра ЖКУ',
            'link' => 'check-federal-register-jky',
            'department_id' => 2,
            'visible' => true,
            'local' => true,
        ]);
        Main_Modul::create([
            'id' => 4,
            'name' => 'Ветеран труда',
            'link' => 'veteran-truda',
            'department_id' => 3,
            'visible' => true,
            'local' => false,
        ]);
        Main_Modul::create([
            'id' => 5,
            'name' => 'Сведения по технике',
            'link' => 'availability-and-condition-technic',
            'department_id' => 2,
            'visible' => true,
            'local' => false,
        ]);
        Main_Modul::create([
            'id' => 6,
            'name' => 'Поиск федеральных льготников',
            'link' => 'search-federal-benefits',
            'department_id' => 2,
            'visible' => true,
            'local' => true,
        ]);
    }
}
