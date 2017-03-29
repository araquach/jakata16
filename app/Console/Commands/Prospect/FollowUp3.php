<?php

namespace App\Console\Commands\Prospect;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use App\Prospect;
use DB;
use Carbon\Carbon;
use Mail;

class FollowUp3 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'followUp3';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Third email to prospect clients';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Send to Female Clients
        
        
        // Send to male clients
    }
}
