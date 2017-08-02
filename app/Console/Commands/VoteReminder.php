<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use App\User;
use App\CustomerService;
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
       		$jakRecipients = DB::table('users')->select('users.email', 'users.salon_id', DB::raw('count(customerservices.id) as votes'))
					->where('users.salon_id', '=', '1')
					->leftJoin('customerservices', function($join) {
						$join->on('users.id', '=', 'customerservices.voter_id')
						->where('customerservices.created_at', '>', Carbon::now()->startOfWeek());
					})->groupBy('users.id')->get();
					
			$pkRecipients = DB::table('users')->select('users.email', 'users.salon_id', DB::raw('count(customerservices.id) as votes'))
					->where('users.salon_id', '=', '2')
					->leftJoin('customerservices', function($join) {
						$join->on('users.id', '=', 'customerservices.voter_id')
						->where('customerservices.created_at', '>', Carbon::now()->startOfWeek());
					})->groupBy('users.id')->get();
       		
       		$message->from('booking@jakatasalon.co.uk', 'Jakata');
			
			foreach($jakRecipients as $jakRecipient) {
				if($jakRecipient->votes < count($jakRecipients) -1) {
				    
				    $message->to($jakRecipient->email);
				}
			}
			
			foreach($pkRecipients as $pkRecipient) {
				if($pkRecipient->votes < count($pkRecipients) -1) {
				    
				    $message->to($pkRecipient->email);
				}
			}
       		
       		$message->subject('Customer Service Vote Reminder');
   		});
        
        $this->info('Emails have been successfully sent');
    }
}
