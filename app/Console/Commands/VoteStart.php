<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use App\User;
use App\CustomerService;
use DB;
use Carbon\Carbon;
use Mail;

class VoteStart extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'voteStart';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email to kick start the voting process';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Mail::send('emails.superstylist.start', compact('users'), function($message)
   		{
       		$recipients = DB::table('users')->get();
					
       		$message->from('booking@jakatasalon.co.uk', 'Jakata');
			
			foreach($recipients as $recipient) {
				$message->to($recipient->email);
			}
       		
       		$message->subject('Customer Service - time to vote!');
   		});
        
        $this->info('Emails have been successfully sent');
    }
}
