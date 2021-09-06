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

class IndustryStatisticsNotification extends Notification implements ShouldQueue
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
        $shop_sale_ranking = $this->shopEntryStatistic();
        $industry_area_statistic = $this->industryAreaStatistic();

        return new BroadcastMessage([
            "shop_sale_ranking" => $shop_sale_ranking,
            "industry_area_statistic" => $industry_area_statistic
        ]);
    }

    private function shopEntryStatistic(){
        $shop_community = DB::connection('mysql2')->table('shop')
            ->select(DB::connection('mysql2')->raw('community_name, COUNT(community_name) as shop_num'))
            ->groupBy('community_name')
            ->get();

        if($shop_community){
            foreach ($shop_community as $key => $value) {
                $shop_community_sales = 0;
                $shops = Shop::where('community_name', $value->community_name)->get();
                if($shops){
                    foreach ($shops as $k => $shop) {
                        $order_sum = DB::connection('mysql2')->table('order')
                            ->select(DB::connection('mysql2')->raw('SUM(order_money) as order_sales'))
                            ->where('site_id', $shop->site_id)
                            ->first();
                        $shop_community_sales += $order_sum ? $order_sum->order_sales : 0;
                    }
                }
                $shop_community[$key]->order_sales = round($shop_community_sales, 2);
            }
            return $shop_community;
        }
        else{
            return [];
        }
    }

    private function industryAreaStatistic()
    {
        $shop_category = DB::connection('mysql2')->table('shop_category')->get();
        if($shop_category){
            foreach ($shop_category as $key => $value) {
                $all_shop_num = DB::connection('mysql2')->table('shop')->where('category_id', $value->category_id)->count();
                $statistics = DB::connection('mysql2')->table('shop')
                    ->select(DB::connection('mysql2')->raw('community, COUNT(community) as shop_num'))
                    ->where('category_id', $value->category_id)
                    ->groupBy('community')
                    ->orderBy('shop_num', 'desc')
                    ->get();
                if($statistics){
                    foreach ($statistics as $k => $statistic) {
                        $area = DB::connection('mysql2')->table('area')->where('id', $statistic->community)->first();
                        $statistics[$k]->community_name = $area ?$area->name : '';
                        $statistics[$k]->shop_num_percent = $all_shop_num ? round(100*$statistic->shop_num/$all_shop_num, 1) : 0;
                    }
                }
                $shop_category[$key]->statistic = $statistics;
            }
            return $shop_category;
        }
        else{
            return [];
        }
    }
}
