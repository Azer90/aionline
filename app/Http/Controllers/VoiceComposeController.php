<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/24
 * Time: 16:07
 */

namespace App\Http\Controllers;


use App\Article;
use App\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoiceComposeController extends Controller
{
    use BaseController;

    public function  Index(){

        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->system;
        $pay_config=$this->pay_config;
        $link=Link::all();
        $common=Article::select('id','title')->where(['type'=>'common','show'=>1])->take(5)->get();//常见问题
        $recommend=Article::select('id','title')->where(['type'=>'recommend','show'=>1])->take(5)->get();//推荐阅读
        $new=Article::select('id','title')->where(['show'=>1])->orderBy('id', 'desc')->take(5)->get();//最新资讯
        return view('web/voiceCompose')->with(compact('nav','name','seo','config','link','common','recommend','new','pay_config'));
    }

    public function Api_getVoice(Request $request){
        $voice_data=$request->all();
        $url='118.31.225.109:8088/getVoice';
        $content=$voice_data['content'];
        $content=myTrim($content);
        $str_len=mb_strlen($content,'utf-8');
        if($str_len>300){
            $content= mb_substr($content,0,300,'utf-8');
        }
        if(in_array($voice_data['voice'],['Olivia','William','Wendy','Halen','Harry'])){
            if(preg_match_all("/([\x{4e00}-\x{9fa5}]+)/u", $content, $match)){
                return response()->json(["code"=>101,"message"=>"请输入英文"]);
            }
        }

        $data=[
            'format'=>'mp3',
            'voice'=>$voice_data['voice'],
            'volume'=>$voice_data['volume'],
            'pitchRate'=>0,
            'speechRate'=>$voice_data['speech_rate'],
            'text'=>$content,
        ];
        //文件
        $file_name = date("YmdHis").uniqid().".mp3";
        if(!file_exists(public_path("/voice/"))){
            mkdir(public_path("/voice/"),0777);
        }
        $path = public_path("/voice/").$file_name;
        $result=curl_post($url,$data,$https=false);
        $rest=file_put_contents($path, $result);
        if($rest){
            DB::table("ai_dis")->insert(["path"=>$path,"file_name"=>$file_name,"create_time"=>date("Y-m-d H:i:s",time())]);
            return response()->json(["code"=>200,"message"=>"语音合成成功","data"=>['file_name'=>$file_name,'str_len'=>$str_len]]);
        }else{
            return response()->json(["code"=>100,"message"=>"语音合成失败"]);
        }

    }
}