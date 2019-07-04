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

class VoiceComposeController extends Controller
{
    use BaseController;

    public function  Index(){

        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->system;
        $link=Link::all();
        $common=Article::select('id','title')->where(['type'=>'common','show'=>1])->take(5)->get();//常见问题
        $recommend=Article::select('id','title')->where(['type'=>'recommend','show'=>1])->take(5)->get();//推荐阅读
        $new=Article::select('id','title')->where(['show'=>1])->orderBy('id', 'desc')->take(5)->get();//最新资讯
        return view('web/voiceCompose')->with(compact('nav','name','seo','config','link','common','recommend','new'));
    }

    public function Api_getVoice(Request $request){
        $voice_data=$request->all();
        $url='118.31.225.109:8088/getVoice';
        $data=[
            'format'=>'mp3',
            'voice'=>$voice_data['voice'],
            'pitchRate'=>$voice_data['volume'],
            'speechRate'=>$voice_data['speech_rate'],
            'text'=>$voice_data['content'],
        ];
        $result=curl_post($url,$data,$https=false);
        file_put_contents(storage_path('app/voice/test.mp3'), $result);
        return response()->json(["code"=>200,"message"=>"识别失败","data"=>'123123']);
    }
}