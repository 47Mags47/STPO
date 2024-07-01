<?php

namespace App\Console\Commands\CopyOldDB;

use App\Models\Main\Main_User;
use Illuminate\Console\Command;
use mysqli;

class copyUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:copy-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('down');
        echo "Приложение отключено\n";
        echo "\n  ПЕРЕНОС USERS ............................................................................................................................\n";
        Main_User::unguard();

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
            $sql = "SELECT * FROM `users`
                INNER JOIN `user_new_hash` ON `user_new_hash`.`user` = `users`.`id`";
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
                if (Main_User::where('id', $row['id'])->count() != 0) {
                    $counter['skeep']++;
                    continue;
                }
                try {
                    Main_User::create([
                        'id' => $row['id'],
                        'first_name' => $row['last_name'],
                        'middle_name' => $row['patronymic'],
                        'last_name' => $row['first_name'],
                        'nickname' => $row['reduction_fio'],
                        'phone' => $row['phone'],
                        'dop_phone' => $row['dop_phone'],
                        'logo' => NULL,
                        'login' => $row['login'],
                        'password' => $row['hash'],
                        'role_id' => ($row['type'] == 1 or $row['type'] == 2) ? 2 : 4,
                        'division_id' => $row['division'],
                        'created_at' => now(),
                    ]);
                    $counter['copy']++;
                } catch (\Throwable $th) {
                    $counter['errors']++;
                }
            }
            /* ВЫВОД */
            echo "\n";
            echo "Перенесено " . $counter['copy'] . " пользователей \n";
            echo "Пропущено " . $counter['skeep'] . " пользователей \n";
            echo "Ошибок " . $counter['errors'] . "\n";
        }


        Main_User::reguard();
        $this->call('up');
    }
}
