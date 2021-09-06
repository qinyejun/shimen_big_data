<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\OrderShipped;
use App\Notifications\OrderStatisticsNotification;
use Notification;
use App\User;

class OrderStatisticsListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $users = User::all();
        Notification::send($users, new OrderStatisticsNotification());
    }
}
