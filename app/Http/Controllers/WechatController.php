<?php

namespace App\Http\Controllers;

use App\Http\Requests\Wechat\StoreMaterialRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Wechat\PicTxt;
use App\Http\Models\Wechat\Material;
use App\Http\Models\Wechat\MemberPicTxt;
use App\Http\Models\Wechat\AutoReply;
use App\Http\Models\Wechat\Menu;
use App\Http\Models\Member\Member;
use App\Http\Models\Member\Wechat;
use App\Http\Requests\Wechat\StorePicTxtRequest;
use App\Http\Requests\Wechat\PicTxtPageRequest;
use App\Http\Requests\Wechat\StoreMemberPicTxtRequest;
use App\Http\Requests\Wechat\StoreAutoReplyRequest;
use App\Http\Requests\Wechat\KeywordsPageRequest;
use App\Http\Requests\Wechat\DeletePicTxtRequest;
use WechatService;
use UtilService;
use App\Jobs\SendCustomMsg;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use App\Events\WechatScanLogin;
use Illuminate\Support\Facades\Auth;
use Log;

class WechatController extends Controller
{
    private $_USERDATA = array();

    /**
     * 微信接口认证与执行...
     */
    public function main(Request $request){
        //初始化时
        $str = $request->input('echostr');
        if(isset($str)){
            if($this->checkSignature($request)){
                echo $str;
            }
            else{
                echo '验证失败';
            }
            exit;
        }
        else{
            //非初始化，已经认证过时
            $this->run($request);
        }
    }

    /**
     * 微信主运行方法...
     */
    private function run($request) {
        $postStr = isset($GLOBALS['HTTP_RAW_POST_DATA']) ? $GLOBALS['HTTP_RAW_POST_DATA'] : $request->getContent();
        if (!empty($postStr)) {
            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $this->_USERDATA['fromusername'] = $postObj->FromUserName;
            $this->_USERDATA['tousername'] = $postObj->ToUserName;
            $this->_USERDATA['msgtype'] = $postObj->MsgType;
            $openid = $postObj->FromUserName;
            $param = $this->objectToArray($postObj);
            switch ($this->_USERDATA['msgtype']) {
                case 'event':
                    $this->_USERDATA['event'] = strtolower($postObj->Event);

                    if ($this->_USERDATA['event'] == 'subscribe') {
                        $eventKey = $postObj->EventKey;
                        if($eventKey && strpos($eventKey, 'qrscene_') !== FALSE){
                            //扫码带参数的二维码关注
                            $start = strpos($eventKey, 'qrscene_') + 8;
                            $scene = substr($eventKey, $start);
                            $this->_USERDATA['scene'] = $scene;
                        }
                        $this->subscribe();
                    }
                    elseif ($this->_USERDATA['event'] == 'unsubscribe') {
                        //取消关注事件
                        $this->unsubscribe();
                    }
                    elseif ($this->_USERDATA['event'] == 'scan') {
                        //用户已关注时的扫码事件推送
                        $scene = $postObj->EventKey;
                        $this->_USERDATA['scene'] = $scene;
                        $this->scan($param);
                    }
                    elseif ($this->_USERDATA['event'] == 'location') {
                        //上报地理位置事件，每次进入公众号会话时，微信公众号后台开启该功能
                        $key = md5($openid.'open');
                        if (!Cache::has($key)) {
                            $autoObj = new AutoReply();
                            $msg = $autoObj->findByCategory('open');
                            if($msg){
                                $params = array(
                                    "key" => $key
                                );
                                Cache::add($key, $params, $msg->interval_time);
                                $this->sendkeyword($msg);
                            }
                        }

                        echo "success";
                        exit;
                    }
                    elseif ($this->_USERDATA['event'] == 'view') {
                        //点击菜单跳转链接时的事件推送
                    }
                    elseif ($this->_USERDATA['event'] == 'click') {
                        //点击菜单拉取消息时的事件推送
                        $this->_USERDATA['event_key'] = $postObj->EventKey;
                        $mObj = new Menu();
                        $clicks = $mObj->keywords();
                        if($clicks){
                            foreach ($clicks as $click){
                                $k = substr(md5($click->id), 0, 5);
                                if($k == $this->_USERDATA['event_key']){
                                    $autoObj = new AutoReply();
                                    $msg = $autoObj->findByKeyword($click->keyword);
                                    if($msg) {
                                        $this->sendkeyword($msg);
                                    }
                                }
                            }
                        }
                    }
                    elseif ($this->_USERDATA['event'] == 'templatesendjobfinish') {
                        //模版消息发送任务完成
                        echo "success";
                        exit;
                    }
                    break;
                case 'transfer_customer_service':
                    echo "success";
                    break;
                case 'image':
                    echo "success";
                    break;
                case 'link':
                    echo "success";
                    break;
                case 'voice':
                    echo "success";
                    break;
                case 'video':
                    echo "success";
                    break;
                case 'text':
                    $keyword = $postObj->Content;
                    $autoObj = new AutoReply();
                    $keylist = $autoObj->keywords();
                    if($keylist && $keyword) {
                        $flag = false;
                        $msg = null;
                        foreach($keylist as $word){
                            if($word->keyword == $keyword){
                                $flag = true;
                                $msg = $word;
                                break;
                            }
                        }

                        if ($flag) {
                            $this->sendkeyword($msg);
                        }
                        else {
                            echo "success";
                        }
                    }
                    else{
                        echo "success";
                    }
                    break;
                case 'location':
                    //消息+号里面发送位置地图信息时，会触发该事件，即接收地理位置消息
                    $this->_USERDATA['Location_X'] = $postObj->Location_X;
                    $this->_USERDATA['Location_Y'] = $postObj->Location_Y;
                    $this->_USERDATA['Scale'] = $postObj->Scale;
                    $this->_USERDATA['Label'] = $postObj->Label;
                    echo "success";
                    break;
                default:
                    echo "success";
                    break;
            }
        } else {
            echo "";
            exit;
        }
    }

