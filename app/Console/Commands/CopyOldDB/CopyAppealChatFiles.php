<?php

namespace App\Console\Commands\CopyOldDB;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use DateTime;
use Illuminate\Support\Facades\Storage;

class CopyAppealChatFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'old:CopyAppealChatFiles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Копирует файлы чата со старого сервера';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('down');
        echo "Приложение отключено\n";
        echo "\n  ПЕРЕНОС Appeal Chat Files ............................................................................................................................\n";

        /* ГЛОБАЛЬНЫЕ ПЕРЕМЕННЫЕ */
        $caught = false;
        $counter = [
            'copy' => 0,
            'skeep' => 0,
            'errors' => 0
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
                        echo "\nОШИБКА ПРИ КОПИРОВАНИИ ФАЙЛА \n" . $folder . '/' . $file->getFilename() . "\n";
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
            $this->call('up');
        }
    }
}
