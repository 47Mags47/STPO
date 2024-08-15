<?php

namespace App\Console\Commands\DB\restore;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class RestoreData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:restore-data {--date=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Восстановление дампа данных';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Восстановление данных БД из дампа');
        $path = $this->option('date')
            ? "data/backup_" . $this->option('date') . '.sql'
            : collect(Storage::disk('backup')->files('data'))->last();
        $connect_attr = "--user=" . env('DB_USERNAME') . " --password=" . env('DB_PASSWORD');
        $change_dir_path = Storage::disk('backup')->path('');
        $restore_command = "mysql $connect_attr --force STPO < $path";

        $command = "cd $change_dir_path && $restore_command";
        exec($command);
    }
}
