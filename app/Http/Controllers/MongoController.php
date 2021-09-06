<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Models\Mongo\Plc;

class MongoController extends Controller
{
    public function index(){
        dd(DB::connection('mongodb')->collection('plcs')->first());
    }

    public function model(){
        dd(Plc::first()->topic);
    }
}
