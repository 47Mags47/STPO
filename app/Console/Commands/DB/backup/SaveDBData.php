<?php

namespace App\Console\Commands\DB\backup;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class SaveDBData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup-data {--all} {--ignore=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Создает резервную дамп данных';

    /**
     * Execute the console command.
     */

    private $ignore_list = [
        'cache',
        'cache_locks',
        'failed_jobs',
        'glossary__csvi__appeal__categories',
        'glossary__csvi__appeal__statuses',
        'glossary__csvi__appeal__thems',
        'glossary__main__access_levels',
        'glossary__main__alert_types',
        'glossary__main__division_types',
        'glossary__main__modul_departments',
        'glossary__main__page_tables',
        'glossary__main__user_roles',
        'glossary__oor_inv_sheets',
        'jobs',
        'job_batches',
        'main__cities',
        'main__divisions',
        'main__moduls',
        'migrations',
        'password_reset_tokens',
        'sessions',
    ];

    private function getIgnore()
    {
        $ignore_list = collect($this->ignore_list)->map(function ($table) {
            return ' --ignore-table=' . env('DB_DATABASE') . '.' . $table;
        })->toArray();
        return implode(' ', $ignore_list) . ')';
    }

    public function handle()
    {
        $this->info('Создание дампа данных БД');
        $path_name = 'data';
        $storage = Storage::disk('backup');
        $storage->has($path_name) or $storage->makeDirectory($path_name);

        $file_name = 'backup_' . now()->format('Y_m_d_H_i_s') . ".sql";
        $path = $storage->path($path_name) . '/' . $file_name;
        $connect_attr = "--user=" . env('DB_USERNAME') . " --password=" . env('DB_PASSWORD');
        $command = "mysqldump --no-tablespaces --complete-insert $connect_attr --no-create-info " . $this->getIgnore() . " STPO > " . $path;

        try {
            exec($command);
            echo "Бэкап сохранен в $path \n";
            return true;
        } catch (\Throwable $th) {
            echo "Ошибка при сохранении дампа\n";
            dump($th);
            return false;
        }
    }
}
