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
        Glossary_Csvi_Appeal_Them::create(['id' => 1, 'name' => 'Моей темы нет в списке', 'category_id' => 10]);
        Glossary_Csvi_Appeal_Them::create(['id' => 2, 'name' => 'Проблема с доступом к сетевым ресурсам', 'category_id' => 9]);
        Glossary_Csvi_Appeal_Them::create(['id' => 3, 'name' => 'Восстановление | перенос данных СТПО', 'category_id' => 1]);
        Glossary_Csvi_Appeal_Them::create(['id' => 4, 'name' => 'Предложения для СТПО', 'category_id' => 1]);
        Glossary_Csvi_Appeal_Them::create(['id' => 5, 'name' => 'Вопросы по СТПО', 'category_id' => 1]);
        Glossary_Csvi_Appeal_Them::create(['id' => 6, 'name' => 'Неполадки с сервером', 'category_id' => 9]);
        Glossary_Csvi_Appeal_Them::create(['id' => 7, 'name' => 'Неполадки с компьютером', 'category_id' => 2]);
        Glossary_Csvi_Appeal_Them::create(['id' => 8, 'name' => 'Неполадки с МФУ | принтером', 'category_id' => 2]);
        Glossary_Csvi_Appeal_Them::create(['id' => 10, 'name' => 'Объединение ПКУ', 'category_id' => 3]);
        Glossary_Csvi_Appeal_Them::create(['id' => 11, 'name' => 'Адреса', 'category_id' => 3]);
        Glossary_Csvi_Appeal_Them::create(['id' => 12, 'name' => 'Тарифы ЖКУ', 'category_id' => 3]);
        Glossary_Csvi_Appeal_Them::create(['id' => 13, 'name' => 'ЭЦП', 'category_id' => 4]);
        Glossary_Csvi_Appeal_Them::create(['id' => 14, 'name' => 'Проблемы с антивирусом', 'category_id' => 4]);
        Glossary_Csvi_Appeal_Them::create(['id' => 17, 'name' => 'Континент АП', 'category_id' => 4]);
        Glossary_Csvi_Appeal_Them::create(['id' => 19, 'name' => 'VIPNET', 'category_id' => 4]);
        Glossary_Csvi_Appeal_Them::create(['id' => 18, 'name' => 'Подключение', 'category_id' => 5]);
        Glossary_Csvi_Appeal_Them::create(['id' => 15, 'name' => 'Добавить вид сведений (адаптер)', 'category_id' => 5]);
        Glossary_Csvi_Appeal_Them::create(['id' => 16, 'name' => 'Перенаправить (потерялось) заявление', 'category_id' => 5]);
        Glossary_Csvi_Appeal_Them::create(['id' => 20, 'name' => 'Проблема с IP-телефоном', 'category_id' => 2]);

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
