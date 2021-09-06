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
use Log;

class TotalStatisticsNotification extends Notification implements ShouldQueue
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
        $total_statistics = $this->totalStatistics();
        $shop_entry_statistics = $this->shopEntryStatistic();
        $latest_order = $this->latestOrder();
        $order_area_statistic = $this->orderAreaStatistic();
        //$shop_sale_ranking = $this->shopSaleRanking();
        //$industry_area_statistic = $this->industryAreaStatistic();

        return new BroadcastMessage([
            "total_statistics" => $total_statistics,
            "shop_entry_statistics" => $shop_entry_statistics,
            "latest_order" => $latest_order,
            "order_area_statistic" => $order_area_statistic,
            //"shop_sale_ranking" => $shop_sale_ranking,
            //"industry_area_statistic" => $industry_area_statistic
        ]);
    }

    private function totalStatistics(){
        $todaytime = strtotime(date('Y-m-d') . ' 00:00:00');
        $monthtime = strtotime(date('Y-m') . '-01 00:00:00');
        $order_all_sum = DB::table('order')
            ->select(DB::raw('SUM(order_money) as order_sales, COUNT(site_id) as order_num'))
            ->first();

        $order_month_sum = DB::table('order')
            ->select(DB::raw('SUM(order_money) as order_sales, COUNT(site_id) as order_num'))
            ->where('create_time', '>', $monthtime)
            ->first();
        $order_today_sum = DB::table('order')
            ->select(DB::raw('SUM(order_money) as order_sales, COUNT(site_id) as order_num'))
            ->where('create_time', '>', $todaytime)
            ->first();

        $members = DB::table('member')->count();
        $today_members = DB::table('member')->where('reg_time', '>', $todaytime)->count();
        $today_login_members = DB::table('member')->where('last_login_time', '>', $todaytime)->count();

        $rtn = array(
            "all_order_sales" => $order_all_sum ? $order_all_sum->order_sales : 0,
            "all_order_num" => $order_all_sum ? $order_all_sum->order_num : 0,
            "month_order_sales" => $order_month_sum ? $order_month_sum->order_sales : 0,
            "month_order_num" => $order_month_sum ? $order_month_sum->order_num : 0,
            "today_order_sales" => $order_today_sum ? $order_today_sum->order_sales : 0,
            "today_order_num" => $order_today_sum ? $order_today_sum->order_num : 0,
            "all_members" => $members ? $members : 0,
            "today_members" => $today_members ? $today_members : 0,
            "today_login_members" => $today_login_members ? $today_login_members : 0,
        );

        return $rtn;
    }

    private function shopEntryStatistic(){
        $shop_community = DB::table('shop')
            ->select(DB::raw('community_name, COUNT(community_name) as shop_num'))
            ->groupBy('community_name')
            ->get();

        if($shop_community){
            foreach ($shop_community as $key => $value) {
                $shop_community_sales = 0;
                $shops = Shop::where('community_name', $value->community_name)->get();
                if($shops){
                    foreach ($shops as $k => $shop) {
                        $order_sum = DB::table('order')
                            ->select(DB::raw('SUM(order_money) as order_sales'))
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

    private function latestOrder(){
        $perPage = 20;
        $lists = Order::where('pay_status', 1)->limit($perPage)->orderBy('order_id', 'desc')->get();
        return $lists;
    }

    private function orderAreaStatistic(){
        $all_order_num = DB::table('order')->count();
        $province_order = DB::table('order')
            ->select(DB::raw('province_id, COUNT(province_id) as order_num'))
            ->groupBy('province_id')
            ->get();

        if($province_order){
            foreach ($province_order as $key => $value) {
                $province = DB::table('area')->where('id', $value->province_id)->first();
                $province_order[$key]->province_name = $province ? $province->name : '';
                $province_order[$key]->order_num_percent = $all_order_num ? round(100*$value->order_num/$all_order_num, 1) : 0;
            }
            return $province_order;
        }
        else{
            return [];
        }
    }

    private function shopSaleRanking(){
        $perPage = 20;
        $order_rank = DB::table('order')
            ->select(DB::raw('site_id, SUM(order_money) as order_sales'))
            ->groupBy('site_id')
            ->orderBy('order_sales', 'desc')
            ->limit($perPage)
            ->get();
        if($order_rank){
            foreach ($order_rank as $key => $value) {
                $shop = DB::table('shop')->where('site_id', $value->site_id)->first();
                $order_rank[$key]->site_name = $shop ? $shop->site_name : '';
            }
            return $order_rank;
        }
        else{
            return [];
        }
    }

    private function industryAreaStatistic()
    {
        $shop_category = DB::table('shop_category')->get();
        if($shop_category){
            foreach ($shop_category as $key => $value) {
                $all_shop_num = DB::table('shop')->where('category_id', $value->category_id)->count();
                $statistics = DB::table('shop')
                    ->select(DB::raw('community, COUNT(community) as shop_num'))
                    ->where('category_id', $value->category_id)
                    ->groupBy('community')
                    ->orderBy('shop_num', 'desc')
                    ->get();
                if($statistics){
                    foreach ($statistics as $k => $statistic) {
                        $area = DB::table('area')->where('id', $statistic->community)->first();
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
