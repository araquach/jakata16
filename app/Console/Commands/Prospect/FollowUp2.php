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
        Mail::send('emails.prospect.followup2', compact('prospects'), function($message)
   		{
       		$message->from('booking@jakatasalon.co.uk', 'Jakata');
       		
       		$message->subject('How are your products?');
   		});
        
        $this->info('Follow up 2 emails have been successfully sent');
    }
}
