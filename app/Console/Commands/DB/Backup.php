<?php

namespace App\Console\Commands\DB;

use App\Core\Dumper;
use Illuminate\Console\Command;

class Backup extends Command
{
    protected $signature = 'db:backup';
    protected $description = 'Полное сохранение БД';
    /* HACK Продумать способ автоматизации сбора списка для игнорирования */
    protected $ignored = [
        'sys__cache',
        'sys__cache_locks',
        'sys__failed_jobs',
        'sys__jobs',
        'sys__job_batches',
        'sys__migrations',
        'sys__password_reset_tokens',
        'sys__sessions',
        'main__cityes',
        'main__departments',
        'main__divisions',
        'main__moduls',
        'main__permissions',
        'main__roles',
        'main__role_pivot_permission',
        'csvi__appeal__category',
        'csvi__appeal__statuses',
        'csvi__appeal__them',
        'csvi__technical__marks',
        'csvi__technical__types',
    ];

    public function handle()
    {
        $this->info('Создание дампа БД');

        $dumper = new Dumper();
        $dumper
            ->setPath(storage_path('app/private/backup/data'))
            ->setName(now()->format('dmYHis_') . "backup.sql")
            ->onlyData(true)
            ->ignore($this->ignored);
        $dump_path = $dumper->start();

        $this->info('Создание дампа БД завершено');
        $this->info('Дамп сохранен в '. $dump_path);
    }
}
