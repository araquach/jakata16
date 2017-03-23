<?php

namespace App\Console\Commands\Prospect;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use App\Prospect;
use DB;
use Carbon\Carbon;
use Mail;

class FollowUp2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'followUp2';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Second email to prospect client';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    
    public function handle()
    {
        
    }
}
