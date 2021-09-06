<?php

namespace App\Http\Models\Screen;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    //商品分类
    protected $table = 'goods';
    protected $primaryKey = 'goods_id';
    protected $fillable = ['goods_name', 'price']; //批量赋值
    protected $connection = 'mysql2';
}
