<?php

namespace App\Console\Commands\DB;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class Reload extends Command
{
    protected $signature = 'db:reload';
    protected $description = '
        Выполняет перезагрузку БД
            ->Сохранение данных
            ->Сброс БД
            ->Восстановление архитектуры
            ->Восстановление данных
    ';

    public function handle()
    {
        $this->call('down', ['--secret' => env('APP_KEY', 'secret')]);

        try {
            $this->call(FullBackup::class);
            $this->call(Backup::class);
        } catch (\Throwable $th) {
            $this->error($th->getMessage());
            return;
        }

        try {
            $this->call('migrate:fresh', ['--seed' => true, '--force' => true]);

            $backup_path = Storage::files('backup/data');
            $backup_path = collect($backup_path)->last();
            $backup_path = storage_path('app/private/' . $backup_path);
            $this->call(Restore::class, ['path' => $backup_path]);
        } catch (\Throwable $th) {
            $this->error($th->getMessage());
            $this->info('Запуск восстановленя последней копии');

            $full_backup_path = Storage::files('backup/full');
            $full_backup_path = collect($full_backup_path)->last();
            $full_backup_path = storage_path('app/private/' . $full_backup_path);
            $this->call(Restore::class, ['path' => $full_backup_path]);
        }

        $this->call('up');
    }
}
