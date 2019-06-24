<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/22
 * Time: 14:25
 */

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Common
{
    const APP_ID = '';
    const API_KEY = '';
    const SECRET_KEY = '';
    private $error = "";
    private $config =[
        'maxSize'       =>  10*1024*1024,//大小限制10M
        'exts'          => ["mp3","wma","rm","wav","midi","ape","flac","bmp","jpg","jpeg","png"]
    ];

    public function __construct($config = [])
    {
        array_merge($this->config,$config);
    }
    /**
     * 文件上传
     */
    public function upload($file)
    {
        if(!$this->cheked($file)){
            $json = [
                "state"=>false,
                "path"=> ""
            ];
            return $json;
        }

        // 文件是否上传成功
        if ($file->isValid()) {

            // 获取文件相关信息
            $ext = $file->getClientOriginalExtension();     // 扩展名
            $realPath = $file->getRealPath();   //临时文件的绝对路径

            // 上传文件
            $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
            $bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));

            if($bool){
                $json = [
                    "state"=>true,
                    "path"=> storage_path('app/uploads/').$filename
                ];
            }else{
                $this->error = $file->getError();
                $json = [
                    "state"=>false,
                    "path"=> ""
                ];
            }
            return $json;
        }
    }

    /**
     * 检测
     */
    public function cheked($file)
    {
        if(empty($file)){
            $this->error= "没有上传文件";
            return false;
        }
        $size = $file->getSize();
        if($size > $this->config["maxSize"]){

            $this->error= "文件限制".($this->config["maxSize"]/1024/1024)."M";
            return false;
        }

        if(!in_array($file->getClientOriginalExtension(),$this->config["exts"])){

            $this->error= "格式不符合要求";
            return false;
        }

        return true;
    }

    /**
     * 获取错误信息
     */
    public function getError()
    {
        return $this->error;
    }
}