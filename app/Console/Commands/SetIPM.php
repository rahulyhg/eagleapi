<?php

namespace App\Console\Commands;

use App\IPM;
use App\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class SetIPM extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ipm';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create New IPM for all users';

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
        foreach (User::all() as $user){
            $ipm = new IPM();
            $ipm->start_date = Carbon::today();
            $ipm->end_date = Carbon::today()->addDays(4);
            $ipm->employee_id = $user->id;
            $ipm->save();
        }
        return true;
    }
}
