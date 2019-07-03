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
use App\Http\Controllers\Api\fileHandle\FileUploadClass;

class ImageProcessController extends Controller
{
    private $app_id = '16652049';
    private $api_key = 'Mwi5PAfF3Wkn025z3qyAAXtF';
    private $secret_key = 'Xx8081FEtLFMTfCW1BFtVDfIhI6mqdIQ';
    private $file_upload = "";

    public function __construct()
    {
        $this->file_upload = new FileUploadClass();
    }
    /**
     * 图片无损放大
     */
    public function ImageEnlarge(Request $request)
    {
        $this->file_upload->fileSave(storage_path('app/uploads/'));
        $upload_info = $this->file_upload->msg;

        $client = new AipImageProcess( $this->app_id, $this->api_key, $this->secret_key);
        $image = file_get_contents($upload_info["info"]);

        $res = $client->imageQualityEnhance($image);
        if(isset($res["image"])){
            $img = $this->base64_image_content($res["image"],storage_path()."/app/tem_img");
            if($img){
                return response()->json(["code"=>0,"message"=>"放大成功","data"=>$img]);
            }else{
                return response()->json(["code"=>0,"message"=>"放大失败"]);
            }
        }
    }

    /**
     * 图像去雾
     */
    public function removeFog(Request $request)
    {

        $this->file_upload->fileSave(storage_path('app/uploads/'));
        $upload_info = $this->file_upload->msg;

        $client = new AipImageProcess( $this->app_id, $this->api_key, $this->secret_key);
        $image = file_get_contents($upload_info["info"]);

        $res = $client->dehaze($image);
        if(isset($res["image"])) {
            $img = $this->base64_image_content($res["image"], storage_path() . "/app/tem_img");
            if ($img) {
                return response()->json(["code" => 0, "message" => "去雾成功", "data" => $img]);
            } else {
                return response()->json(["code" => 0, "message" => "去雾失败"]);
            }
        }
    }
    /**
     * 上色
     */
    public function coloring(Request $request)
    {
        $this->file_upload->fileSave(storage_path('app/uploads/'));//上传图片
        $upload_info = $this->file_upload->msg;
        if($upload_info["status"]=="ok"){
            $base_img = $this->base64EncodeImage($upload_info["info"]);//图片base64转码
            $token = $this->getAccessToken();
            $url="https://aip.baidubce.com/rest/2.0/image-process/v1/colourize?access_token=".$token;
            $data = ["image"=>$base_img];
            $res = $this->request_post($url,$data);
            if (isset($res["image"])){
                $img = $this->base64_image_content($res["image"], storage_path() . "/app/tem_img");//base64还原图片
                if($img){
                    return response()->json(["code" => 0, "message" => "上色成功", "data" => $img]);
                }else{
                    return response()->json(["code" => 0, "message" => "上色失败"]);
                }
            }
        }else{
            return response()->json(["code" => 0, "message" => $upload_info["info"]]);
        }
    }
    /**
     * 拉伸
     */
    public function stretching(Request $request)
    {
        $this->file_upload->fileSave(storage_path('app/uploads/'));//上传图片
        $upload_info = $this->file_upload->msg;
        if($upload_info["status"]=="ok"){
            $base_img = $this->base64EncodeImage($upload_info["info"]);//图片base64转码
            $token = $this->getAccessToken();
            $url='https://aip.baidubce.com/rest/2.0/image-process/v1/stretch_restore?access_token=' . $token;
            $data = ["image"=>$base_img];
            $res = $this->request_post($url,$data);
            if (isset($res["image"])){
                $img = $this->base64_image_content($res["image"], storage_path() . "/app/tem_img");//base64还原图片
                if($img){
                    return response()->json(["code" => 0, "message" => "拉伸修复成功", "data" => $img]);
                }else{
                    return response()->json(["code" => 0, "message" => "拉伸修复失败"]);
                }
            }
        }else{
            return response()->json(["code" => 0, "message" => $upload_info["info"]]);
        }
    }
    /**
     * 获取accessToken
     */
    public function getAccessToken()
    {
        $url = 'https://aip.baidubce.com/oauth/2.0/token';
        $post_data['grant_type']       = 'client_credentials';
        $post_data['client_id']      = $this->api_key;
        $post_data['client_secret'] = $this->secret_key;
        $o = "";
        foreach ( $post_data as $k => $v )
        {
            $o.= "$k=" . urlencode( $v ). "&" ;
        }
        $post_data = substr($o,0,-1);

        $res = $this->request_post($url, $post_data);
        return json_decode($res,true);
    }
    /**
     * @param $url
     * @param $data
     * @return mixed
     * curl请求
     */
    function request_post($url = '', $param = '')
    {
        if (empty($url) || empty($param)) {
            return false;
        }

        $postUrl = $url;
        $curlPost = $param;
        // 初始化curl
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $postUrl);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        // 要求结果为字符串且输出到屏幕上
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        // post提交方式
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
        // 运行curl
        $data = curl_exec($curl);
        curl_close($curl);

        return $data;
    }

    /**
     * @param $image_file
     * @return string
     * 图片转base64
     */
    function base64EncodeImage($image_file) {
        $base64_image = '';
        $image_info = getimagesize($image_file);
        $image_data = fread(fopen($image_file, 'r'), filesize($image_file));
        $base64_image = 'data:' . $image_info['mime'] . ';base64,' . chunk_split(base64_encode($image_data));
        return $base64_image;
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