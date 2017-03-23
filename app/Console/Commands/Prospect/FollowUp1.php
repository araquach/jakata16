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
        // $data = Prospect::get();
        
        // $datas = $data->toArray();
        
        // foreach($datas as $data) {
            
        //     Mail::send('emails.prospect.female.followup1', $data, function($message) use ($data)
       	// 	{
        //   		$message->from('offers@jakatasalon.co.uk', 'Jakata');
           		
        //   		$message->to($data['email']);
           		
        //   		$message->subject('Thanks for applying for your FREE products!');
       	// 	});
       		    
       	// }
    
        // $this->info('FirstFollow up emails have been successfully sent');
    }
}