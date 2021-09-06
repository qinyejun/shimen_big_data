<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Screen\Goods;
use App\Http\Models\Screen\Order;
use App\Http\Models\Screen\Member;
use App\Http\Models\Screen\Shop;
use App\Events\GoodsShipped;
use App\Events\LoginShipped;
use App\Events\MemberShipped;
use App\Events\OrderShipped;
use App\Events\ShopShipped;

class eventGenerate extends Command
{
    const AJAX_SUCCESS = 0;
    const AJAX_FAIL = -1;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'event:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'event generate';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->newOrder();
        $this->newGoods();
        $this->newMember();
        $this->newShop();
        $this->newLogin();
    }

    private function newOrder(){
        $key = md5('niushop_order');
        if (!Cache::has($key)) {
            //没有缓存
            $latest_data = Order::orderBy('order_id', 'desc')->first();
            if($latest_data){
                Cache::add($key, $latest_data->order_id, 60 * 60); //60min
                event(new OrderShipped());      //触发新订单通知
            }
        }
        else{
            $cache_order_id = Cache::get($key);
            $latest_data = Order::orderBy('order_id', 'desc')->first();
            if($latest_data && $cache_order_id && $cache_order_id != $latest_data->order_id){
                Cache::forget($key);
                Cache::add($key, $latest_data->order_id, 60 * 60); //60min
                event(new OrderShipped());      //触发新订单通知
            }
        }
    }

    private function newGoods(){
        $key = md5('niushop_goods');
        if (!Cache::has($key)) {
            //没有缓存
            $latest_data = Goods::orderBy('goods_id', 'desc')->first();
            if($latest_data){
                Cache::add($key, $latest_data->goods_id, 60 * 60); //60min
                event(new GoodsShipped());      //触发新商品通知
            }
        }
        else{
            $cache_goods_id = Cache::get($key);
            $latest_data = Goods::orderBy('goods_id', 'desc')->first();
            if($latest_data && $cache_goods_id && $cache_goods_id != $latest_data->goods_id){
                Cache::forget($key);
                Cache::add($key, $latest_data->goods_id, 60 * 60); //60min
                event(new GoodsShipped());      //触发新商品通知
            }
        }
    }

    private function newMember(){
        $key = md5('niushop_member');
        if (!Cache::has($key)) {
            //没有缓存
            $latest_data = Member::orderBy('member_id', 'desc')->first();
            if($latest_data){
                Cache::add($key, $latest_data->member_id, 60 * 60); //60min
                event(new MemberShipped());      //触发新会员通知
            }
        }
        else{
            $cache_member_id = Cache::get($key);
            $latest_data = Member::orderBy('member_id', 'desc')->first();
            if($latest_data && $cache_member_id && $cache_member_id != $latest_data->member_id){
                Cache::forget($key);
                Cache::add($key, $latest_data->member_id, 60 * 60); //60min
                event(new MemberShipped());      //触发新会员通知
            }
        }
    }

    private function newShop(){
        $key = md5('niushop_shop');
        if (!Cache::has($key)) {
            //没有缓存
            $latest_data = Order::orderBy('site_id', 'desc')->first();
            if($latest_data){
                Cache::add($key, $latest_data->site_id, 60 * 60); //60min
                event(new ShopShipped());      //触发新订单通知
            }
        }
        else{
            $cache_site_id = Cache::get($key);
            $latest_data = Order::orderBy('site_id', 'desc')->first();
            if($latest_data && $cache_site_id && $cache_site_id != $latest_data->site_id){
                Cache::forget($key);
                Cache::add($key, $latest_data->site_id, 60 * 60); //60min
                event(new ShopShipped());      //触发新订单通知
            }
        }
    }

    private function newLogin(){
        $key = md5('niushop_login');
        if (!Cache::has($key)) {
            //没有缓存
            $latest_data = Member::orderBy('login_time', 'desc')->first();
            if($latest_data){
                Cache::add($key, $latest_data->login_time, 60 * 60); //60min
                event(new LoginShipped());      //触发新订单通知
            }
        }
        else{
            $cache_login_time = Cache::get($key);
            $latest_data = Member::orderBy('login_time', 'desc')->first();
            if($latest_data && $cache_login_time && $cache_login_time != $latest_data->login_time){
                Cache::forget($key);
                Cache::add($key, $latest_data->login_time, 60 * 60); //60min
                event(new LoginShipped());      //触发新订单通知
            }
        }
    }
}
