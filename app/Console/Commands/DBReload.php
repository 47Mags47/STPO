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
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('migrate:fresh', ['--seed' => 'default']);
        $this->call(CopyOldDB\copyUsers::class);
        $this->call(CopyOldDB\copyAppeals::class);
    }
}
