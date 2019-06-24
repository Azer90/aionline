<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/24
 * Time: 15:09
 */

namespace App\Http\Controllers;


class IndexController extends Controller
{
  use BaseController;
    public function  Index(){
        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->system;
        return view('web/index')->with(compact('nav','name','seo','config'));
    }

}