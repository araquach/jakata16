<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\VoteStart::class,
        Commands\VoteReminder::class,
        Commands\Prospect\FollowUp1::class,
        Commands\Prospect\FollowUp2::class,
        Commands\Prospect\FollowUp3::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('voteStart')
                  ->weekly()->wednesdays()->at('18:10');
        
        $schedule->command('voteReminder')
                  ->weekly()->fridays()->at('13:00');
                 
        // $schedule->command('followUp1')
                //  ->weekly()->wednesdays()->at('16:30');
    }
}
