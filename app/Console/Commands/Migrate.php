<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Migrate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:migrate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Runs fresh migration command and performs other necessary actions';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('migrate:fresh',[
            '--seed' => 'default'
        ]);
        $this->call('passport:install');
        return true;
    }
}
