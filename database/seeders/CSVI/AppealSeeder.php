<?php

namespace Database\Seeders\CSVI;

use App\Models\CSVI\Appeal\Category;
use App\Models\CSVI\Appeal\Status;
use App\Models\CSVI\Appeal\Them;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // STATUS
        Status::create(['code' => 'created',    'name' => 'Создана']);
        Status::create(['code' => 'accepted',   'name' => 'Принята']);
        Status::create(['code' => 'closed',     'name' => 'Закрыта']);
        Status::create(['code' => 'restored',   'name' => 'Возобновлена']);

        // CATEGORY
        Category::create(['id' => 1, 'name' => 'СТПО']);
        Category::create(['id' => 2, 'name' => 'Оборудование']);
        Category::create(['id' => 3, 'name' => 'АСП']);
        Category::create(['id' => 4, 'name' => 'Безопасность']);
        Category::create(['id' => 5, 'name' => 'ГИС КС | Dijit МЭВ']);
        Category::create(['id' => 6, 'name' => 'ЕГИССО']);
        Category::create(['id' => 7, 'name' => 'РИСКЕМОБЛ']);
        Category::create(['id' => 8, 'name' => 'Прочее']);

        // THEM
        Them::create(['category_id' => 1, 'name' => 'Вопрос | Предложение']);
        Them::create(['category_id' => 1, 'name' => 'Моей темы нет в списке']);

        Them::create(['category_id' => 2, 'name' => 'Неполадки с компьютером']);
        Them::create(['category_id' => 2, 'name' => 'Неполадки с МФУ | принтером']);
        Them::create(['category_id' => 2, 'name' => 'Проблема с IP-телефоном']);
        Them::create(['category_id' => 2, 'name' => 'Моей темы нет в списке']);

        Them::create(['category_id' => 3, 'name' => 'Объединение ПКУ']);
        Them::create(['category_id' => 3, 'name' => 'Адреса']);
        Them::create(['category_id' => 3, 'name' => 'Тарифы ЖКУ']);
        Them::create(['category_id' => 3, 'name' => 'Моей темы нет в списке']);

        Them::create(['category_id' => 4, 'name' => 'ЭЦП']);
        Them::create(['category_id' => 4, 'name' => 'Антивирус']);
        Them::create(['category_id' => 4, 'name' => 'Континент']);
        Them::create(['category_id' => 4, 'name' => 'VIPNET']);
        Them::create(['category_id' => 4, 'name' => 'Моей темы нет в списке']);

        Them::create(['category_id' => 5, 'name' => 'Подключение']);
        Them::create(['category_id' => 5, 'name' => 'Добавить вид сведений (адаптер)']);
        Them::create(['category_id' => 5, 'name' => 'Перенаправить (потерялось) заявление']);
        Them::create(['category_id' => 5, 'name' => 'Моей темы нет в списке']);

        Them::create(['category_id' => 6, 'name' => 'Моей темы нет в списке']);
        Them::create(['category_id' => 7, 'name' => 'Моей темы нет в списке']);
        Them::create(['category_id' => 8, 'name' => 'Моей темы нет в списке']);
    }
}
