<?php

namespace App\Console\Commands\DB\backup;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class SaveDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Создает бэкап БД по пути storage/app/backup/full/';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Создание бэкапа БД');
        $path_name = 'full';
        $storage = Storage::disk('backup');
        $storage->has($path_name) or $storage->makeDirectory($path_name);

        $file_name = 'backup_'. now()->format('Y_m_d_H_i_s') . ".sql";
        $path = $storage->path($path_name) . '/' . $file_name;
        $connect_attr = "--user=" . env('DB_USERNAME') . " --password=" . env('DB_PASSWORD');

        $command = "mysqldump --no-tablespaces --complete-insert $connect_attr STPO > " . $path;
        exec($command);
    }
}
