<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/22
 * Time: 14:10
 */

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Lib\imageProcessSdk\AipImageProcess;

class ImageProcessController extends Controller
{
    private $app_id = '';
    private $api_key = '';
    private $secret_key = '';
    private $common = "";

    public function __construct()
    {
        $this->common = new Common(array("maxSize"=>4*1024*1024,"exts"=>["jpg","png","bmp"]));
        $this->app_id=Common::APP_ID;
        $this->api_key=Common::API_KEY;
        $this->secret_key=Common::SECRET_KEY;
    }
    /**
     * 图片无损放大
     */
    public function ImageEnlarge(Request $request)
    {
        if($request->isMethod("post")){
            $file = $request->file('image');
            $upload_res = $this->common->upload($file);

            if($upload_res["state"]){

                $client = new AipImageProcess( $this->app_id, $this->api_key, $this->secret_key);
                $image = file_get_contents($upload_res["path"]);

                $res = $client->imageQualityEnhance($image);

                if(isset($res["image"])){

                    $img = $this->base64_image_content($res["image"],storage_path()."/app/download-tem");
                    if($img){
                        return response()->json(["code"=>0,"message"=>"放大成功","data"=>$img]);
                    }else{
                        return response()->json(["code"=>0,"message"=>"放大失败"]);
                    }
                }
            }else{
                return response()->json(["code"=>0,"message"=>$this->common->getError()]);
            }
        }
    }

    /**
     * 图像去雾
     */
    public function removeFog(Request $request)
    {
        if($request->isMethod("post")){
            $file = $request->file('image');
            $upload_res = $this->common->upload($file);

            if($upload_res["state"]){

                $client = new AipImageProcess( $this->app_id, $this->api_key, $this->secret_key);
                $image = file_get_contents($upload_res["path"]);

                $res = $client->dehaze($image);
                if(isset($res["image"])) {
                    $img = $this->base64_image_content($res["image"], storage_path() . "/app/download-tem");
                    if ($img) {
                        return response()->json(["code" => 0, "message" => "去雾成功", "data" => $img]);
                    } else {
                        return response()->json(["code" => 0, "message" => "去雾失败"]);
                    }
                }
            }else{
                return response()->json(["code"=>0,"message"=>$this->common->getError()]);
            }
        }
    }
    
    /* base64格式编码转换为图片并保存对应文件夹 */
    function base64_image_content($base64_image_content,$path){
        //匹配出图片的格式
        if(preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image_content, $result)){
            $type = $result[2];
            $new_file = $path."/".date('Ymd',time())."/";
        if(!file_exists($new_file)){
        //检查是否有该文件夹，如果没有就创建，并给予最高权限
            mkdir($new_file, 0700);
        }
        $new_file = $new_file.time().".{$type}";
        if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $base64_image_content)))){
            return '/'.$new_file;
        }else{
            return false;
        }
        }else{
            return false;
        }
    }
}