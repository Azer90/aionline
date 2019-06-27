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
}