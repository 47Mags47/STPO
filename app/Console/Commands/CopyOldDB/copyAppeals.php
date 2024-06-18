<?php

namespace App\Console\Commands\CopyOldDB;

use Illuminate\Console\Command;

class copyAppeals extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:copy-appeals';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('down');
        echo "Приложение отключено\n";

        for ($i = 0; $i < 10; $i++) {
            echo "Прошло $i сек.\n";
            sleep(1);
        }

        $this->call('up');
        //dump(config('app.app_disable'));
    }
}
