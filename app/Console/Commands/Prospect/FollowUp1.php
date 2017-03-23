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
        Mail::send('emails.prospect.female.followup1', compact('message'), function($message)
   		{
       		$recipients = Prospect::get();
       		
       		$message->from('offers@jakatasalon.co.uk', 'Jakata');
       		
       		foreach($recipients as $recipient) {
       		    $message->to($recipient->email);
       		}
       		
       		$message->subject('Thanks for applying for your FREE products!');
   		});
        
        $this->info('FirstFollow up emails have been successfully sent');
    }
}