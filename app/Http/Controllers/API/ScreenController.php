<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use UtilService;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Screen\Industry;
use App\Http\Models\Screen\Goods;
use App\Http\Models\Screen\Order;
use App\Http\Models\Screen\Shop;
use App\Http\Models\Screen\Member;
use Log;

class ScreenController extends Controller
{
    public function industries(Request $request)
    {
        $perPage = $request->input('num');
        $perPage = $perPage ? $perPage : 20;
        $page = $request->input('page');
        $page = $page ? $page : 1;

        $lists = Industry::select(['*']);
        $total = $lists->count();
        $lists = $lists->offset(($page - 1) * $perPage)->limit($perPage)->get()->toArray();
        return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', ['data' => $lists, 'total' => $total]);
    }

    public function goods(Request $request)
    {
        $perPage = $request->input('num');
        $perPage = $perPage ? $perPage : 20;
        $page = $request->input('page');
        $page = $page ? $page : 1;

        $lists = Goods::select(['*']);
        $total = $lists->count();
        $lists = $lists->offset(($page - 1) * $perPage)->limit($perPage)->get()->toArray();
        return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', ['data' => $lists, 'total' => $total]);
    }

    public function orders(Request $request)
    {
        $perPage = $request->input('num');
        $perPage = $perPage ? $perPage : 20;
        $page = $request->input('page');
        $page = $page ? $page : 1;

        $lists = Order::select(['*']);
        $total = $lists->count();
        $lists = $lists->offset(($page - 1) * $perPage)->limit($perPage)->get()->toArray();
        return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', ['data' => $lists, 'total' => $total]);
    }

    public function shops(Request $request)
    {
        $perPage = $request->input('num');
        $perPage = $perPage ? $perPage : 20;
        $page = $request->input('page');
        $page = $page ? $page : 1;

        $lists = Shop::select(['*']);
        $total = $lists->count();
        $lists = $lists->offset(($page - 1) * $perPage)->limit($perPage)->get()->toArray();
        foreach ($lists as $key => $value) {
            $goods_num = Goods::select(['goods_id'])->count();
            $contents[$key]['goods_num'] = $goods_num ? $goods_num : 0;
            $order_sum = DB::connection('mysql2')->table('order')
                ->select(DB::connection('mysql2')->raw('SUM(order_money) as order_sales, site_id, COUNT(site_id) as order_num'))
                ->where('site_id', $value['site_id'])
                ->groupBy('site_id')
                ->first();

            $contents[$key]['order_num'] = $order_sum ? $order_sum->order_num : 0;
            $contents[$key]['order_sales'] = $order_sum ? $order_sum->order_sales : 0;
        }
        return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', ['data' => $lists, 'total' => $total]);
    }

    //所有统计
    public function totalStatistics(Request $request)
    {
        $todaytime = strtotime(date('Y-m-d') . ' 00:00:00');
        $monthtime = strtotime(date('Y-m') . '-01 00:00:00');
        $order_all_sum = DB::connection('mysql2')->table('order')
            ->select(DB::connection('mysql2')->raw('SUM(order_money) as order_sales, COUNT(site_id) as order_num'))
            ->first();

        $order_month_sum = DB::connection('mysql2')->table('order')
            ->select(DB::connection('mysql2')->raw('SUM(order_money) as order_sales, COUNT(site_id) as order_num'))
            ->where('create_time', '>', $monthtime)
            ->first();
        $order_today_sum = DB::connection('mysql2')->table('order')
            ->select(DB::connection('mysql2')->raw('SUM(order_money) as order_sales, COUNT(site_id) as order_num'))
            ->where('create_time', '>', $todaytime)
            ->first();

        $members = DB::connection('mysql2')->table('member')->count();
        $today_members = DB::connection('mysql2')->table('member')->where('reg_time', '>', $todaytime)->count();
        $today_login_members = DB::connection('mysql2')->table('member')->where('last_login_time', '>', $todaytime)->count();

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
        return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', $rtn);
    }

    //店铺入驻统计
    public function shopEntryStatistic(Request $request)
    {
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
            return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', $shop_community);
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '获取失败', []);
        }
    }

    //实时订单
    public function latestOrder(Request $request)
    {
        $perPage = 20;
        $lists = Order::where('pay_status', 1)->limit($perPage)->orderBy('order_id', 'desc')->get();
        return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', $lists);
    }

    //销售订单去向统计
    public function orderAreaStatistic(Request $request)
    {
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
            return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', $province_order);
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '获取失败', []);
        }
    }

    //销售排名
    public function shopSaleRanking(Request $request)
    {
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
            return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', $order_rank);
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '获取失败', []);
        }
    }

    public function industryAreaStatistic(Request $request)
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
            return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', $shop_category);
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '获取失败', []);
        }
    }
}
