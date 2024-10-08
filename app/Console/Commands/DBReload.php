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
    protected $signature = 'app:DBReload {--skeep}';

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
        $this->call(DB\backup\SaveDB::class);

        try {
            if($this->call(DB\backup\SaveDBData::class)){
                $this->call('migrate:fresh', ['--seed' => 'default']);
                $this->call(DB\restore\RestoreData::class);
            }else{
                $this->call(DB\restore\RestoreDB::class);
            }
        } catch (\Throwable $th) {
            dump($th);
            $this->call(DB\restore\RestoreDB::class);
        }
        $this->call('up');
    }
}