    /**
     * 微信接口验证...
     */
    private function checkSignature($request)
    {
        $signature = $request->input('signature');
        $timestamp = $request->input('timestamp');
        $nonce = $request->input('nonce');

        $token = config('wechat.token');
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }
    }

    public function objectToArray($e){
        $e=(array)$e;
        foreach($e as $k=>$v){
            if( gettype($v)=='resource' ) return;
            if( gettype($v)=='object' || gettype($v)=='array' )
                $e[$k]=(array)($this->objectToArray($v));
        }
        return $e;
    }

    /**
     * 微信返回文本信息...
     */
    private function returnTxt($string) {
        $textTpl = "<xml>
                    <ToUserName><![CDATA[%s]]></ToUserName>
                    <FromUserName><![CDATA[%s]]></FromUserName>
                    <CreateTime>%s</CreateTime>
                    <MsgType><![CDATA[%s]]></MsgType>
                    <Content><![CDATA[%s]]></Content>
                    <FuncFlag>0</FuncFlag>
                    </xml>";
        $msgType = "text";
        $contentStr = $string;
        $resultStr = sprintf($textTpl, $this->_USERDATA['fromusername'], $this->_USERDATA['tousername'], time(), $msgType, $contentStr);
        echo $resultStr;
        exit;
    }

    /**
     * 微信图片信息...
     */
    private function returnImage($media_id) {
        $textTpl = "<xml>
                    <ToUserName><![CDATA[%s]]></ToUserName>
                    <FromUserName><![CDATA[%s]]></FromUserName>
                    <CreateTime>%s</CreateTime>
                    <MsgType><![CDATA[%s]]></MsgType>
                    <Image>
                    <MediaId ><![CDATA[%s]]></MediaId >
                    </Image>
                    <FuncFlag>0</FuncFlag>
                    </xml>";
        $msgType = "image";
        $resultStr = sprintf($textTpl, $this->_USERDATA['fromusername'], $this->_USERDATA['tousername'], time(), $msgType, $media_id);
        echo $resultStr;
        exit;
    }

    /**
     * 微信返回图文信息...
     */
    private function returnNews($array) {
        if (!empty($array) && $array!= null) {
            $str = '';
            $title = $array['title'];
            $desc = $array['desc'];
            $picurl = $array['picurl'];
            $url = $array['url'];
            $str .= "<item>
                     <Title><![CDATA[".$title."]]></Title>
                     <Description><![CDATA[".$desc."]]></Description>
                     <PicUrl><![CDATA[".$picurl."]]></PicUrl>
                     <Url><![CDATA[".$url."]]></Url>
                     </item>";
        } else {
            exit;
        }

        $textTpl = " <xml>
                    <ToUserName><![CDATA[" . $this->_USERDATA['fromusername'] . "]]></ToUserName>
                    <FromUserName><![CDATA[" . $this->_USERDATA['tousername'] . "]]></FromUserName>
                    <CreateTime>" . time() . "</CreateTime>
                    <MsgType><![CDATA[news]]></MsgType>

                    <ArticleCount>1</ArticleCount>

                    <Articles>

                            " . $str . "

                    </Articles>
                    </xml> ";
        echo $textTpl;
        exit;
    }

    /**
     * 微信返回多图文信息...
     */
    private function returnManyNews($array) {
        $count = 0;
        if (!empty($array) && $array!= null) {
            $str = '';
            foreach($array as $item){
                $title = $item['title'];
                $desc = $item['desc'];
                $picurl = $item['picurl'];
                $url = $item['url'];
                $str .= "<item>
	                     <Title><![CDATA[".$title."]]></Title>
	                     <Description><![CDATA[".$desc."]]></Description>
	                     <PicUrl><![CDATA[".$picurl."]]></PicUrl>
	                     <Url><![CDATA[".$url."]]></Url>
	                     </item>";
            }
            $count = count($array);
        } else {
            exit;
        }

        $textTpl = " <xml>
                    <ToUserName><![CDATA[" . $this->_USERDATA['fromusername'] . "]]></ToUserName>
                    <FromUserName><![CDATA[" . $this->_USERDATA['tousername'] . "]]></FromUserName>
                    <CreateTime>" . time() . "</CreateTime>
                    <MsgType><![CDATA[news]]></MsgType>

                    <ArticleCount>" . $count . "</ArticleCount>

                    <Articles>

                            " . $str . "

                    </Articles>
                    </xml> ";
        echo $textTpl;
        exit;
    }

    private function scan($param){
        $scene = $this->_USERDATA['scene'];
        if($scene) {
            //扫码关注广播
            $wxObj = new Wechat();
            $wechatObj = $wxObj->findByOpenid($this->_USERDATA['fromusername']);
            $mObj = $wechatObj->member()->first();
            $mObj->channel = $scene;
            $mObj->save();
            $mObj->wechats;
            event(new WechatScanLogin($mObj));
        }
    }

    private function subscribe(){
        $obj = new AutoReply();
        $msg = $obj->findByCategory('subscribe');
        if($msg){
            $this->updateUserBySubscribe($msg);
            if($msg->type == 'text' && $msg->text){
                $news = '{"content":"' . $msg->text . '"}';
                $news = json_decode($news, true);
                $this->returnTxt($news['content']);
            }
            elseif($msg->type == 'pic_txt'){
                $picTxtObj = PicTxt::find($msg->pic_txt_id);
                $materials = $picTxtObj->materials;
                if($materials && count($materials) > 0 && $materials) {
                    $news = array();
                    foreach ($materials as $item) {
                        $picurl = UtilService::domain().$item->img;
                        $news[] = array(
                            'title' => $item->title,
                            'desc' => $item->description,
                            'picurl' => $picurl,
                            'url' => $item->url
                        );
                    }

                    $this->returnManyNews($news);
                }
                else{
                    $news = '{"content":"你好，感谢您的关注"}';
                    $news = json_decode($news, true);
                    $this->returnTxt($news['content']);
                }
            }
            elseif($msg->type == 'img' && $msg->img){
                echo "success";
                exit;
            }
            else{
                $news = '{"content":"你好，感谢您的关注"}';
                $news = json_decode($news, true);
                $this->returnTxt($news['content']);
            }
        }
        else{
            $news = '{"content":"你好，感谢您的关注"}';
            $news = json_decode($news, true);
            $this->returnTxt($news['content']);
        }
    }

    private function unsubscribe(){
        $openid = $this->_USERDATA['fromusername'];
        $wxObj = new Wechat();
        $wx_info = $wxObj->findByOpenid($openid);
        if($wx_info){
            $wx_info->subscribe = false;
            $wx_info->save();
        }
    }

    private function sendkeyword($msg){
        if($msg){
            if($msg->type == 'text' && $msg->text){
                $news = '{"content":"' . $msg->text . '"}';
                $news = json_decode($news, true);
                $this->returnTxt($news['content']);
            }
            elseif($msg->type == 'pic_txt'){
                $picTxtObj = PicTxt::find($msg->pic_txt_id);
                $materials = $picTxtObj->materials;
                if($materials && count($materials) > 0 && $materials) {
                    $news = array();
                    foreach ($materials as $item) {
                        $picurl = UtilService::domain().$item->img;
                        $news[] = array(
                            'title' => $item->title,
                            'desc' => $item->description,
                            'picurl' => $picurl,
                            'url' => $item->url
                        );
                    }

                    $this->returnManyNews($news);
                }
                else{
                    $news = '{"content":"你好，欢迎光临"}';
                    $news = json_decode($news, true);
                    $this->returnTxt($news['content']);
                }
            }
            elseif($msg->type == 'img' && $msg->img){
                //使用客服消息发送图片，因为上传文件花时间，5秒内不一定能成功
                $openid = $this->_USERDATA['fromusername'];
                $file = substr($msg->img, 1);
                $media_path = public_path($file);
                $wxObj = new Wechat();
                $wx_info = $wxObj->findByOpenid($openid);
                if($wx_info) {
                    $memberPicTxt = MemberPicTxt::create([
                        "openid" => $openid,
                        "member_id" => $wx_info->member_id,
                        "media_path" => $media_path,
                        "type" => 'image'
                    ]);
                    dispatch(new SendCustomMsg($memberPicTxt));
                }

                echo "success";
                exit;
            }
            else{
                $news = '{"content":"你好，欢迎光临"}';
                $news = json_decode($news, true);
                $this->returnTxt($news['content']);
            }
        }
        else{
            $news = '{"content":"你好，欢迎光临"}';
            $news = json_decode($news, true);
            $this->returnTxt($news['content']);
        }
    }

    private function updateUserBySubscribe($msg){
        $appid = config('wechat.appid');
        $appsecret = config('wechat.appsecret');
        $platform = config('wechat.platform');
        $openid = $this->_USERDATA['fromusername'];
        $scene = $this->_USERDATA['scene'];
        $userInfo = WechatService::userInfoByOpenid($appid, $appsecret, $openid);
        if($userInfo){
            $flag = false;
            $mObj = new Member();
            $m_info = $mObj->findByUnionId($userInfo['unionid']);
            if($m_info){
                //该用户名下有使用平台应用
                $member_id = $m_info->id;
                $wxObj = new Wechat();
                $wx_info = $wxObj->findByOpenid($openid);
                if(!$wx_info){
                    //未使用过该公众号
                    $res = Wechat::create([
                        "openid"=> $openid,
                        "unionid"=> $userInfo['unionid'],
                        "nickname"=> $userInfo['nickname'],
                        "subscribe"=> $userInfo['subscribe'],
                        "gender"=> $userInfo['sex'] ? 'man' : 'woman',
                        "city"=> $userInfo['city'],
                        "province"=> $userInfo['province'],
                        "country"=> $userInfo['country'],
                        "headimgurl"=> $userInfo['headimgurl'],
                        "member_id"=> $member_id,
                        "platform"=> $platform
                    ]);

                    $flag = $res ? true : false;
                }
                else{
                    //更新微信信息
                    $res = Wechat::where('openid', $openid)
                        ->update([
                            "nickname"=> $userInfo['nickname'],
                            "subscribe"=> $userInfo['subscribe'],
                            "gender"=> $userInfo['sex'] ? 'man' : 'woman',
                            "city"=> $userInfo['city'],
                            "province"=> $userInfo['province'],
                            "country"=> $userInfo['country'],
                            "headimgurl"=> $userInfo['headimgurl']
                        ]);

                    $flag = $res ? true : false;
                }
            }
            else{
                //该用户名下未使用平台应用，生成一个全新的用户
                $nmObj = new Member();
                $userInfo['platform'] = $platform;
                $member_id = $nmObj->generateMember($userInfo);
                $flag = $member_id ? true : false;
            }

            if($scene) {
                //扫码关注广播
                $mObj = Member::find($member_id);
                $mObj->channel = $scene;
                $mObj->save();
                $mObj->wechats;
                event(new WechatScanLogin($mObj));
            }

            if($msg->type == 'img' && $flag) {
                //使用客服消息发送图片，因为上传文件花时间，5秒内不一定能成功
                $file = substr($msg->img, 1);
                $media_path = public_path($file);
                $memberPicTxt = MemberPicTxt::create([
                    "openid" => $openid,
                    "member_id" => $member_id,
                    "media_path" => $media_path,
                    "type" => 'image'
                ]);

                dispatch(new SendCustomMsg($memberPicTxt));
            }
        }
    }

    /**
     * @SWG\Get(
     *     path="/api/wechat/pictxtlist",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="图文列表（分页）",
     *     description="使用说明：获取图文列表（分页）",
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
     *         description="搜索关键词",
     *         in="query",
     *         name="search",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function picTxtList(PicTxtPageRequest $request){
        $page = $request->input('page');
        $limit = $request->input('num');
        $limit = $limit ? $limit : 10;
        $search = $request->input('search');
        $offset = ($page - 1) * $limit;
        $search_like = '%'.$search.'%';

        $total = PicTxt::select(['id']);
        $lists = PicTxt::select(['*']);
        if($search){
            $total = $total->where('name', 'like', $search_like);
            $lists= $lists->where('name', 'like', $search_like);
        }

        $total = $total->count();
        $lists= $lists->orderBy('id', 'desc')
            ->offset($offset)
            ->limit($limit)
            ->get();

        if($lists){
            foreach ($lists as $key=>$item){
                $lists[$key]['materials'] = $item->materials;
            }
            $res = array(
                'data'=>$lists,
                'total'=>$total
            );
            return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', $res);
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '获取失败', '');
        }
    }

    /**
     * @SWG\Get(
     *     path="/api/wechat/pictxtlistall",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="图文列表（所有）",
     *     description="使用说明：获取图文列表（所有）",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function picTxtListAll(Request $request){
        $lists = PicTxt::select(['*']);
        $lists = $lists->orderBy('id', 'desc') ->get();

        return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', $lists ? $lists : []);
    }

    /**
     * @SWG\Get(
     *     path="/api/wechat/pictxt/{id}/materials",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="某个图文素材列表",
     *     description="使用说明：获取某个图文素材列表",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="图文ID",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function picTxtMaterialList(PicTxt $pictxt){
        if($pictxt) {
            $materials = $pictxt->materials;
            return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', $materials);
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '获取失败', '');
        }
    }

    /**
     * @SWG\Post(
     *     path="/api/wechat/storepictxt",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="保存图文",
     *     description="使用说明：保存图文",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="图文id（修改时需要）",
     *         in="query",
     *         name="id",
     *         required=false,
     *         type="integer",
     *     ),
     *     @SWG\Parameter(
     *         description="图文名称",
     *         in="query",
     *         name="name",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function storePicTxt(StorePicTxtRequest $request){
        $id = $request->input('id');
        $params = request(['name']);

        if($id){
            $obj = PicTxt::find($id);
            $obj->name = $params['name'];
            $res = $obj->save();
        }
        else{
            $res = PicTxt::create($params);
        }

        if($res){
            return UtilService::format_data(self::AJAX_SUCCESS, '操作成功', $res);
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '操作失败', '');
        }
    }

    /**
     * @SWG\Post(
     *     path="/api/wechat/deletepictxt",
     *     tags={"wechat api"},
     *     operationId="APIList",
     *     summary="删除图文",
     *     description="使用说明：删除图文",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="图文ID",
     *         in="query",
     *         name="id",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function deletePicTxt(DeletePicTxtRequest $request){
        $id = $request->input('id');
        $obj = PicTxt::find($id);
        if($obj) {
            $res = $obj->delete();
            if ($res) {
                return UtilService::format_data(self::AJAX_SUCCESS, '操作成功', $res);
            } else {
                return UtilService::format_data(self::AJAX_FAIL, '操作失败', '');
            }
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '数据不存在', '');
        }
    }

    /**
     * @SWG\Post(
     *     path="/api/wechat/storematerial",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="保存微信素材",
     *     description="使用说明：保存微信素材",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="微信素材id（修改时需要）",
     *         in="query",
     *         name="id",
     *         required=false,
     *         type="integer",
     *     ),
     *     @SWG\Parameter(
     *         description="图片",
     *         in="query",
     *         name="img",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="标题",
     *         in="query",
     *         name="title",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="描述",
     *         in="query",
     *         name="description",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="链接",
     *         in="query",
     *         name="url",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="排序号",
     *         in="query",
     *         name="sort",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="发送数",
     *         in="query",
     *         name="send_num",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="阅读数",
     *         in="query",
     *         name="read_num",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="购买数",
     *         in="query",
     *         name="buy_num",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="素材类型",
     *         in="query",
     *         name="type",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="图文id",
     *         in="query",
     *         name="pic_txt_id",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function storeMaterial(StoreMaterialRequest $request){
        $id = $request->input('id');
        $params = request(['img', 'title', 'description', 'url', 'sort', 'send_num', 'read_num', 'buy_num', 'type', 'pic_txt_id']);

        if($id){
            $obj = Material::find($id);
            $obj->img = $params['img'] ? $params['img'] : null;
            $obj->title = $params['title'] ? $params['title'] : null;
            $obj->description = $params['description'] ? $params['description'] : null;
            $obj->url = $params['url'] ? $params['url'] : null;
            $obj->sort = $params['sort'] ? $params['sort'] : null;
            $obj->send_num = $params['send_num'] ? $params['send_num'] : null;
            $obj->read_num = $params['read_num'] ? $params['read_num'] : null;
            $obj->buy_num = $params['buy_num'] ? $params['buy_num'] : null;
            $obj->type = $params['type'] ? $params['type'] : null;
            $obj->pic_txt_id = $params['pic_txt_id'] ? $params['pic_txt_id'] : null;
            $res = $obj->save();
        }
        else{
            $res = Material::create($params);
        }

        if($res){
            return UtilService::format_data(self::AJAX_SUCCESS, '操作成功', $res);
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '操作失败', '');
        }
    }

    /**
     * @SWG\Get(
     *     path="/api/wechat/material/{id}",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="某个图文素材详情",
     *     description="使用说明：获取某个图文素材详情",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="素材ID",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function materialDetail(Material $material){
        if($material) {
            return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', $material);
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '获取失败', '');
        }
    }

    /**
     * @SWG\Post(
     *     path="/api/wechat/deletematerial",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="删除素材",
     *     description="使用说明：删除素材",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="素材ID",
     *         in="query",
     *         name="id",
     *         required=true,
     *         type="integer",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function deleteMaterial(Request $request){
        $id = $request->input('id');
        $obj = Material::find($id);
        if($obj) {
            $res = $obj->delete();
            if ($res) {
                return UtilService::format_data(self::AJAX_SUCCESS, '操作成功', $res);
            }
            else {
                return UtilService::format_data(self::AJAX_FAIL, '操作失败', '');
            }
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '数据不存在', '');
        }
    }

    /**
     * @SWG\Post(
     *     path="/api/wechat/upload",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="上传文件",
     *     description="使用说明：上传文件",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="上传文件名",
     *         in="query",
     *         name="file",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function upload(Request $request)
    {
        $file = $request->file('file');
        $name = 'wechat/'.date('Ymd');
        $path = $file->store($name);

        $bool = true;
        if($bool) {
            return UtilService::format_data(self::AJAX_SUCCESS, '保存成功', [
                "path" => $path
            ]);
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '保存失败', []);
        }
    }

    /**
     * @SWG\Get(
     *     path="/api/wechat/material/{id}/members",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="素材用户",
     *     description="使用说明：获取素材用户",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="素材ID",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function materialMember(Material $material){
        $members = $material->members; //带括号的是返回关联对象实例，不带括号是返回动态属性
        return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', $members);
    }

    /**
     * @SWG\Post(
     *     path="/api/wechat/storememberpictxt",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="用户图文推送",
     *     description="使用说明：用户图文推送",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="推送用户id列表",
     *         in="query",
     *         name="member_ids",
     *         required=true,
     *         type="integer",
     *     ),
     *     @SWG\Parameter(
     *         description="推送类型",
     *         in="query",
     *         name="type",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="图文id",
     *         in="query",
     *         name="pic_txt_id",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="文本信息",
     *         in="query",
     *         name="text",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function storeMemberPicTxt(StoreMemberPicTxtRequest $request){
        $member_ids = $request->input('member_ids');
        $params = request(['type', 'pic_txt_id', 'member_ids', 'text']);
        if(($params['type'] == 'pictxt' && $params['pic_txt_id']) || ($params['type'] == 'text' && $params['text'])){
            $member_arr = array();
            if(strpos($member_ids, ',') !== false){
                $member_arr = explode(',', $member_ids);
            }
            else{
                $member_arr = [$member_ids];
            }

            $success = 0;
            $fail = 0;
            foreach($member_arr as $id){
                $member = Member::find($id);
                if($member) {
                    $wechats = $member->wechats;
                    $p = array(
                        "type" => $params['type'],
                        "pic_txt_id" => $params['pic_txt_id'] ? $params['pic_txt_id'] : null,
                        "openid" => $wechats && count($wechats) > 0 ? $wechats[0]['openid'] : null,
                        "text" => $params['text'] ? $params['text'] : null,
                        "member_id" => $id
                    );
                    $memberPicTxt = MemberPicTxt::create($p);
                    if($memberPicTxt){
                        $success++;
                        dispatch(new SendCustomMsg($memberPicTxt));
                    }
                    else{
                        $fail++;
                    }
                }
                else{
                    $fail++;
                }
            }
            return UtilService::format_data(self::AJAX_SUCCESS, '操作成功'.$success.'条，失败'.$fail.'条', '');
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '参数错误', '');
        }
    }

    /**
     * @SWG\Get(
     *     path="/api/wechat/pictxtqueue",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="图文消息队列",
     *     description="使用说明：获取图文消息队列",
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
     *         description="搜索关键词",
     *         in="query",
     *         name="search",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function picTxtQueue(PicTxtPageRequest $request){
        $page = $request->input('page');
        $limit = $request->input('num');
        $limit = $limit ? $limit : 10;
        $search = $request->input('search');
        $offset = ($page - 1) * $limit;
        $search_like = '%'.$search.'%';

        $total = DB::table('member_pic_txt')
            ->join('wx_pic_txt', 'member_pic_txt.pic_txt_id', '=', 'wx_pic_txt.id')
            ->select('member_pic_txt.id');
        $lists = DB::table('member_pic_txt')
            ->join('wx_pic_txt', 'member_pic_txt.pic_txt_id', '=', 'wx_pic_txt.id')
            ->select('member_pic_txt.*', 'wx_pic_txt.name');

        if($search){
            $total = $total->where('wx_pic_txt.name', 'like', $search_like);
            $lists= $lists->where('wx_pic_txt.name', 'like', $search_like);
        }

        $total = $total->count();
        $lists = $lists->orderBy('member_pic_txt.id', 'desc')
            ->offset($offset)
            ->limit($limit)
            ->get();

        if($lists){
            foreach ($lists as $key=>$item){
                $member = Member::find($item->member_id);
                if($member){
                    $member->wechats;
                }
                $lists[$key]->member = $member;
            }
            $res = array(
                'data'=>$lists,
                'total'=>$total
            );
            return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', $res);
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '获取失败', '');
        }
    }

    /**
     * @SWG\Post(
     *     path="/api/wechat/deletepictxtqueue",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="删除图文消息队列",
     *     description="使用说明：删除图文消息队列",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="图文消息队列ID",
     *         in="query",
     *         name="id",
     *         required=true,
     *         type="integer",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function deletePictxtQueue(Request $request){
        $id = $request->input('id');
        $obj = MemberPicTxt::find($id);
        if($obj) {
            $res = $obj->delete();
            if ($res) {
                return UtilService::format_data(self::AJAX_SUCCESS, '操作成功', $res);
            }
            else {
                return UtilService::format_data(self::AJAX_FAIL, '操作失败', '');
            }
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '数据不存在', '');
        }
    }

    /**
     * @SWG\Post(
     *     path="/api/wechat/pictxtqueue/batchdelete",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="删除图文消息队列（批量）",
     *     description="使用说明：删除图文消息队列（批量）",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="图文消息队列id列表",
     *         in="query",
     *         name="idstring",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function batchDeletePicTxtQueue(Request $request){
        $idstring = $request->input('idstring');
        $idarray = explode(',', $idstring);
        $res = MemberPicTxt::whereIn('id', $idarray)->delete();
        if ($res) {
            return UtilService::format_data(self::AJAX_SUCCESS, '操作成功', $res);
        } else {
            return UtilService::format_data(self::AJAX_FAIL, '操作失败', '');
        }
    }

    /**
     * @SWG\Post(
     *     path="/api/wechat/storeautoreply",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="自动回复",
     *     description="使用说明：自动回复",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="id（修改时需要）",
     *         in="query",
     *         name="id",
     *         required=false,
     *         type="integer",
     *     ),
     *     @SWG\Parameter(
     *         description="回复类型",
     *         in="query",
     *         name="category",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="消息类型",
     *         in="query",
     *         name="type",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="文本信息",
     *         in="query",
     *         name="text",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="图文id",
     *         in="query",
     *         name="pic_txt_id",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="图片路径",
     *         in="query",
     *         name="img",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="关键词回复",
     *         in="query",
     *         name="keyword",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="间隔时间",
     *         in="query",
     *         name="interval_time",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function storeAutoReply(StoreAutoReplyRequest $request){
        $id = $request->input('id');
        $params = request(['category', 'type', 'text', 'pic_txt_id', 'img', 'keyword', 'interval_time']);
        if($id){
            $obj = AutoReply::find($id);
            $obj->category = $params['category'];
            $obj->type = $params['type'];
            $obj->text = $params['text'] ? $params['text'] : null;
            $obj->pic_txt_id = $params['pic_txt_id'] ? $params['pic_txt_id'] : null;
            $obj->img = $params['img'] ? $params['img'] : null;
            $obj->keyword = $params['keyword'] ? $params['keyword'] : null;
            $obj->interval_time = $params['interval_time'] ? $params['interval_time'] : null;
            $res = $obj->save();
        }
        else{
            $res = AutoReply::create($params);
        }

        if($res){
            return UtilService::format_data(self::AJAX_SUCCESS, '操作成功', $res);
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '操作失败', '');
        }
    }

    /**
     * @SWG\Post(
     *     path="/api/wechat/deleteautoreply",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="删除关键字自动回复",
     *     description="使用说明：删除关键字自动回复",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="关键字自动回复ID",
     *         in="query",
     *         name="id",
     *         required=true,
     *         type="integer",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function deleteAutoReply(Request $request){
        $id = $request->input('id');
        $obj = AutoReply::find($id);
        if($obj) {
            $res = $obj->delete();
            if ($res) {
                return UtilService::format_data(self::AJAX_SUCCESS, '操作成功', $res);
            }
            else {
                return UtilService::format_data(self::AJAX_FAIL, '操作失败', '');
            }
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '数据不存在', '');
        }
    }

    /**
     * @SWG\Get(
     *     path="/api/wechat/autoreply",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="获取自动回复",
     *     description="使用说明：获取自动回复",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="category",
     *         in="query",
     *         name="category",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function autoReply(Request $request){
        $category = $request->input('category');
        if($category) {
            $data = AutoReply::where('category', $category)
                ->orderBy('id', 'desc')->first();

            if ($data) {
                return UtilService::format_data(self::AJAX_SUCCESS, '操作成功', $data);
            }
            else {
                return UtilService::format_data(self::AJAX_FAIL, '操作失败', '');
            }
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '参数缺失', '');
        }
    }

    /**
     * @SWG\Get(
     *     path="/api/wechat/keywords",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="关键字列表（分页）",
     *     description="使用说明：获取关键字列表（分页）",
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
     *         description="搜索关键词",
     *         in="query",
     *         name="search",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function keywords(KeywordsPageRequest $request){
        $page = $request->input('page');
        $limit = $request->input('num');
        $limit = $limit ? $limit : 10;
        $search = $request->input('search');
        $offset = ($page - 1) * $limit;
        $search_like = '%'.$search.'%';

        $total = AutoReply::select(['id'])->where('category', 'keyword');
        $lists = AutoReply::select(['*'])->where('category', 'keyword');
        if($search){
            $total = $total->where('keyword', 'like', $search_like);
            $lists= $lists->where('keyword', 'like', $search_like);
        }

        $total = $total->count();
        $lists= $lists->orderBy('id', 'desc')
            ->offset($offset)
            ->limit($limit)
            ->get();

        if($lists){
            $res = array(
                'data'=>$lists,
                'total'=>$total
            );
            return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', $res);
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '获取失败', '');
        }
    }

    /**
     * @SWG\Get(
     *     path="/api/wechat/keylists",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="关键字列表（不分页）",
     *     description="使用说明：获取关键字列表（不分页）",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function keylists(Request $request){
        $lists = AutoReply::where('category', 'keyword')
                 ->orderBy('id', 'desc')->get();

        return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', $lists && count($lists) > 0 ? $lists : []);
    }

    /**
     * @SWG\Get(
     *     path="/api/wechat/menus",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="自定义菜单列表",
     *     description="使用说明：自定义菜单列表",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function menus()
    {
        $obj = new Menu();
        $data = $obj->lists();
        if ($data) {
            return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', $data);
        } else {
            return UtilService::format_data(self::AJAX_FAIL, '获取失败', '');
        }
    }

    /**
     * @SWG\Post(
     *     path="/api/wechat/insertmenu",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="插入菜单",
     *     description="使用说明：获取插入菜单",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="菜单节点名称",
     *         in="query",
     *         name="name",
     *         required=true,
     *         type="integer",
     *     ),
     *     @SWG\Parameter(
     *         description="菜单父节点path",
     *         in="query",
     *         name="parent_path",
     *         required=false,
     *         type="integer",
     *     ),
     *     @SWG\Parameter(
     *         description="菜单排序号",
     *         in="query",
     *         name="sort",
     *         required=false,
     *         type="string",
     *     ),
     *      @SWG\Parameter(
     *         description="菜单类型",
     *         in="query",
     *         name="type",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="关键字",
     *         in="query",
     *         name="keyword",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="小程序appid",
     *         in="query",
     *         name="appid",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="小程序路径",
     *         in="query",
     *         name="pagepath",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="菜单链接",
     *         in="query",
     *         name="url",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="是否开启",
     *         in="query",
     *         name="is_open",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="是否根节点",
     *         in="query",
     *         name="is_root",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function insertmenu(Request $request){
        $categoryObj = new Menu();

        $name = $request->input('name');
        $parent_path = $request->input('parent_path');
        $sort = $request->input('sort');
        $type = $request->input('type');
        $keyword = $request->input('keyword');
        $appid = $request->input('appid');
        $pagepath = $request->input('pagepath');
        $url = $request->input('url');
        $is_open = $request->input('is_open');
        $is_root = $request->input('is_root');

        if($is_root){
            $level = 1;
        }
        elseif($parent_path && strpos($parent_path, '/') !== false){
            $pathArray = explode('/', $parent_path);
            $level = count($pathArray) + 1;
        }
        elseif($parent_path && strpos($parent_path, '/') === false){
            $level = 2;
        }

        $p = [
            'name' => $name,
            'level' => $level,
            'type' => $type,
            'is_root' => $is_root,
            'is_open' => $is_open,
            'sort' => $sort
        ];

        if($type == 'view'){
            $p['url'] = $url;
        }
        elseif($type == 'miniprogram') {
            $p['url'] = $url;
            $p['appid'] = $appid;
            $p['pagepath'] = $pagepath;
        }
        elseif($type == 'click') {
            $p['keyword'] = $keyword;
        }

        $id = $categoryObj->insert($p);
        if($id){
            $params = [];
            $params['updated_at'] = date('Y-m-d H:i:s', time());
            if($is_root){
                $path = $id;
            }
            else{
                $path = $parent_path."/".$id;
            }

            $row = $categoryObj->rowById($id);
            if($row){
                $row->path = $path;
                $res = $row->save();
                if($res){
                    return UtilService::format_data(self::AJAX_SUCCESS, '插入成功', ['id'=>$id]);
                }
                else{
                    return UtilService::format_data(self::AJAX_FAIL, '插入失败', '');
                }
            }
            else{
                return UtilService::format_data(self::AJAX_FAIL, '插入失败', '');
            }
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '插入失败', '');
        }
    }

    /**
     * @SWG\Post(
     *     path="/api/wechat/updatemenu",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="修改菜单",
     *     description="使用说明：获取修改菜单",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="菜单节点名称",
     *         in="query",
     *         name="name",
     *         required=true,
     *         type="integer",
     *     ),
     *     @SWG\Parameter(
     *         description="节点ID",
     *         in="query",
     *         name="id",
     *         required=true,
     *         type="integer",
     *     ),
     *     @SWG\Parameter(
     *         description="菜单排序号",
     *         in="query",
     *         name="sort",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="菜单类型",
     *         in="query",
     *         name="type",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="关键字",
     *         in="query",
     *         name="keyword",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="小程序appid",
     *         in="query",
     *         name="appid",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="小程序路径",
     *         in="query",
     *         name="pagepath",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="菜单链接",
     *         in="query",
     *         name="url",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="是否开启",
     *         in="query",
     *         name="is_open",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function updatemenu(Request $request){
        $categoryObj = new Menu();
        $name = $request->input('name');
        $sort = $request->input('sort');
        $id = $request->input('id');
        $type = $request->input('type');
        $url = $request->input('url');
        $keyword = $request->input('keyword');
        $appid = $request->input('appid');
        $pagepath = $request->input('pagepath');
        $is_open = $request->input('is_open');
        $row = $categoryObj->rowById($id);
        if($row){
            $row->name = $name;
            $row->sort = $sort;
            $row->is_open = $is_open;
            $row->type = $type;

            if($type == 'view'){
                $row->url = $url;
            }
            elseif($type == 'miniprogram') {
                $row->url = $url;
                $row->appid = $appid;
                $row->pagepath = $pagepath;
            }
            elseif($type == 'click') {
                $row->keyword = $keyword;
            }

            $res = $row->save();
            if($res){
                return UtilService::format_data(self::AJAX_SUCCESS, '修改成功', ['id'=>$id]);
            }
            else{
                return UtilService::format_data(self::AJAX_FAIL, '修改失败', '');
            }
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '数据出错', '');
        }
    }

    /**
     * @SWG\Post(
     *     path="/api/wechat/deletemenu",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="删除菜单",
     *     description="使用说明：删除菜单",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="菜单ID",
     *         in="query",
     *         name="id",
     *         required=true,
     *         type="integer",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function deletemenu(Request $request){
        $categoryObj = new Menu();
        $id = $request->input('id');
        $row = $categoryObj->rowById($id);
        if($row){
            $res = $row->delete();
            if($res){
                return UtilService::format_data(self::AJAX_SUCCESS, '操作成功', ['id'=>$id]);
            }
            else{
                return UtilService::format_data(self::AJAX_FAIL, '操作失败', '');
            }
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '数据出错', '');
        }
    }

    /**
     * @SWG\Get(
     *     path="/api/wechat/menuchildren",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="菜单子节点",
     *     description="使用说明：菜单子节点",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         description="菜单path",
     *         in="query",
     *         name="path",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function menuchildren(Request $request){
        $path = $request->input('path');
        $obj = new Menu();
        $lists = $obj->childmenu($path);
        if($lists){
            return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', $lists);
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '获取失败', '');
        }
    }

    /**
     * @SWG\Get(
     *     path="/api/wechat/publishmenu",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="发布菜单",
     *     description="使用说明：发布菜单",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function publishmenu(Request $request){
        $obj = new Menu();
        $topmenus = $obj->topmenu();
        if ($topmenus) {
            $menu = array(
                'button'=>array()
            );
            foreach ($topmenus as $item){
                $childObj = new Menu();
                $data = array();
                $data['name'] = $item->name;
                $children = $childObj->childmenu($item->path);
                if($children && count($children) > 0){
                    $sub_button = array();
                    foreach ($children as $child) {
                        $v = array();
                        $v['name'] = $child->name;
                        if($child->type == 'click'){
                            $v['type'] = $child->type;
                            $v['key'] = substr(md5($child->id), 0, 5);
                        }
                        elseif($child->type == 'view'){
                            $v['type'] = $child->type;
                            $v['url'] = $child->url;
                        }
                        elseif($child->type == 'miniprogram') {
                            $v['type'] = $child->type;
                            $v['appid'] = $child->appid;
                            $v['pagepath'] = $child->pagepath;
                            $v['url'] = $child->url;
                        }
                        $sub_button[] = $v;
                    }
                    $data['sub_button'] = $sub_button;
                }
                elseif($item->type == 'click'){
                    $data['type'] = $item->type;
                    $data['key'] = substr(md5($item->id), 0, 5);
                }
                elseif($item->type == 'view'){
                    $data['type'] = $item->type;
                    $data['url'] = $item->url;
                }
                elseif($item->type == 'miniprogram') {
                    $data['type'] = $item->type;
                    $data['appid'] = $item->appid;
                    $data['pagepath'] = $item->pagepath;
                    $data['url'] = $item->url;
                }
                $menu['button'][] = $data;
            }

            $appid = config('wechat.appid');
            $appsecret = config('wechat.appsecret');
            $rtn = WechatService::createMenu($appid, $appsecret, $menu);
            return $rtn;
        }
        else {
            return UtilService::format_data(self::AJAX_FAIL, '获取失败', '');
        }
    }

    /**
     * @SWG\Get(
     *     path="/api/wechat/qrcode",
     *     tags={"wechat api"},
     *     operationId="",
     *     summary="扫码登录二维码",
     *     description="使用说明：获取扫码登录二维码",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="token",
     *         in="query",
     *         name="token",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     )
     * )
     */
    public function qrcode()
    {
        $user = auth()->user();
        $appid = config('wechat.appid');
        $appsecret = config('wechat.appsecret');
        $access_token = WechatService::getAccessToken($appid, $appsecret);
        if($access_token) {
            $wechat = '';
            $member = $user->member;
            if($member) {
                $wechats = $member->wechats;
                if ($wechats) {
                    foreach ($wechats as $item) {
                        $platform = config('wechat.platform');
                        if ($platform == $item->platform) {
                            $wechat = $item;
                            break;
                        }
                    }
                }
            }

            $scene_str = UtilService::random_str(6);
            $img = WechatService::limit_qrcode($access_token, $type='limit', $scene_str);
            if ($img) {
                $data = array(
                    "qrcode" => $img,
                    "channel" => $scene_str,
                    "wechat" => $wechat
                );
                return UtilService::format_data(self::AJAX_SUCCESS, '获取成功', $data);
            } else {
                return UtilService::format_data(self::AJAX_FAIL, '获取失败', '');
            }
        }
        else{
            return UtilService::format_data(self::AJAX_FAIL, '获取token失败', '');
        }
    }

    public function ilovethisgame(){
        Cache::flush();
        dd('success');
    }

    public function phpinfo()
    {
        phpinfo();
    }
}
