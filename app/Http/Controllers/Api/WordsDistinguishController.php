<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/22
 * Time: 17:41
 */

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Api\fileHandle\FileUploadClass;
use App\Http\Controllers\WeChatController;
use App\WechatUsers;
use Illuminate\Support\Facades\DB;
use Lib\imageProcessSdk\AipOcr;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WordsDistinguishController extends Controller
{
    private $app_id = '16652049';
    private $api_key = 'Mwi5PAfF3Wkn025z3qyAAXtF';
    private $secret_key = 'Xx8081FEtLFMTfCW1BFtVDfIhI6mqdIQ';
    private $file_upload;
    private $client;
    public function __construct()
    {
        $this->file_upload = new FileUploadClass();
        $this->client = new AipOcr($this->app_id, $this->api_key, $this->secret_key);

    }

    /**
     * 文字识别图片上传
     */
    public function wordUpload(Request $request)
    {
        $type = $request->input("dis_type");
        $ori = $request->input("ori");

        $this->file_upload->fileSave(storage_path('app/uploads/'),2*1024*1024);
        $upload_info = $this->file_upload->msg;

        $res = $this->word($type,$ori,$upload_info["info"]);

        if(isset($res["error_code"])){
            return response()->json(["code"=>0,"message"=>$res["error_msg"]]);
        }else{
            return response()->json(["code"=>1,"message"=>"文字识别成功","data"=>$res,"type"=>$type]);
        }
    }

    /**
     * 文字
     */
    public function word($dis_type,$ori,$path)
    {
        $res = "";
        switch ($dis_type){
            case 1:
                $res=$this->currency($path);//通用识别
                break;
            case 2:
                $Ori = $ori ? $ori : 1;
                $res=$this->idcard($path,$Ori);//身份证识别
                break;
            case 3:
                $res = $this->vehicleLicense($path);//行驶证
                break;
            case 4:
                $res = $this->driving($path);//驾驶证
                break;
            case 5:
                $res = $this->businessLicense($path);//营业执照
                break;
            case 6:
                $res = $this->form($path);//表格文字识别
                break;
            case 7:
                $res = $this->handwriting($path);//手写文字识别
                break;
            case 8:
                $res = $this->bankcard($path);//银行卡;
                break;
        }
        return $res;
    }

    /**
     * 通用识别
     */
    public function currency($path)
    {
        $image = file_get_contents($path);
        $options = array();
        $options["probability"] = "true";
        $res = $this->client->basicAccurate($image,$options);

        $res["file_name"]=$this->createFileName($res["words_result"]);
        return $res;
    }

    /**
     * 身份证识别
     */
    public function idcard($path,$Ori)
    {
        switch ($Ori){
            case 1:
                $idCardSide="front";
                break;
            case 2:
                $idCardSide="back";
                break;
        }
        $image = file_get_contents($path);
        $res = $this->client->idcard($image, $idCardSide);
        $res["message"] = $this->idcardRes($res["image_status"]);
        $res["file_name"]=$this->createFileName($res["words_result"]);
        return $res;
    }

    /**
     * 身份证识别结果转换
     */
    public function idcardRes($res_message)
    {
        $chinese ="";
        switch ($res_message){
            case "normal":
                $chinese="识别正常";
                break;
            case "reversed_side":
                $chinese="未摆正身份证";
                break;
            case "non_idcard":
                $chinese="上传的图片中不包含身份证";
                break;
            case "blurred":
                $chinese="身份证模糊";
                break;
            case "over_exposure":
                $chinese="身份证关键字段反光或过曝";
                break;
            case "unknown":
                $chinese="未知状态";
                break;
        }
        return $chinese;
    }

    /**
     * 驾驶证
     */
    public function driving($path)
    {
        $image = file_get_contents($path);

        $res = $this->client->drivingLicense($image);
        $res["file_name"]=$this->createFileName($res["words_result"]);
        return $res;
    }

    /**
     * 行驶证
     */
    public function vehicleLicense($path)
    {
        $image = file_get_contents($path);

        $res = $this->client->vehicleLicense($image);
        $res["file_name"]=$this->createFileName($res["words_result"]);
        return $res;
    }

    /**
     * 营业执照
     */
    public function businessLicense($path)
    {
        $image = file_get_contents($path);

        $res = $this->client->businessLicense($image);
        $res["file_name"]=$this->createFileName($res["words_result"]);
        return $res;
    }

    /**
     * @param $path
     * 手写文字识别
     */
    public function handwriting($path)
    {
        $image = file_get_contents($path);
        $options = array();
        $options["recognize_granularity"] = "big";

        $res = $this->client->handwriting($image, $options);
        $res["file_name"]=$this->createFileName($res["words_result"]);
        return $res;
    }

    /**
     * @param $path
     * 银行卡识别
     */
    public function bankcard($path)
    {
        $image = file_get_contents($path);
        $res = $this->client->bankcard($image);
        $res["file_name"]=$this->createFileName($res["words_result"]);
        return $res;
    }
    /**
     * 表格文字识别
     */
    public function form($path)
    {
        $image = file_get_contents($path);
        $dis = $this->client->tableRecognitionAsync($image);

        $res = $this->getDisRes($dis["result"][0]["request_id"]);
        $flag = true;
        while ($flag){
            sleep(1);
            if($res["result"]["ret_code"]==3){
                $flag = false;
            }else{
                $res = $this->getDisRes($dis["result"][0]["request_id"]);
            }
        }
        DB::table("ai_dis")->insert(["path"=>$res["result"]["result_data"],"file_name"=>$res["result"]["request_id"],"create_time"=>date("Y-m-d H:i:s",time())]);
        $res["file_name"] = $res["result"]["request_id"];

        return $res;
    }

    /**
     * @param $dis_id
     * @return array
     * 获取识别结果
     */
    public function getDisRes($dis_id)
    {
        $dis_res = $this->client->getTableRecognitionResult($dis_id);
        return $dis_res;
    }
    /**
     * @param Request $request
     * @return array
     * 网络图文识别
     */
    public function webDis(Request $request)
    {
        $url= $request->input("url");

// 带参数调用网络图片文字识别, 图片参数为远程url图片
        $res = $this->client->webImageUrl($url);
        $res["file_name"]=$this->createFileName($res["words_result"]);
        return $res;
    }

    /**
     * 文件生成
     */
    public function createFileName($info)
    {
        $chars = '0123456789';
        $hash = '';
        $max = strlen($chars) - 1;
        for($i = 0; $i < 5; $i++) {
            $hash .= $chars[mt_rand(0, $max)];
        }
        $hash = date("Ymd",time()).$hash.uniqid().".txt";

        if(!file_exists( storage_path()."/app/txt")){
            mkdir(storage_path()."/app/txt",0777);
        }
        $txt = storage_path()."/app/txt/".$hash;
        foreach ($info as $k=> $v){
            file_put_contents($txt,$k."：".$v["words"].PHP_EOL,FILE_APPEND);
        }
        DB::table("ai_dis")->insert(["path"=>$txt,"file_name"=>$hash,"create_time"=>date("Y-m-d H:i:s",time())]);
        return $hash;
    }

    /**
     * 下载检测
     */
    public function download_check(Request $request)
    {
        $info= $request->input();

        if(empty($info["user_id"])){
            $wechat = new WeChatController();
            $qr_info = $wechat->qrcode();
            $qr_info = $qr_info->getData();
            $res=json_encode($qr_info,true);
            $res=json_decode($res,true);


            $res["download_code"]=0;
            return $res;
        }else{
              $res["download_code"]=1;
              $res["user_id"]="";
              $res["qrcode_url"]="";
              return  $res;
        }
    }

    /**
     * 关注轮训
     */
    public function follow(Request $request)
    {
        $user_id = $request->input("user_id");
        $res = WechatUsers::where("user_id",$user_id)->first();
        if(empty($res)){
            return array("code"=>0,"path"=>"");
        }else{
            $file_name = $request->input("file_name");
            $file_info =DB::table("ai_dis")->where("file_name",$file_name)->first();
            $file_info = json_encode($file_info,true);
            $file_info = json_decode($file_info,true);
            return array("code"=>1,"path"=>$file_info["path"]);
        }
    }

    /**
     * @param Request $request
     * 下载
     */
    public function word_download(Request $request)
    {
        $file_name = $request->input("file_name");
        $file_info =DB::table("ai_dis")->where("file_name",$file_name)->first();

        $file_info = json_encode($file_info,true);
        $file_info = json_decode($file_info,true);
        if(preg_match('/(http:\/\/)|(https:\/\/)/i', $file_info["path"])){
            return $file_info["path"];
        }else{
            $this->file_upload->fileDownload($file_info["path"]);
        };

    }

}