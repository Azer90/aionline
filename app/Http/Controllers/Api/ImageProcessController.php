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
use Illuminate\Support\Facades\DB;
use Lib\imageProcessSdk\AipImageProcess;
use App\Http\Controllers\Api\fileHandle\FileUploadClass;

class ImageProcessController extends Controller
{
    private $app_id = '16652049';
    private $api_key = 'Mwi5PAfF3Wkn025z3qyAAXtF';
    private $secret_key = 'Xx8081FEtLFMTfCW1BFtVDfIhI6mqdIQ';
    private $file_upload = "";
    private $client = "";

    public function __construct()
    {
        $this->file_upload = new FileUploadClass();
        $this->client = new AipImageProcess( $this->app_id, $this->api_key, $this->secret_key);
    }


    /**
     * 图片处理上传
     */
    public function wordUpload(Request $request)
    {
        $handle = $request->input("handle");
        $this->file_upload->fileSave(storage_path('app/uploads/'),2*1024*1024);
        $upload_info = $this->file_upload->msg;
        if($upload_info["status"]=="ok"){
            set_time_limit(120);
            $res = $this->imgSwitch($handle,$upload_info["info"]);

            if(isset($res["error_code"])){
                return $res;
            }else{
                if($res["code"]==1){
                    return response()->json(["code"=>1,"message"=>$res["message"],"data"=>$res["data"],"type"=>$handle]);
                }else{
                    return response()->json(["code"=>0,"message"=>$res["message"]]);
                }

            }
        }else{
            return response()->json(["code"=>0,"message"=>$upload_info["info"]]);
        }
    }

    /**
     * 图片处理类型选择
     */
    public function imgSwitch($handle,$path)
    {
        switch ($handle){
            case 1:
                $res = $this->removeFog($path);
                break;
            case 2:
                $res = $this->ImageEnlarge($path);
                break;
            case 3:
                $res = $this->coloring($path);
                break;
            case 4:
                $res = $this->stretching($path);
                break;
            default: $res = "";
        }
        return $res;
    }


    /**
     * 图像去雾
     */
    public function removeFog($path)
    {
        $image = file_get_contents($path);

        $res = $this->client->dehaze($image);

        if(isset($res["image"])) {

            $img = $this->base64_image_content($res["image"], storage_path() . "/app/tem_img");
            @unlink($path);
            if ($img) {
                return ["code" => 1, "message" => "去雾成功", "data" => $img];
            } else {
                return ["code" => 0, "message" => "去雾失败"];
            }
        }
    }

    /**
     * 图片无损放大
     */
    public function ImageEnlarge($path)
    {

        $image = file_get_contents($path);
        $res = $this->client->imageQualityEnhance($image);

        if(isset($res["image"])){
            $img = $this->base64_image_content($res["image"],storage_path()."/app/tem_img");
            @unlink($path);
            if($img){
                return ["code"=>1,"message"=>"放大成功","data"=>$img];
            }else{
                return ["code"=>0,"message"=>"放大失败"];
            }
        }
    }
    /**
     * 黑白上色
     */
    public function coloring($path)
    {
        $image = file_get_contents($path);
        $res = $this->client->colouring($image);
        if (isset($res["image"])){
            $img = $this->base64_image_content($res["image"], storage_path() . "/app/tem_img");//base64还原图片
            @unlink($path);
            if($img){
                return ["code" => 1, "message" => "上色成功", "data" => $img];
            }else{
                return ["code" => 0, "message" => "上色失败"];
            }
        }else{
            return ["code" => 0, "message" => "上色失败"];
        }
    }
    /**
     * 拉伸
     */
    public function stretching($path)
    {
        $image = file_get_contents($path);
        $res = $this->client->stretching($image);

        if (isset($res["image"])){
            $img = $this->base64_image_content($res["image"], storage_path() . "/app/tem_img");//base64还原图片
            @unlink($path);
            if($img){
                return ["code" => 1, "message" => "拉伸修复成功", "data" => $img];
            }else{
                return ["code" => 0, "message" => "拉伸修复失败"];
            }
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
//        $base64_image = 'data:' . $image_info['mime'] . ';base64,' . base64_encode($image_data);
        $base64_image = base64_encode($image_data);
        return $base64_image;
    }
    /* base64格式编码转换为图片并保存对应文件夹 */
    function base64_image_content($base64_image_content,$path){

        //匹配出图片的格式
          if(!file_exists(storage_path() . "/app/tem_img")){
                mkdir(storage_path() . "/app/tem_img",777);
          }
//        if(preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image_content, $result)){
//            $type = $result[2];
            $type = 'jpg';
            $new_file = $path."/".date('Ymd',time())."/";

            if(!file_exists($new_file)){
            //检查是否有该文件夹，如果没有就创建，并给予最高权限
                mkdir($new_file, 777);
            }
            $new_file_name = time().".{$type}";
            $new_file = $new_file.$new_file_name;
            if (file_put_contents($new_file, base64_decode($base64_image_content))){
                DB::table("ai_dis")->insert(["path"=>$new_file,"file_name"=>$new_file_name,"create_time"=>date("Y-m-d H:i:s",time())]);
                return ["file_name"=>$new_file_name,"base_64"=>'data:image/jpeg;base64,'.$base64_image_content];
            }else{
                return false;
            }
//        }else{
//            return false;
//        }
    }
}