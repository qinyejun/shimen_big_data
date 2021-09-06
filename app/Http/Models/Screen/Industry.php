<?php

namespace App\Http\Models\Screen;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    //商品分类
    protected $table = 'shop_category';
    protected $primaryKey = 'category_id';
    protected $fillable = ['category_name', 'baozheng_money', 'sort']; //批量赋值
}
