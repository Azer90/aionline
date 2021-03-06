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
use Illuminate\Support\Facades\Log;

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

//        $audio = $ffmpeg->open($path);
        $info = $ffmpeg->getFile($path);
        $duration = $info["duration"];//时长

//        $format = new \FFMpeg\Format\Audio\Wav();

//        $format->on('progress', function ($audio, $format, $percentage) {
////            echo "$percentage % transcoded";
//        });
        $num =(int)ceil($duration/60);
        set_time_limit(300);

        //文件
        $file_name = date("Ymd",time()).uniqid().".txt";
        if(!file_exists( storage_path()."/app/txt")){
            mkdir(storage_path()."/app/txt",0777);
        }
        $txt = storage_path()."/app/txt/".$file_name;
        $sCon = 0;

//        $format->setAudioChannels(2)
//            ->setAudioKiloBitrate(256);
        //分割转换pcm文件

        for ($i=0;$i < $num; $i++){

//            $audio->filters()->clip(TimeCode::fromSeconds($i*30), TimeCode::fromSeconds(30));
//            $pcm_path = storage_path().'/app/tem/'.uniqid().".pcm";
//            $audio->save($format,$pcm_path);
            $pcm_path = $this->setCutting($path,$i*60,60);
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

    public function test_ar()
    {

        $primary_path = storage_path('app/uploads')."/16k.wav";

        $pcm_path = storage_path().'/app/tem/'.uniqid().".pcm";
        $ffmpeg_path = 'D:\ffmpeg\bin\ffmpeg';
        $command_line = $ffmpeg_path.' -y  -i '.$primary_path."  -acodec pcm_s16le -f s16le -ac 1 -ar 16000 ".$pcm_path;
        exec($command_line,$output);

        $ffmpeg_path.' -ss 00:00:00 -t 00:00:30 -i test.mp4 -vcodec copy -acodec copy output.mp4';

        $client = new AipSpeech($this->app_id,$this->api_key,$this->secret_key);
        $res = $client->asr(file_get_contents($pcm_path), 'pcm', 16000, array(
            'dev_pid' => 1536,
        ));
        dump($res);
    }

    /**
     * 格式转换
     */
    public function setCconversion($primary_path)
    {
        $ffmpeg_path = 'D:\ffmpeg\bin\ffmpeg';
        $pcm_path = storage_path().'/app/tem/'.uniqid().".pcm";
        $command_line = $ffmpeg_path.' -y  -i '.$primary_path."  -acodec pcm_s16le -f s16le -ac 1 -ar 16000 ".$pcm_path;
        exec($command_line,$output);
        @unlink($primary_path);
        return $pcm_path;
    }

    /**
     * 音频切割
     */
    public function setCutting($primary_path,$start_time,$interval)
    {

        $ffmpeg_path = 'D:\ffmpeg\bin\ffmpeg';
        $end_time =gmdate('H:i:s',$interval);//计算结束时间
        $start_time = gmdate("H:i:s",$start_time);
        $str=explode('.',$primary_path);
        $ext = $str[1];//文件后缀

        $primary_tem_path = storage_path().'/app/tem/'.uniqid().".".$ext;

        $command_line = $ffmpeg_path.' -ss '.$start_time.' -t '.$end_time.' -i '.$primary_path.' -vcodec copy -acodec copy '.$primary_tem_path;
        exec($command_line,$output);

        $pcm_path =$this->setCconversion($primary_tem_path);


        return $pcm_path;
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
        $monolog = Log::getMonolog();
        $monolog->popHandler();
        Log::useFiles(storage_path('logs/res.log'));
        Log::info($res);
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