<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/24
 * Time: 15:09
 */

namespace App\Http\Controllers;


use App\Article;
use App\Link;
use App\SinglePage;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    use BaseController;
    public function  Index(Request $request){

        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->system;
        $link=Link::all();
        $common=Article::select('id','title')->where(['type'=>'common','show'=>1])->take(5)->get();//常见问题
        $new=Article::select('id','title')->where(['show'=>1])->orderBy('id', 'desc')->take(5)->get();//最新资讯
        $c_name=SinglePage::all(['id','c_name'])->toArray();
         $id=empty($c_name)?0:$c_name[0]['id'];


        $page_id=$request->get('id',$id);

        $singlePage= SinglePage::find($page_id);


        return view('web/service')->with(compact('nav','name','seo','config','link','common','new','c_name','singlePage','page_id'));
    }

}