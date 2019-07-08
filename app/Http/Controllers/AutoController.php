<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/8
 * Time: 23:31
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class AutoController extends Controller
{
    /**
     * 自动删除文件
     */
    public function auto_delete()
    {
        $time = time()-3*60*60*24;
        $res = DB::table("ai_dis")->whereRaw("UNIX_TIMESTAMP(create_time) < ".$time)->get();
        foreach ($res as $key=>$value){
            @unlink($value->path);
            DB::table("ai_dis")->where("file_name",$value->file_name)->delete();
        }
    }
}