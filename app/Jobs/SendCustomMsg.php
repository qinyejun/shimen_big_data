<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use WechatService;
use App\Http\Models\Wechat\MemberPicTxt;
use App\Http\Models\Wechat\PicTxt;
use App\Http\Models\Wechat\Material;

class SendCustomMsg implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $tries = 3;
    protected $memberPicTxt;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(MemberPicTxt $memberPicTxt)
    {
        $this->memberPicTxt = $memberPicTxt;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $appid = config('wechat.appid');
        $appsecret = config('wechat.appsecret');
        $res = null;
        if($this->memberPicTxt->type == 'image' || $this->memberPicTxt->type == 'voice' || $this->memberPicTxt->type == 'video') {
            $media_id = WechatService::uploadMediaFile($appid, $appsecret, $this->memberPicTxt->media_path, 'limit', $this->memberPicTxt->type);
            if ($media_id) {
                $res = WechatService::sendCustomMessage($appid, $appsecret, $this->memberPicTxt->openid, $this->memberPicTxt->type, '', $media_id);
            }
        }
        elseif($this->memberPicTxt->type == 'pictxt'){
            $pictxt = PicTxt::find($this->memberPicTxt->pic_txt_id);
            if($pictxt) {
                $materials = $pictxt->materials;
                $res = WechatService::sendCustomMessage($appid, $appsecret, $this->memberPicTxt->openid, 'news', '', '', $materials);
            }
        }
        else{
            $res = WechatService::sendCustomMessage($appid, $appsecret, $this->memberPicTxt->openid, $this->memberPicTxt->type, $this->memberPicTxt->text, '');
        }

        if($res) {
            if (isset($res['errcode']) && $res['errcode'] != 0) {
                $this->memberPicTxt->status = 'fail';
            } else {
                $this->memberPicTxt->status = 'success';
            }
            $this->memberPicTxt->result = json_encode($res);
        }
        else{
            $this->memberPicTxt->status = 'fail';
        }
        $this->memberPicTxt->save();
    }
}
