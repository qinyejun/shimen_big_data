<?php

namespace App\Http\Models\Mongo;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use DB;

class Plc extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $connection = 'mongodb';  //库名
    protected $collection = 'plcs';     //文档名
    protected $primaryKey = '_id';    //设置id
    //protected $fillable = ['name', 'desc'];  //设置字段白名单


}
