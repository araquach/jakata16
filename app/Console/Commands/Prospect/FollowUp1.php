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
        // Send to Female Clients
        
        $women = Prospect::where('gender', 'F')->get();
        
        $women = $women->toArray();
        
        foreach($women as $woman) {
            
            Mail::send('emails.prospect.new.female.followup1', $woman, function($message) use ($woman)
       		{
          		$message->from('offers@jakatasalon.co.uk', 'Jakata');
           		
          		$message->to($woman['email']);
           		
          		$message->subject('Thanks for applying for your FREE products!');
       		});
       		    
       	}
        
        // Send to male clients
        
        $men = Prospect::where('gender', 'M')->get();
        
        $men = $men->toArray();
        
        foreach($men as $man) {
            
            Mail::send('emails.prospect.new.male.followup1', $man, function($message) use ($man)
       		{
          		$message->from('offers@jakatasalon.co.uk', 'Jakata');
           		
          		$message->to($man['email']);
           		
          		$message->subject('Thanks for applying for your FREE products!');
       		});
       		    
       	}
    
        $this->info('FirstFollow up emails have been successfully sent');
    }
}