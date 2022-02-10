<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
     
   protected $commands = [
        //Commands\HourlyUpdate::class
    ];

    protected function schedule(Schedule $schedule)
    {

        $schedule->command('minute:update')
                 ->everyMinute()
                 ->appendOutputTo(storage_path('logs/minute.log')); //stores the logs of every execution
        
        //$schedule->command('fetch-laravel-versions')->hourly();
        //$schedule->command('tweet-important-dates')->dailyAt('8:00')->timezone('American/New_York');

        $schedule->command('notify:email')
                 ->daily()
                 ->appendOutputTo(storage_path('logs/inspire.log'));    //one way to store logs

    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
