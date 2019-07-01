<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\WechatUsers;
use EasyWeChat;
use Illuminate\Support\Facades\Log;
class WeChatController extends Controller
{
    private $app;
    public function __construct()
    {

        $this->app = EasyWeChat::officialAccount();
    }

    public function serve(){

        $this->app->server->push(function ($message) {
            $monolog = Log::getMonolog();
            $monolog->popHandler();
            Log::useFiles(storage_path('logs/wechat_ts.log'));
            Log::info($message);
            if(isset($message['Event'])){
                switch ($message['Event']){
                    case 'subscribe':
                        $data=[
                            'toUserName'=>$message['ToUserName'],
                            'openid'=>$message['FromUserName'],
                            'createTime'=>$message['CreateTime'],
                        ];
                        WechatUsers::insert($data);
                        return "登录成功";
                        break;
                    case 'unsubscribe':
                        WechatUsers::where('openid',$message['FromUserName'])->delete();
                        return "注销成功";
                        break;

                    default:
                        return "您好！欢迎关注我们";
                };

            }

                 return "您好！欢迎关注";


        });
        $this->menu();
        $response = $this->app->server->serve();

// 将响应输出
        return $response;
    }


    public function menu(){
        $buttons = [
            [
                "type" => "click",
                "name" => "今日歌曲",
                "key"  => "V1001_TODAY_MUSIC"
            ],
            [
                "name"       => "菜单",
                "sub_button" => [
                    [
                        "type" => "view",
                        "name" => "搜索",
                        "url"  => "http://www.soso.com/"
                    ],
                    [
                        "type" => "view",
                        "name" => "视频",
                        "url"  => "http://v.qq.com/"
                    ],
                    [
                        "type" => "click",
                        "name" => "赞一下我们",
                        "key" => "V1001_GOOD"
                    ],
                ],
            ],
        ];
        $this->app->menu->create($buttons);
    }




}