<?php

namespace App\Console\Commands\db;

use App\Core\Dumper;
use Illuminate\Console\Command;

class FullBackup extends Command
{
    protected $signature = 'db:full-backup';
    protected $description = 'Полное сохранение БД';

    public function handle()
    {
        $this->info('Создание дампа БД');

        $dumper = new Dumper();
        $dumper
            ->setPath(storage_path('app/private/backup/full'))
            ->setName(now()->format('dmYHis_') . "backup.sql");
        $dump_path = $dumper->start();

        $this->info('Создание дампа БД завершено');
        $this->info('Дамп сохранен в '. $dump_path);
    }
}
