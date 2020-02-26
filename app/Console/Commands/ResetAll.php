<?php

namespace App\Console\Commands;

use App\Model\User;
use App\Model\UserChallange;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ResetAll extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reset:challange';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset Challange to start';

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
        UserChallange::truncate();
        Artisan::call('db:seed');
        User::query()->update(['previous' => 'activity', 'current' => null, 'current_id' => 0]);
        $this->info('Everything Reset and Good to Go!!!');
    }
}
