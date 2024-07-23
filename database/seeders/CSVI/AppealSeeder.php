<?php

namespace Database\Seeders\CSVI;

use App\Models\Glossary\Glossary_Csvi_Appeal_Category;
use App\Models\Glossary\Glossary_Csvi_Appeal_Status;
use App\Models\Glossary\Glossary_Csvi_Appeal_Them;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        /* CATEGORY */
        Glossary_Csvi_Appeal_Category::create(['id' => 1, 'name' => 'СТПО']);
        Glossary_Csvi_Appeal_Category::create(['id' => 2, 'name' => 'Оборудование']);
        Glossary_Csvi_Appeal_Category::create(['id' => 3, 'name' => 'АСП']);
        Glossary_Csvi_Appeal_Category::create(['id' => 4, 'name' => 'Безопасность']);
        Glossary_Csvi_Appeal_Category::create(['id' => 5, 'name' => 'ГИС КС | Dijit МЭВ']);
        Glossary_Csvi_Appeal_Category::create(['id' => 6, 'name' => 'ЕГИССО']);
        Glossary_Csvi_Appeal_Category::create(['id' => 7, 'name' => 'РИСКЕМОБЛ']);
        Glossary_Csvi_Appeal_Category::create(['id' => 8, 'name' => 'Перенос']);
        Glossary_Csvi_Appeal_Category::create(['id' => 9, 'name' => 'Сервера']);
        Glossary_Csvi_Appeal_Category::create(['id' => 10, 'name' => 'Прочее']);

        /* THEM */
        Glossary_Csvi_Appeal_Them::create(['id' => 1, 'name' => 'Проблема с доступом к сетевым ресурсам', 'category_id' => 9]);
        Glossary_Csvi_Appeal_Them::create(['id' => 2, 'name' => 'Восстановление | перенос данных', 'category_id' => 1]);
        Glossary_Csvi_Appeal_Them::create(['id' => 3, 'name' => 'Предложения для', 'category_id' => 1]);
        Glossary_Csvi_Appeal_Them::create(['id' => 4, 'name' => 'Вопросы', 'category_id' => 1]);
        Glossary_Csvi_Appeal_Them::create(['id' => 5, 'name' => 'Неполадки с сервером', 'category_id' => 9]);
        Glossary_Csvi_Appeal_Them::create(['id' => 6, 'name' => 'Неполадки с компьютером', 'category_id' => 2]);
        Glossary_Csvi_Appeal_Them::create(['id' => 7, 'name' => 'Неполадки с МФУ | принтером', 'category_id' => 2]);
        Glossary_Csvi_Appeal_Them::create(['id' => 8, 'name' => 'Объединение ПКУ', 'category_id' => 3]);
        Glossary_Csvi_Appeal_Them::create(['id' => 9, 'name' => 'Адреса', 'category_id' => 3]);
        Glossary_Csvi_Appeal_Them::create(['id' => 10, 'name' => 'Тарифы ЖКУ', 'category_id' => 3]);
        Glossary_Csvi_Appeal_Them::create(['id' => 11, 'name' => 'ЭЦП', 'category_id' => 4]);
        Glossary_Csvi_Appeal_Them::create(['id' => 12, 'name' => 'Проблемы с антивирусом', 'category_id' => 4]);
        Glossary_Csvi_Appeal_Them::create(['id' => 13, 'name' => 'Континент АП', 'category_id' => 4]);
        Glossary_Csvi_Appeal_Them::create(['id' => 14, 'name' => 'VIPNET', 'category_id' => 4]);
        Glossary_Csvi_Appeal_Them::create(['id' => 15, 'name' => 'Подключение', 'category_id' => 5]);
        Glossary_Csvi_Appeal_Them::create(['id' => 16, 'name' => 'Добавить вид сведений (адаптер)', 'category_id' => 5]);
        Glossary_Csvi_Appeal_Them::create(['id' => 17, 'name' => 'Перенаправить (потерялось) заявление', 'category_id' => 5]);
        Glossary_Csvi_Appeal_Them::create(['id' => 18, 'name' => 'Проблема с IP-телефоном', 'category_id' => 2]);

        Glossary_Csvi_Appeal_Them::create(['id' => 101, 'name' => 'Моей темы нет в списке', 'category_id' => 1]);
        Glossary_Csvi_Appeal_Them::create(['id' => 102, 'name' => 'Моей темы нет в списке', 'category_id' => 2]);
        Glossary_Csvi_Appeal_Them::create(['id' => 103, 'name' => 'Моей темы нет в списке', 'category_id' => 3]);
        Glossary_Csvi_Appeal_Them::create(['id' => 104, 'name' => 'Моей темы нет в списке', 'category_id' => 4]);
        Glossary_Csvi_Appeal_Them::create(['id' => 105, 'name' => 'Моей темы нет в списке', 'category_id' => 5]);
        Glossary_Csvi_Appeal_Them::create(['id' => 106, 'name' => 'Моей темы нет в списке', 'category_id' => 6]);
        Glossary_Csvi_Appeal_Them::create(['id' => 107, 'name' => 'Моей темы нет в списке', 'category_id' => 7]);
        Glossary_Csvi_Appeal_Them::create(['id' => 108, 'name' => 'Моей темы нет в списке', 'category_id' => 8]);
        Glossary_Csvi_Appeal_Them::create(['id' => 109, 'name' => 'Моей темы нет в списке', 'category_id' => 9]);
        Glossary_Csvi_Appeal_Them::create(['id' => 110, 'name' => 'Моей темы нет в списке', 'category_id' => 10]);

        // Устаревшие темы
        // Glossary_Csvi_Appeal_Them::create(['id' => 101, 'name' => 'Другое', 'category_id' => 9]);
        // Glossary_Csvi_Appeal_Them::create(['id' => 102, 'name' => 'Восстановление пароля', 'category_id' => 9]);
        // Glossary_Csvi_Appeal_Them::create(['id' => 103, 'name' => 'Проблемы с оборудованием', 'category_id' => 9]);
        // Glossary_Csvi_Appeal_Them::create(['id' => 104, 'name' => 'Проблемы с АС "АСП"', 'category_id' => 9]);
        // Glossary_Csvi_Appeal_Them::create(['id' => 105, 'name' => 'Неполадки с сервером', 'category_id' => 9]);
        // Glossary_Csvi_Appeal_Them::create(['id' => 106, 'name' => 'Проблема с ЭЦП', 'category_id' => 9]);
        // Glossary_Csvi_Appeal_Them::create(['id' => 107, 'name' => 'Проблема с КИСОГМУ (ГИС КС)', 'category_id' => 9]);
        // Glossary_Csvi_Appeal_Them::create(['id' => 108, 'name' => 'Проблема с компьютером', 'category_id' => 9]);
        // Glossary_Csvi_Appeal_Them::create(['id' => 109, 'name' => 'Проблема с МФУ (принтером)', 'category_id' => 9]);
        // Glossary_Csvi_Appeal_Them::create(['id' => 110, 'name' => 'Проблема с IP-телефоном', 'category_id' => 9]);
        // Glossary_Csvi_Appeal_Them::create(['id' => 111, 'name' => 'Вопросы/Предложения по порталу', 'category_id' => 9]);
        // Glossary_Csvi_Appeal_Them::create(['id' => 112, 'name' => 'Работа с антивирусом', 'category_id' => 9]);
        // Glossary_Csvi_Appeal_Them::create(['id' => 113, 'name' => 'Проблемы с доступом к сетевым ресурсам', 'category_id' => 9]);
        // Glossary_Csvi_Appeal_Them::create(['id' => 114, 'name' => 'Объединение ПКУ', 'category_id' => 9]);
        // Glossary_Csvi_Appeal_Them::create(['id' => 115, 'name' => 'Терапевтическая беседа', 'category_id' => 9]);
        // Glossary_Csvi_Appeal_Them::create(['id' => 116, 'name' => 'Модули', 'category_id' => 9]);
        // Glossary_Csvi_Appeal_Them::create(['id' => 117, 'name' => 'Адреса АСП', 'category_id' => 9]);
        // Glossary_Csvi_Appeal_Them::create(['id' => 118, 'name' => 'Тарифы ЖКУ', 'category_id' => 9]);

        /* STATUS */
        Glossary_Csvi_Appeal_Status::create(['id' => 1, 'name' => 'Отправлено']);
        Glossary_Csvi_Appeal_Status::create(['id' => 2, 'name' => 'Принято']);
        Glossary_Csvi_Appeal_Status::create(['id' => 3, 'name' => 'Закрыто']);
        Glossary_Csvi_Appeal_Status::create(['id' => 4, 'name' => 'Возобновлено']);
    }
}
