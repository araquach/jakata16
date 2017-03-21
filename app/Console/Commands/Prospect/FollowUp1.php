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
    protected $signature = 'followUp1';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'First email to prospect client';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Mail::send('emails.prospect.followup1', compact('prospects'), function($message)
   		{
       		$message->from('booking@jakatasalon.co.uk', 'Jakata');
       		
       		$message->subject('Your Free Products are on the way!');
   		});
        
        $this->info('Follow up 1 emails have been successfully sent');
    }
}
