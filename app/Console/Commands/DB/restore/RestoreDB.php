<?php

namespace App\Console\Commands\DB\restore;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class RestoreDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:restore {--date=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Восстановление БД из бэкапа';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Восстановление БД из бэкапа');
        $path = $this->option('date')
            ? "full/backup_" . $this->option('date') . '.sql'
            : collect(Storage::disk('backup')->files('full'))->last();
        $connect_attr = "--user=" . env('DB_USERNAME') . " --password=" . env('DB_PASSWORD');

        $drop_command = "mysql $connect_attr -e " . '"DROP DATABASE STPO; CREATE DATABASE STPO"';
        $change_dir_path = Storage::disk('backup')->path('');
        $database = env('DB_DATABASE');
        $restore_command = "mysql $connect_attr $database < $path";

        $command = "$drop_command && cd $change_dir_path && $restore_command";
        exec($command);
    }
}
