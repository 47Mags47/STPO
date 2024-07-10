<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Process;

class APPReload extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:APPReload {--DBReload}';

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
        $process = Process::path(base_path())->run('git pull')->throw();
        $process->output();
        if ($this->option('DBReload')) {
            $this->call(DBReload::class);
        }
        $process = Process::path(base_path())->run('npm run build')->throw();
        $process->output();
    }
}

