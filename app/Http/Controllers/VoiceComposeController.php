<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/24
 * Time: 16:07
 */

namespace App\Http\Controllers;


class VoiceComposeController extends Controller
{
    use BaseController;

    public function  Index(){

        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->system;
        return view('web/voiceCompose')->with(compact('nav','name','seo','config'));
    }
}