<?php

namespace App\Http\Models\Screen;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //商品分类
    protected $table = 'member';
    protected $primaryKey = 'member_id';
    protected $fillable = ['username', 'nickname', 'mobile']; //批量赋值
    protected $connection = 'mysql2';
}
