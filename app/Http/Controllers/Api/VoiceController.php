<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/18
 * Time: 22:10
 */

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\fileHandle\FileUploadClass;
use App\Http\Controllers\Controller;
use FFMpeg\Coordinate\TimeCode;
use Illuminate\Http\Request;
use FFMpeg\FFMpeg;
use Illuminate\Support\Facades\DB;
use Lib\imageProcessSdk\AipSpeech;

class VoiceController extends Controller
{
    private $app_id = '16652049';
    private $api_key = 'Mwi5PAfF3Wkn025z3qyAAXtF';
    private $secret_key = 'Xx8081FEtLFMTfCW1BFtVDfIhI6mqdIQ';
    private $file_upload;

    public function __construct()
    {
        $this->file_upload = new FileUploadClass();
    }
    /**
     * 语音文件上传
     */
    public function voiceDistinguish(Request $request)
    {
        if($request->isMethod("post")){
              $data = $request->input();

               $file_info =$this->file_upload->fileSave(storage_path('app/uploads'));
               $upload_res = $this->file_upload->msg;
               if($file_info){
                   if(isset($data["chunks"])){

                    if($data["chunks"]==$data["chunk"]+1){
                        return response()->json(["code"=>1,"message"=>"上传成功","data"=>$upload_res["info"]]);
                    }
                   }else{
                       return response()->json(["code"=>1,"message"=>"上传成功","data"=>$upload_res["info"]]);
                   }
               }else{
                   return response()->json(["code"=>0,"message"=>$upload_res["info"]]);
               }
        }
    }

    /**
     * 格式转换
     */
    public function formatConversion(Request $request)
    {
        $path = $request->input("path");
        $a = array(
            'ffmpeg.binaries' => 'D:\ffmpeg\bin\ffmpeg.exe',
            'ffprobe.binaries' => 'D:\ffmpeg\bin\ffprobe.exe',
            'timeout' => 3600, // The timeout for the underlying process
            'ffmpeg.threads' => 12,   // The number of threads that FFMpeg should use
        );
        $ffmpeg = FFMpeg::create($a);
        $audio = $ffmpeg->open($path);
        $info = $ffmpeg->getFile($path);
        $duration = $info["duration"];//时长

        $format = new \FFMpeg\Format\Audio\Wav();

        $format->on('progress', function ($audio, $format, $percentage) {
            echo "$percentage % transcoded";
        });
        $num = ceil($duration/30);
        set_time_limit(120);
        //文件
        $file_name = date("Ymd",time()).uniqid().".txt";
        if(!file_exists( storage_path()."/app/txt")){
            mkdir(storage_path()."/app/txt",0777);
        }
        $txt = storage_path()."/app/txt/".$file_name;
        $sCon = 0;
        //分割转换pcm文件
        for ($i=0;$i < $num; $i++){
            $format->setAudioChannels(2)
                ->setAudioKiloBitrate(256);
            $audio->filters()->clip(TimeCode::fromSeconds($i*30), TimeCode::fromSeconds(30));
            $pcm_path = storage_path().'/app/tem/'.uniqid().".pcm";

            $audio->save($format,$pcm_path);
            $compound_res = $this->compound($pcm_path,$txt);

            if($compound_res){
                $sCon+=1;
            }
        }

        DB::table("ai_dis")->insert(["path"=>$txt,"file_name"=>$file_name,"create_time"=>date("Y-m-d H:i:s",time())]);
        @unlink($path);

        if($sCon){
            return response()->json(["code"=>1,"message"=>"识别成功","data"=>$file_name]);
        }else{
            return response()->json(["code"=>0,"message"=>"识别失败","data"=>$file_name]);
        }

    }

    /**
     * 语音识别
     */
    public function compound($pcm_path,$txt)
    {
        $client = new AipSpeech($this->app_id,$this->api_key,$this->secret_key);

        $res = $client->asr(file_get_contents($pcm_path), 'pcm', 16000, array(
            'dev_pid' => 1536,
        ));

        if($res["err_msg"]=="success."){
            file_put_contents($txt,$res["result"][0],FILE_APPEND);
            @unlink($pcm_path);
            return true;
        }else{
            @unlink($pcm_path);
            return false;
        }


    }

    /**
     * 是否关注
     */
    public function isFollow()
    {
        
    }
    /**
     * 文件下载
     */
    public function fileDownload(Request $request)
    {
        $file = $request->input("file");

        $file_info =DB::table("ai_dis")->where("file_name",$file)->first();

        $file_info = json_encode($file_info,true);
        $file_info = json_decode($file_info,true);
        $this->file_upload->fileDownload($file_info["path"]);
    }
}