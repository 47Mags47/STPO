<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class CopyDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:copyDB';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Сохранение Данных БД в json по пути Storage/app/backup';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $models = [
            \App\Models\Main\Main_User::class,
            \App\Models\Main\Main_Access::class,
            \App\Models\Main\Main_Division_Adminer::class,
            \App\Models\Main\Main_Division_Programmer::class,

            \App\Models\Oor\Oor_Inv_InDate::class,
            \App\Models\Oor\Oor_Inv_Raport::class,
            \App\Models\Oor\Oor_Inv_Data::class,
        ];
        $progressBar = $this->output->createProgressBar();
        $progressBar->setMaxSteps(count($models));
        $progressBar->start();
        $datetime = now()->format('Y_m_d_H_i');
        $folder_path = 'json/' . $datetime;
        $classes = [];

        foreach ($models as $model_name) {
            $model = new $model_name;
            $classes[class_basename($model)] = $model_name;
            try {
                $json = $model::get()->setHidden([])->toJson();
                Storage::disk('backup')->put($folder_path . '/' . class_basename($model::class) . '.json', $json);
            } catch (\Throwable $th) {
                echo "\n\n" . $th;
                echo "\nОШИБКА ПРИ ПОПЫТКЕ ПЕРЕНОСА " . $model->getTable() . "\n";
                dd("ПРОГРАММА ОСТАНОВЛЕНА");
            }
            $progressBar->advance();
        }
        Storage::disk('backup')->put('json/classes.json', collect($classes)->toJson());
        $progressBar->finish();
    }
}
