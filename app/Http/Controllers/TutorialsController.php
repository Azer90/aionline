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
use App\Tag;

class TutorialsController extends Controller
{
    use BaseController;
    public function  Index(){

        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->system;
        $article=Article::paginate(9,['id','classify_id','title','description','tags']);
        foreach ($article as $key=>$value){

            if(!empty($value->classify)){
                $article[$key]['img']=get_host().'/upload/'.$value->classify->url;
            }else{
                $article[$key]['img']='';
            }
        }
        $link=Link::all();
        $common=Article::select('id','title')->where(['type'=>'common','show'=>1])->take(5)->get();//常见问题
        $new=Article::select('id','title')->where(['show'=>1])->orderBy('id', 'desc')->take(5)->get();//最新资讯
        return view('web/tutorials')->with(compact('nav','name','seo','config','article','link','common','new'));
    }

    /**
     *内容详细
     */
    public function detail($id){
        $link=Link::all();
        $common=Article::select('id','title')->where(['type'=>'common','show'=>1])->take(5)->get();//常见问题
        $new=Article::select('id','title')->where(['show'=>1])->orderBy('id', 'desc')->take(5)->get();//最新资讯
        $article=Article::find($id);
        if(empty($article)){
            return abort(404);
        }
        $tags=Tag::whereIn('id',$article['tags'])->get()->pluck(['name'])->toArray();
        $article['tag']=implode(',', $tags);
        $up =Article::select('id','title')->whereRaw('id > ? and `show` = ? and classify_id = ?', [$id,1,$article['classify_id']])->orderBy('id', 'asc')->first();//上一篇
        $down =Article::select('id','title')->whereRaw('id < ? and `show` = ? and classify_id = ?', [$id,1,$article['classify_id']])->orderBy('id', 'desc')->first();//下一篇

        $article['hits']=number_format($article['hits']);
        //$article['time']= date('Y-m-d',strtotime($article['created_at']));
        $nav=$this->nav;
        $name=$this->name;

        $config=$this->system;
        $seo=['title'=>$article['title'].'-'.$config['title'],'keywords'=>$article['keywords'],'description'=>$article['description']];

        return view('web.detail')->with(compact('nav','name','seo','config','article','common','new','up','down','link'));
    }

    public function search($tag){
        $link=Link::all();
        $common=Article::select('id','title')->where(['type'=>'common','show'=>1])->take(5)->get();//常见问题
        $new=Article::select('id','title')->where(['show'=>1])->orderBy('id', 'desc')->take(5)->get();//最新资讯
        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->system;
        $config['title_tag']=$tag;
        $article_index= Article::search($tag)->paginate(9);
        foreach ($article_index as $key=>$value){

            if(!empty($value->classify)){
                $article_index[$key]['img']=get_host().'/upload/'.$value->classify->url;
            }else{
                $article_index[$key]['img']='';
            }
        }
        return view('web.search')->with(compact('nav','name','seo','config','article_index','tag','common','new','link'));
    }

}