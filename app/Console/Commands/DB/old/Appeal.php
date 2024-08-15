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
                        1 => 110,
                        2 => 2,
                        3 => 102,
                        4 => 103,
                        5 => 5,
                        6 => 11,
                        7 => 105,
                        8 => 6,
                        9 => 7,
                        10 => 18,
                        11 => 101,
                        12 => 12,
                        13 => 102,
                        14 => 8,
                        15 => 110,
                        16 => 110,
                        17 => 9,
                        18 => 10,
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
