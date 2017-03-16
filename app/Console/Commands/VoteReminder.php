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
       		$noVotes = User::with('votes')
				->whereDoesntHave('votes', function($query)
				{
					$query->where('created_at', '>', Carbon::now()->startOfWeek());
				})->get();
       		
       		$withVotes = DB::table('users')->select('name', 'users.salon_id', DB::raw('count(superstylists.id) as vote_count'))
					->join('superstylists', function($join) {
						$join->on('users.id', '=', 'superstylists.voter_id')
						->where('superstylists.created_at', '>', Carbon::now()->startOfWeek());
					})->groupBy('users.id')->get()->toArray();
       		
       		$jakStaffCount = User::where('salon_id', 1);
       		
       		$pkStaffCount = User::where('salon_id', 2);
       		
       		$message->from('booking@jakatasalon.co.uk', 'Jakata');
			
			foreach ($withVotes as $withVote) 
			{
                if($withVote->salon_id == 1 && $withVote->vote_count < $jakStaffCount)
			    {
			        $message->to($withVote->email);
			    }
			    elseif($withVote->salon_id == 2 && $withVote->vote_count < $pkStaffCount)
			    {
			        $message->to($withVote->email);
			    }
			    
			    $message->to($noVote->email);
            }
       		
       		$message->subject('Super Stylist Vote Reminder');
   		});
        
        $this->info('Emails have been successfully sent');
    }
}
