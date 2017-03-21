<?php

namespace App\Console\Commands\Prospect;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use App\Prospect;
use DB;
use Carbon\Carbon;
use Mail;

class FollowUp1 extends Command
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
    protected $description = 'Third email to prospect client';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Mail::send('emails.prospect.followup3', compact('prospects'), function($message)
   		{
       		$message->from('booking@jakatasalon.co.uk', 'Jakata');
       		
       		$message->subject('Third Email');
   		});
        
        $this->info('Follow up 3 Emails have been successfully sent');
    }
}
