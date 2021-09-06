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

class SaleRankingNotification extends Notification implements ShouldQueue
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
        $shop_sale_ranking = $this->shopSaleRanking();

        return new BroadcastMessage([
            "shop_sale_ranking" => $shop_sale_ranking
        ]);
    }

    private function shopSaleRanking(){
        $perPage = 20;
        $order_rank = DB::connection('mysql2')->table('order')
            ->select(DB::connection('mysql2')->raw('site_id, SUM(order_money) as order_sales'))
            ->groupBy('site_id')
            ->orderBy('order_sales', 'desc')
            ->limit($perPage)
            ->get();
        if($order_rank){
            foreach ($order_rank as $key => $value) {
                $shop = DB::connection('mysql2')->table('shop')->where('site_id', $value->site_id)->first();
                $order_rank[$key]->site_name = $shop ? $shop->site_name : '';
            }
            return $order_rank;
        }
        else{
            return [];
        }
    }
}
