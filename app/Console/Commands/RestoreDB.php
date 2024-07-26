<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class RestoreDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:restoreDB {folder?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Восстановление БД из файлов json Storage/app/backup';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $folders = File::directories(Storage::disk('backup')->path('json'));
        $last = $this->argument('folder')
            ? Storage::disk('backup')->path('json/' .$this->argument('folder'))
            : collect($folders)->last();
        $classes = json_decode(File::get(Storage::disk('backup')->path('json') . '/classes.json'), true);

        if($this->argument('folder') and !Storage::disk('backup')->has('json/' . $this->argument('folder'))){
            dd('Путь к backup дирректории не найден');
        }

        Model::unguard();
        foreach ($classes as $name => $class) {
            try {
                $model = new $class;
                $arr = json_decode(File::get($last . '/' . $name . '.json'), true);
            } catch (\Throwable $th) {
                echo "\nОШИБКА ПРИ ПОПЫТКЕ СЧИТАТЬ ФАЙЛ " . $last . '/' . $name . '.json' . "\n";
                continue;
            }

            echo "\nВОССТАНОВЛЕНИЕ " . $name . "\n";
            $progressBar = $this->output->createProgressBar();
            $progressBar->setMaxSteps(count($arr));
            $progressBar->start();
            $counter = [
                'copy' => 0,
                'skeep' => 0,
                'errors' => 0
            ];
            foreach ($arr as $data) {
                try {
                    if ($model->where('id', $data['id'])->count() != 0) {
                        $counter['skeep']++;
                        continue;
                    }
                    $model->create($data);
                    $counter['copy']++;
                    $progressBar->advance();
                } catch (\Throwable $th) {
                    $counter['errors']++;
                }
            }
            $progressBar->finish();
            echo "\n";
            echo "Перенесено " . $counter['copy'] . "\n";
            echo "Пропущено " . $counter['skeep'] . "\n";
            echo "Ошибок " . $counter['errors'] . "\n";

        }
        Model::reguard();
    }
}
