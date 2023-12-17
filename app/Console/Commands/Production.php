<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Production extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'production';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Production command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Production command');

        $this->call('config:cache');
        $this->call('route:cache');
        $this->call('view:cache');
        $this->call('optimize');
    }
}
