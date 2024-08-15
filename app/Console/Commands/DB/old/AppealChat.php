<?php

namespace App\Console\Commands\DB\old;

use App\Models\Csvi\Csvi_Appeal_Appeal;
use App\Models\Csvi\Csvi_Appeal_AppealMessage;
use App\Models\Main\Main_User;
use Illuminate\Console\Command;

use mysqli;

class AppealChat extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pld:appeal-chat';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Копирует чат обращений со 110 сервера';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("ПЕРЕНОС AppealChat");
        Csvi_Appeal_AppealMessage::unguard();

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
            $sql = "SELECT * FROM `MSZN_CSVI_applications`.`chat`";
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
                if ($row['SYSTEM'] == 1) {
                    continue;
                }
                if (Csvi_Appeal_AppealMessage::whereKey($row['id'])->count() != 0) {
                    $counter['skeep']++;
                    continue;
                }
                if (Csvi_Appeal_Appeal::whereKey($row['application'])->count() == 0) {
                    $counter['skeep']++;
                    continue;
                }
                if (Main_User::whereKey($row['sender'])->count() == 0) {
                    $counter['skeep']++;
                    continue;
                }
                try {
                    $message = $row['file'] == 1
                        ? date('Y-m-d-H-i-s', strtotime($row['datetime'])) . '_' . substr($row['message'], 21)
                        : $row['message'];
                    Csvi_Appeal_AppealMessage::create([
                        'id' => $row['id'],
                        'appeal_id' => $row['application'],
                        'sender_id' => $row['sender'],
                        'is_file' => $row['file'],
                        'is_image' => $row['img'],
                        'is_system' => $row['SYSTEM'],
                        'message' => $message,
                        'created_at' => $row['datetime'],
                        'updated_at' => $row['datetime'],
                    ]);
                    $counter['copy']++;
                } catch (\Throwable $th) {
                    dd($th);
                    $counter['errors']++;
                }
            }
            /* ВЫВОД */
            echo "\n";
            echo "Перенесено " . $counter['copy'] . " сообщений \n";
            echo "Пропущено " . $counter['skeep'] . " сообщений \n";
            echo "Ошибок " . $counter['errors'] . "\n";
        }

        Csvi_Appeal_AppealMessage::reguard();

        $this->call(AppealChatFiles::class);
    }
}
