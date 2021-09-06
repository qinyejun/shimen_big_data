<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Screen\Industry;
use App\Http\Models\Screen\Goods;
use App\Http\Models\Screen\Order;
use App\Http\Models\Screen\Shop;
use App\Http\Models\Screen\Member;

class NewOrderNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['broadcast'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toBroadcast($notifiable)
    {
        $latest_order = $this->latestOrder();

        return new BroadcastMessage([
            "latest_order" => $latest_order
        ]);
    }

    private function latestOrder(){
        $perPage = 20;
        $lists = Order::where('pay_status', 1)->limit($perPage)->orderBy('order_id', 'desc')->get();
        return $lists;
    }
}
