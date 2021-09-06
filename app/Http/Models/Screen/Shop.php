<?php

namespace App\Http\Models\Screen;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //商品分类
    protected $connection = 'mysql2';
    protected $table = 'shop';
    protected $primaryKey = 'site_id';
    protected $fillable = ['site_name', 'website_id', 'expire_time', 'cert_id', 'category_id', 'category_name', 'shop_status', 'logo', 'province_name', 'city_name', 'district_name', 'community_name', 'create_time']; //批量赋值
}
