<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DBReload extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:DBReload';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Выполняет перезагрузку БД (сохранение данных->восстановление архитектуры->восстановление данных)';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('down');
        $this->call(CopyDB::class);
        $this->call('migrate:fresh', ['--seed' => 'default']);
        $this->call(RestoreDB::class);
        $this->call('up');

        $this->call(CopyOldDB\copyUsers::class);
        $this->call(CopyOldDB\copyAppeals::class);
        $this->call(CopyOldDB\CopyAppealChat::class);
    }
}
