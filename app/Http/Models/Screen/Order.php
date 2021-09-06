<?php

namespace App\Http\Models\Screen;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //商品分类
    protected $table = 'order';
    protected $primaryKey = 'order_id';
    protected $fillable = ['order_no', 'site_id', 'site_name', 'website_id', 'order_money', 'goods_num', 'pay_time', 'pay_status', 'address']; //批量赋值
}
