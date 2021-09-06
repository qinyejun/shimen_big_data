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

class OrderStatisticsNotification extends Notification implements ShouldQueue
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
        $order_area_statistic = $this->orderAreaStatistic();

        return new BroadcastMessage([
            "order_area_statistic" => $order_area_statistic
        ]);
    }

    private function orderAreaStatistic(){
        $all_order_num = DB::connection('mysql2')->table('order')->count();
        $province_order = DB::connection('mysql2')->table('order')
            ->select(DB::connection('mysql2')->raw('province_id, COUNT(province_id) as order_num'))
            ->groupBy('province_id')
            ->get();

        if($province_order){
            foreach ($province_order as $key => $value) {
                $province = DB::connection('mysql2')->table('area')->where('id', $value->province_id)->first();
                $province_order[$key]->province_name = $province ? $province->name : '';
                $province_order[$key]->order_num_percent = $all_order_num ? round(100*$value->order_num/$all_order_num, 1) : 0;
            }
            return $province_order;
        }
        else{
            return [];
        }
    }
}
