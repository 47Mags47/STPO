<?php

namespace App\Console\Commands\DB\old;

use App\Models\Csvi\Csvi_Appeal_Appeal;
use App\Models\Main\Main_User;
use Illuminate\Console\Command;
use mysqli;

class Appeal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'old:appeal';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Копирует обращения со 110 сервера';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("ПЕРЕНОС APPEAL");
        Csvi_Appeal_Appeal::unguard();
        /* ГЛОБАЛЬНЫЕ ПЕРЕМЕННЫЕ */
        $caught = false;
        $counter = [
            'copy' => 0,
            'skeep' => 0,
            'errors' => 0
        ];
        $progressBar = $this->output->createProgressBar();

        /* ПОЛУЧЕНИЕ ДАННЫХ ИЗ БД*/
        try {
            $old_DB = new mysqli('192.168.0.110', 'root', 'YGF!PSXu]9L(V[pn', 'MSZN_MAIN');
            $sql = "SELECT * FROM `MSZN_CSVI_applications`.`raportList`";
            $res = $old_DB->query($sql);
            $progressBar->setMaxSteps($res->num_rows);
        } catch (\Throwable $th) {
            echo "Ошибка при попытке получения таблицы";
            $caught = true;
        }

        /* ОБРАБОТКА ОТВЕТА */
        if (!$caught) {
            $progressBar->start();
            foreach ($res as $row) {
                $progressBar->advance();
                if (Csvi_Appeal_Appeal::where('id', $row['id'])->count() != 0) {
                    $counter['skeep']++;
                    continue;
                }
                if (Main_User::where('id', $row['sender'])->count() == 0) {
                    $counter['skeep']++;
                    continue;
                }
                if (Main_User::where('id', $row['worker'])->count() == 0 and $row['worker'] != NULL) {
                    $counter['skeep']++;
                    continue;
                }
                try {
                    $them = [
                        1 => 110,  // Другое                                   => (Прочее) Моей темы нет в списке
                        2 => 2,    // Восстановление пароля                    => (СТПО) Восстановление | перенос данных
                        3 => 102,  // Проблемы с оборудованием                 => (Оборудование) Моей темы нет в списке
                        4 => 103,  // Проблемы с АС "АСП"                      => (АСП) Моей темы нет в списке 
                        5 => 5,    // Неполадки с сервером                     => (Сервера) Неполадки с сервером
                        6 => 11,   // Проблема с ЭЦП                           => (Безопасность) ЭЦП
                        7 => 15,   // Проблема с КИСОГМУ (ГИС КС)              => (ГИС КС | Dijit МЭВ) ГИС КС | Dijit МЭВ
                        8 => 6,    // Проблема с компьютером                   => (Оборудование) Неполадки с компьютером
                        9 => 7,    // Проблема с МФУ (принтером)               => (Оборудование) Неполадки с МФУ | принтером
                        10 => 18,  // Проблема с IP-телефоном                  => (Оборудование) Проблема с IP-телефоном
                        11 => 4,   // Вопросы/Предложения по порталу           => (СТПО) Вопросы
                        12 => 12,  // Работа с антивирусом                     => (Безопасность) Проблемы с антивирусом
                        13 => 102, // Проблемы с доступом к сетевым ресурсам   => (Оборудование) Моей темы нет в списке
                        14 => 8,   // Объединение ПКУ                          => (АСП) Объединение ПКУ
                        15 => 110, // Терапевтическая беседа                   => (Прочее) Моей темы нет в списке
                        16 => 110, // Модули                                   => (Прочее) Моей темы нет в списке
                        17 => 9,   // Адреса АСП                               => (АСП) Адреса
                        18 => 10,  // Тарифы ЖКУ                               => (АСП) Тарифы ЖКУ
                    ];

                    Csvi_Appeal_Appeal::create([
                        'id' => $row['id'],
                        'office' => $row['office'] ? $row['office'] : NULL,
                        'comment' => $row['comment'],
                        'them_id' => $them[$row['type']],
                        'status_id' => $row['status'],
                        'sender_id' => $row['sender'],
                        'worker_id' => $row['worker'],
                        'closet_at' => $row['worker'],
                        'created_at' => date('Y-m-d H:i:s', strtotime($row['date'])),
                        'updated_at' => date('Y-m-d H:i:s', strtotime($row['date'])),
                    ]);
                    $counter['copy']++;
                } catch (\Throwable $th) {
                    $counter['errors']++;
                }
            }
            echo "\n";
            echo "Перенесено " . $counter['copy'] . " обращений \n";
            echo "Пропущено " . $counter['skeep'] . " обращений \n";
            echo "Ошибок " . $counter['errors'] . "\n";
        }

        Csvi_Appeal_Appeal::reguard();
    }
}
