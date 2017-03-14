<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use App\User;
use App\Superstylist;
use DB;
use Carbon\Carbon;
use Mail;

class VoteReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'voteReminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email reminder to staff who still need to vote';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Mail::send('emails.superstylist.reminder', compact('users'), function($message)
   		{
       		$recipients = User::with('votes')
       		        ->whereDoesntHave('votes', function($query)
					{
						$query->where('created_at', '>', Carbon::now()->startOfWeek());
					})->get();
       		
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
       		
       		$message->subject('Super Stylist Vote Reminder');
   		});
        
        $this->info('Emails have been successfully sent');
    }
}
