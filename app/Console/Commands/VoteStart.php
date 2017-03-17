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
       		$jakRecipients = DB::table('users')->select('users.email', 'users.salon_id', DB::raw('count(superstylists.id) as votes'))
					->where('users.salon_id', '=', '1')
					->leftJoin('superstylists', function($join) {
						$join->on('users.id', '=', 'superstylists.voter_id')
						->where('superstylists.created_at', '>', Carbon::now()->startOfWeek());
					})->groupBy('users.id')->get();
					
			$pkRecipients = DB::table('users')->select('users.email', 'users.salon_id', DB::raw('count(superstylists.id) as votes'))
					->where('users.salon_id', '=', '2')
					->leftJoin('superstylists', function($join) {
						$join->on('users.id', '=', 'superstylists.voter_id')
						->where('superstylists.created_at', '>', Carbon::now()->startOfWeek());
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
       		
       		$message->subject('Super Stylist - time to vote!');
   		});
        
        $this->info('Emails have been successfully sent');
    }
}
