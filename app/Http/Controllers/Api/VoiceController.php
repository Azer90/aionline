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
use Lib\imageProcessSdk\AipSpeech;

class VoiceController extends Controller
{
    private $app_id = '';
    private $api_key = '';
    private $secret_key = '';
    private $common = "";

    public function __construct()
    {
        $this->common = new Common();
        $this->app_id=Common::APP_ID;
        $this->api_key=Common::API_KEY;
        $this->secret_key=Common::SECRET_KEY;
    }
    /**
     * 语音文件上传
     */
    public function voiceDistinguish(Request $request)
    {
        if($request->isMethod("post")){
              $data = $request->input();
//            $file = $request->file('audio');
//            $upload_res = $this->common->upload($file);

//            if($upload_res["state"]){
               $file_upload = new FileUploadClass();
               $file_info = $file_upload->fileSave(storage_path('app/uploads/'));
               $upload_res = $file_upload->msg;
               if($file_info){
                   echo json_encode(["progress"=>1]);

                    if($data["chunks"]==$data["chunk"]+1){
                        $this->formatConversion($upload_res["info"]);
                    }

               }else{
                   return response()->json(["code"=>0,"message"=>$upload_res["info"]]);
               }
//                echo json_encode(["progress"=>1]);
//                $this->formatConversion($upload_res["path"]);
//            }else{
//                return response()->json(["code"=>0,"message"=>$this->common->getError()]);
//            }
        }
    }

    /**
     * 格式转换
     */
    public function formatConversion($path)
    {

//        $path = storage_path('app/uploads') . "/2019-06-22-17-35-00-5d0df64412a7c.mp3";

        $a = array(
            'ffmpeg.binaries' => 'D:\ffmpeg\bin\ffmpeg.exe',
            'ffprobe.binaries' => 'D:\ffmpeg\bin\ffprobe.exe',
            'timeout' => 3600, // The timeout for the underlying process
            'ffmpeg.threads' => 12,   // The number of threads that FFMpeg should use
        );
        $ffmpeg = FFMpeg::create($a);
        $audio = $ffmpeg->open($path);
        $info = $ffmpeg-> getFile($path);
        $duration = $info["duration"];//时长

        $format = new \FFMpeg\Format\Audio\Wav();

        $format->on('progress', function ($audio, $format, $percentage) {
            echo "$percentage % transcoded";
        });
        $num = ceil($duration/60);
        echo json_encode(["progress"=>2]);

        for ($i=0;$i < $num; $i++){
            $format->setAudioChannels(2)
                ->setAudioKiloBitrate(256);
            $audio->filters()->clip(TimeCode::fromSeconds($i*60), TimeCode::fromSeconds(60));
            $pcm_path = storage_path().'/app/tem/'.uniqid().".pcm";
            $audio->save($format,$pcm_path);
            $this->compound();
        }

    }

    /**
     * 语音识别
     */
    public function compound($pcm_path)
    {
        $client = new AipSpeech($this->app_id,$this->api_key,$this->secret_key);
        $res = $client->asr(file_get_contents($pcm_path), 'pcm', 16000, array(
            'dev_pid' => 1536,
        ));
        echo json_encode(["progress"=>3]);

        return response()->json(["code"=>0,"message"=>"识别成功","data"=>$res]);
    }
}