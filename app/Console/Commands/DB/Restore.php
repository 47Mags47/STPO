<?php

namespace App\Console\Commands\DB;

use App\Core\Dumper;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class Restore extends Command
{

    protected $signature = 'db:restore {path?}';
    protected $description = 'Восстанавливает копию БД (на выбор 10 последних)';

    public function handle()
    {
        $this->info('Восстановление дампа БД');

        if ($this->argument('path') !== null)
            $backup_path = $this->argument('path');
        else {
            $backups = array_slice(Storage::files('backup/full'), -10);
            $backup_path = Storage::path($this->choice('Выбор дампа', array_reverse($backups), 0));
        }

        $dumper = new Dumper();
        $dumper->restore($backup_path);

        $this->info('Восстановление дампа БД Завершено');
    }
}
