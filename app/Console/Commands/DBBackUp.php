<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DBBackUp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'DB:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Резервное копирование БД';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filename = "backup-" . now()->format('Y-m-d-H-i-s') . ".gz";
        $full_path = storage_path('app/backup/sql/') . $filename;
        $connect_attr = "--user=" . env('DB_USERNAME') . " --password=" . env('DB_PASSWORD');
        $command = "mysqldump --no-tablespaces " . $connect_attr. " STPO | gzip > " . $full_path;
        // dd($command);

        $returnVar = NULL;
        $output  = NULL;

        exec($command, $output, $returnVar);
    }
}
