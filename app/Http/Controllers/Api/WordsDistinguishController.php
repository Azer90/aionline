<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/22
 * Time: 17:41
 */

namespace App\Http\Controllers\Api;


use Lib\imageProcessSdk\AipOcr;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WordsDistinguishController extends Controller
{
    private $app_id = '';
    private $api_key = '';
    private $secret_key = '';
    private $common = "";
    private $client;
    public function __construct()
    {
        $this->common = new Common();
        $this->app_id=Common::APP_ID;
        $this->api_key=Common::API_KEY;
        $this->secret_key=Common::SECRET_KEY;

        $this->client = new AipOcr($this->app_id, $this->api_key, $this->secret_key);

    }
    /**
     * 文字
     */
    public function word(Request $request)
    {
        $type = $request->input("type");
        $ori = $request->input("ori");
        $file = $request->file('image');
        $upload_res = $this->common->upload($file);
        $res = "";
        if($upload_res["state"]){
            switch ($type){
                case 1:
                    $res=$this->currency($upload_res["path"]);//通用识别
                    break;
                case 2:
                    $Ori = $ori ? $ori : 1;
                    $res=$this->idcard($upload_res["path"],$Ori);//身份证识别
                    break;
                case 3:$this->driving($upload_res["path"]);//驾驶证
                    break;
                case 4:$this->vehicleLicense($upload_res["path"]);//行驶证
                    break;
                case 5:$this->businessLicense($upload_res["path"]);//营业执照
                    break;
                case 6:$this->handwriting($upload_res["path"]);//手写文字识别
                    break;
                case 7:$this->bankcard($upload_res["path"]);//银行卡
                    break;
                case 8:;
                    break;
            }
            
        }else{
            return response()->json(["code"=>0,"message"=>$this->common->getError()]);
        }
        $message = "识别成功";
        if($type==2){
            $message = $res["message"];
        }
        return response()->json(["code"=>0,"message"=>$message,"data"=>$res]);
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
        return $res["data"];
    }

    /**
     * 行驶证
     */
    public function vehicleLicense($path)
    {
        $image = file_get_contents($path);

        $res = $this->client->vehicleLicense($image);
        return $res["data"];
    }

    /**
     * 营业执照
     */
    public function businessLicense($path)
    {
        $image = file_get_contents($path);

        $res = $this->client->businessLicense($image);
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
        return $res;
    }
    /**
     * 表格文字识别
     */
    public function form($path)
    {
        $image = file_get_contents($path);
        $res = $this->client->form($image);
        return $res;
    }
}