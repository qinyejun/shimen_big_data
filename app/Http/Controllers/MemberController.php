<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Member\Member;
use App\User;
use App\Http\Requests\Member\TakemoneyCheckRequest;
use App\Http\Requests\Member\PageRequest;
use Illuminate\Support\Facades\Auth;
use UtilService;
use WxpayService;

class MemberController extends Controller
{
    /**
     * @SWG\Get(
     *     path="/api/member/lists",
     *     tags={"member api"},
     *     operationId="memberLists",
     *     summary="用户列表",
     *     description="使用说明：获取用户列表",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="当前分页",
     *         in="query",
     *         name="page",
     *         required=true,
     *         type="integer",
     *     ),
     *     @SWG\Parameter(
     *         description="每页获取数量",
     *         in="query",
     *         name="num",
     *         required=false,
     *         type="integer",
     *     ),
     *     @SWG\Parameter(
     *         description="按名称搜索关键字",
     *         in="query",
     *         name="search",
     *         required=false,
     *         type="integer",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @SWG\Response(
     *         response="401",
     *         description="Unauthorized action."
     *     ),
     *     @SWG\Response(
     *         response="404",
     *         description="not found."
     *     )
     * )
     */
    public function lists(Request $request){
        $page = $request->input('page');
        $num = $request->input('num');
        $num = $num ? $num : 10;
        $search = $request->input('search');
        $offset = ($page - 1) * $num;
        $like = '%' . $search . '%';

        $total = Member::select(['id']);
        $users = Member::select(['*']);

        if($search){
            $total = $total->where('username', 'like', $like);
            $users = $users->where('username', 'like', $like);
        }

        $total = $total->orderBy('id', 'desc')
            ->count();

        $users = $users->orderBy('id', 'desc')
            ->offset($offset)
            ->limit($num)
            ->get();

        if ($users) {
            foreach ($users as $key=>$item){
                $wechats = $item->wechats;
                $users[$key]['wechats'] = $wechats;
                $users[$key]['money'] = rtrim(rtrim($item->money, '0'), '.');
                $users[$key]['consume_money'] = rtrim(rtrim($item->consume_money, '0'), '.');
                $users[$key]['today_income'] = rtrim(rtrim($item->today_income, '0'), '.');
                $users[$key]['total_income'] = rtrim(rtrim($item->total_income, '0'), '.');
                $users[$key]['vip_save_money'] = rtrim(rtrim($item->vip_save_money, '0'), '.');
            }
            $res = array(
                'data' => $users,
                'total' => $total
            );
            return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', $res);
        } else {
            return UtilService::format_data(self::AJAX_FAIL, '获取失败', '');
        }
    }

    /**
     * @SWG\Get(
     *     path="/api/member/{id}/info",
     *     tags={"member api"},
     *     operationId="memberInfo",
     *     summary="用户详情",
     *     description="使用说明：获取用户详情",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="用户id",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @SWG\Response(
     *         response="401",
     *         description="unauthorized action."
     *     ),
     *     @SWG\Response(
     *         response="404",
     *         description="not found."
     *     )
     * )
     */
    public function info(Request $request, Member $member){
        if($member){
            $member->money = rtrim(rtrim($member->money, '0'), '.');
            $member->consume_money = rtrim(rtrim($member->consume_money, '0'), '.');
            $member->today_income = rtrim(rtrim($member->today_income, '0'), '.');
            $member->total_income = rtrim(rtrim($member->total_income, '0'), '.');
            $member->vip_save_money = rtrim(rtrim($member->vip_save_money, '0'), '.');

            $member->wechats;
            $member->minis;
            return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', $member);
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '获取失败', '');
        }
    }
}
