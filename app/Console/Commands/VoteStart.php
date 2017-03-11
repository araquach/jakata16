<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use App\User;
use App\Superstylist;
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
       		$recipients = User::with('votes')->get();
       		
       		$jakStaffCount = User::where('salon_id', 1);
       		
       		$pkStaffCount = User::where('salon_id', 2);
       		
       		$message->from('booking@jakatasalon.co.uk', 'Jakata');
			
			foreach ($recipients as $recipient) 
			{
			    
			    if($recipient->salon_id == 1 && $recipient->votes->count() < $jakStaffCount->count() -1)
			    {
			    
                    $message->to($recipient->email);
                
			    }
			    
			    elseif($recipient->salon_id == 2 && $recipient->votes->count() < $pkStaffCount->count() -1)
			    {
			        
			        $message->to($recipient->email);
			        
			    }
            }
       		
       		$message->subject('Super Stylist - time to vote!');
   		});
        
        $this->info('Emails have been successfully sent');
    }
}
