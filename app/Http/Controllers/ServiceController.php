<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/24
 * Time: 15:09
 */

namespace App\Http\Controllers;


class ServiceController extends Controller
{
    use BaseController;
    public function  Index(){

        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->system;
        return view('web/service')->with(compact('nav','name','seo','config'));
    }

}