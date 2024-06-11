<?php

namespace Database\Seeders\Main;

use App\Models\Main\Main_City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Main_City::create(['id' => 1, 'name' => 'Анжеро-Судженск']);
        Main_City::create(['id' => 2, 'name' => 'Белово']);
        Main_City::create(['id' => 3, 'name' => 'Берёзовский']);
        Main_City::create(['id' => 4, 'name' => 'Гурьевск']);
        Main_City::create(['id' => 5, 'name' => 'Ижморский']);
        Main_City::create(['id' => 6, 'name' => 'Калтан']);
        Main_City::create(['id' => 7, 'name' => 'Кемерово']);
        Main_City::create(['id' => 9, 'name' => 'Киселёвск']);
        Main_City::create(['id' => 10, 'name' => 'Крапивинский']);
        Main_City::create(['id' => 12, 'name' => 'Ленинск-Кузнецкий']);
        Main_City::create(['id' => 13, 'name' => 'Мариинск']);
        Main_City::create(['id' => 14, 'name' => 'Междуреченск']);
        Main_City::create(['id' => 15, 'name' => 'Мыски']);
        Main_City::create(['id' => 16, 'name' => 'Новокузнецк']);
        Main_City::create(['id' => 17, 'name' => 'Осинники']);
        Main_City::create(['id' => 18, 'name' => 'Полысаево']);
        Main_City::create(['id' => 19, 'name' => 'Прокопьевск']);
        Main_City::create(['id' => 20, 'name' => 'Промышленовский']);
        Main_City::create(['id' => 21, 'name' => 'Тайга']);
        Main_City::create(['id' => 22, 'name' => 'Таштагол']);
        Main_City::create(['id' => 23, 'name' => 'Тисуль']);
        Main_City::create(['id' => 24, 'name' => 'Топки']);
        Main_City::create(['id' => 25, 'name' => 'Тяжин']);
        Main_City::create(['id' => 26, 'name' => 'Чебула']);
        Main_City::create(['id' => 27, 'name' => 'Юрга']);
        Main_City::create(['id' => 28, 'name' => 'Яя']);
        Main_City::create(['id' => 29, 'name' => 'Яшкино']);
    }
}
