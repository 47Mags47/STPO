<?php

namespace App\Console\Commands\DB\old;

use Illuminate\Console\Command;
use DateTime;
use Illuminate\Support\Facades\Storage;

class AppealChatFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'old:appeal-chat-files';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Копирует файлы чата обращений со 110 сервера';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("ПЕРЕНОС Appeal Chat Files");

        /* ГЛОБАЛЬНЫЕ ПЕРЕМЕННЫЕ */
        $caught = false;
        $counter = [
            'copy' => 0,
            'skeep' => 0,
            'errors' => 0,
            'error_list' => [],
        ];
        $progressBar = $this->output->createProgressBar();
        $path = "site\\CSVI\\statesment\\chat\\files";
        $folders = [];

        /* ОПРОС СЕРВЕРА */
        try {
            $folders = Storage::disk('ftp110')->directories($path);
            $folder_count = count($folders);
        } catch (\Throwable $th) {
            echo "ОШИБКА ДОСТУПА К УДАЛЕННОМУ СЕРВЕРУ\n";
            $caught = true;
        }

        /* ПЕРЕНОС */
        if (!$caught) {
            $progressBar->setMaxSteps($folder_count);
            $progressBar->start();
            foreach ($folders as $folder) {
                $files = Storage::disk('ftp110')->allFiles($folder);
                foreach ($files as $file) {
                    try {
                        $file_name = basename($file);
                        $datetime = DateTime::createFromFormat("d_m_Y_H_i_s", substr($file_name, 0, 19))->format('Y-m-d-H-i-s');
                        $new_file_name = $datetime . '_' . substr($file_name, 21);

                        if(Storage::disk('appeal-chat')->has(basename($folder) . '/' . $new_file_name)){
                            $counter['skeep']++;
                            continue;
                        }

                        $content = Storage::disk('ftp110')->get($file);
                        Storage::disk('appeal-chat')->put(basename($folder) . '/' . $new_file_name, $content);

                        $counter['copy']++;
                    } catch (\Throwable $th) {
                        $counter['errors']++;
                        $counter['error_list'][] = $file;
                    }
                }
                $progressBar->advance();
            }
            $progressBar->finish();

            /* ВЫВОД */
            echo "\n";
            echo "Перенесено " . $counter['copy'] . " дирректорий \n";
            echo "Пропущено " . $counter['skeep'] . " дирректорий \n";
            echo "Ошибок " . $counter['errors'] . "\n";
            echo "Ошибка при копирании файлов:\n";
            foreach ($counter['error_list'] as $file) {
                echo $file . "\n";
            }
        }
    }
}
