@include('web.layouts.header')
<style>
    .webuploader-pick{
        padding: 0;
    }
    .btns_grow a:hover{
        color: white;
    }
    /*.qr{*/
        /*display: none;*/
        /*width: 100%;*/
        /*position: absolute;*/
        /*top:0;*/
        /*left: 0;*/
        /*z-index: 10;*/
        /*background-color: rgba(0, 0, 0, .4);*/
    /*}*/
    /*.qr div{*/
        /*margin: 40% 50%;*/
        /*transform: translateX(-50%);*/
        /*!*transform: translateY(-50%);*!*/
        /*width: 200px;*/
        /*background: #fff;*/
    /*}*/
    /*.qr img{*/
        /*width: 200px;*/
    /*}*/
</style>
<body>
@include('web.layouts.nav')
<div class="contant" style="margin-top: 0;">
    <div class="acticle_banner">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/active_banner_03.jpg" /></div>
                <div class="swiper-slide"><img src="images/active_banner_03.jpg" /></div>
                <div class="swiper-slide"><img src="images/active_banner_03.jpg" /></div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="main_left">
        <h2>语音识别</h2>
        <ul>
            <li> <a href="{{ route('voiceCompose') }}">在线语音合成</a></li>
            <li class="on"> <a href="{{ route('voiceToText') }}">语音转文字</a></li>
        </ul>
    </div>
    <div class="main_right">
        <div class="main_tops1">
            <div class="fl">语音转文字</div>
            <div class="fr">
                <img src="images/icon_11.png" />
                <ul>
                    <li>当前位置:</li>
                    <li>
                        <a href="#">首页</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="#">语音识别</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="#">语音转文字</a>
                    </li>
                </ul>
            </div>
        </div>
        <img src="images/line_03.jpg" class="line" />
        <div class="gem1">
            <div class="btns_grow">
                <div class="fl" id="select">点击选择文件</div>
                <div class="fr download" style="display: none;margin-left: 20px">立即下载</div>
            </div>
            <p>请上传需要转换的语音文件，最大支持20M，<br />支持的文件格式：<span>MP3，MAV，M4A，WMA，AAC，FLAC，AC3，M4R，APE，OGG，WAV格式</span></p>
        </div>
        <div class="data-list">
            {{--<p>预计剩余时间：<span class="down_time">2：00</span>    已经转换时间：<span class="conversion_time">0：00</span></p>--}}
            <div class="box_sl">
                <div class="box_sl_item">
                    <div class="sl_g1">1</div>
                    <em>上传文件</em>
                </div>
                <div class="box_sl_item">
                    <div class="sl_g1">2</div>
                    <em>上传完成</em>
                </div>
                <div class="box_sl_item">
                    <div class="sl_g1">3</div>
                    <em>开始转换</em>
                </div>
                <div class="box_sl_item">
                    <div class="sl_zh1">4</div>
                    <em>转换完成</em>
                </div>
            </div>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg" />
                <p>文字转语音 功能介绍</p>
            </div>
            <span>在线语音转文字，可以直接把语言文件转换为语音文件，支持主流的音频格式，将音频文件中的语音转换为文字内容。</span>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg" />
                <p>文字转语音 操作指南</p>
            </div>
            <span>上传音频文件，等待在线AI智能处理，点击【立即下载】</span>
        </div>
        <div class="tiujian">
            <div class="t_top">
                <div>
                    <p>推荐阅读</p>
                    <img src="images/more_03.jpg" />
                </div>
                <img src="images/line_03.jpg" class="line" />
            </div>
            <ul>
                @foreach ($recommend as $value)
                    <li>
                        <a href="{{ route('detail',['id'=>$value['id']]) }}">{{ $value['title'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="qr">
    <div>
        <img class="close" src="images/close.png" alt="">
        <p style="padding-left: 10px">扫描二维码关注公众号后即可下载</p>
        <img class="qr_img" src="" alt="">
    </div>
</div>
@extends('web.layouts.footer')


<script>
    var uploader = WebUploader.create({
        swf: 'swf/Uploader.swf',
        server: host+'/api/voice',     // 服务端地址
        auto:true,
        pick: '#select',         // 指定选择文件的按钮容器
        resize: false,
        chunked: true,           //开启分片上传
        chunkSize: 1024*1024*2,  //每一片的大小
        chunkRetry: 100,         // 如果遇到网络错误,重新上传次数
        threads: 1,              //上传并发数。允许同时最大上传进程数。
        fileSingleSizeLimit:20*1024*1024,
        duplicate :true,
        // 只允许选择图片文件。
        accept: {
        //     title: 'Images',
        //     extensions: 'MP3，MAV，M4A，WMA，AAC，FLAC，AC3，M4R，APE，OGG，WAV',
            mimeTypes: 'audio/*'
        }
    });
    var conversion_time = "";
    var down_time = "";
    /**
     * 验证文件格式以及文件大小
     */
    uploader.on("error", function (type) {
        if (type == "Q_TYPE_DENIED") {
            layer.msg("请上传音频文件");
        } else if (type == "Q_EXCEED_SIZE_LIMIT") {
            layer.msg("文件大小不能超过20M");
        }else {
            layer.msg("上传出错！请检查后重新上传！错误代码"+type);
        }
    });
//上传进度
    uploader.on( 'uploadProgress', function( file,percentage  ) {
        // console.log(percentage);
    });
    uploader.on( 'startUpload', function( ) {
        // clearTimeout(conversion_time);
        // clearTimeout(down_time);
        // time();
        $(".sl_g1:eq(0)").attr("class","sl_g")
    });

    var file_name = "";
    var user_id = "";
//上传成功
    uploader.on( 'uploadSuccess', function( file,response  ) {
            if(response.code==1){
                $(".sl_g1:eq(0)").attr("class","sl_g")
                $.ajax({
                    url:host+"/api/formatConversion",
                    dataType:"json",
                    type:"post",
                    data:{path:response.data},
                    beforeSend:function(){
                        $(".sl_g1:eq(0)").attr("class","sl_g")
                    },
                    success:function (res) {
                        if(res.code==1){
                            $(".sl_zh1:eq(0)").attr("class","sl_zh")
                            $(".download").show();
                            file_name = res.data;
                        }else{
                            layer.alert(res.message);
                        }
                        // clearTimeout(conversion_time);
                        // clearTimeout(down_time);
                    }
                })
            }
    });

    $(".download").on("click",function () {

        $.ajax({
            url:host+"/api/download_check",
            type:"post",
            dataType: "json",
            data:{file_name:file_name,user_id:user_id},
            success:function (res) {
                user_id = res.user_id;
                if(res.download_code==1){
                    location.href=host+"/api/word_download?file_name="+file_name;
                }else{
                    $(".qr .qr_img").attr("src",res.qrcode_url);
                    $(".qr").show();
                    polling();
                }
            }
        })
    })

    /**
     * 轮询
     */

    function polling() {
        var con = 0;

        var time = setTimeout(function () {
            $.ajax({
                url:host+"/api/follow",
                type:"post",
                dataType: "json",
                data:{user_id:user_id,file_name:file_name},
                success:function (res) {
                    con++;
                    if(res.code==1){
                        $(".qr").hide();
                        if(uploader.options.formData.dis_type==6){
                            location.href=res.path;
                        }else{
                            location.href=host+"/api/word_download?file_name="+file_name;
                        }
                    }else{
                        if(con<100){
                            polling();
                        }
                    }
                }
            })
        },500)
    }

    $(document).on("click",".qr .close",function () {
        $(".qr").hide();
        user_id="";
        clearTimeout(time)
    });


    /**
     * 计时
     * @constructor
     */
    function time() {
        count_down();

        var minute_ind = 0;
        // var minute_ten = 0;
        var second_ind = 0;
        var second_ten = 0;
        clearTimeout(conversion_time);
         conversion_time=setInterval(function () {
            $(".conversion_time").text(minute_ind+"："+second_ten+second_ind)
            if(second_ind<9){
                second_ind+=1;
            }else{
                second_ind=0;
                if(second_ten<5){
                    second_ten+=1;
                }else{
                    second_ten=0;
                    if(minute_ind<9){
                        minute_ind+=1;
                    }else{
                        minute_ind=0;
                    }
                }
            }
            if(minute_ind+"："+second_ten+second_ind =="2：00"){
                clearTimeout(conversion_time)
            }
         },1000)

    }

    /**
     * 倒计时
     */
    function count_down() {

        var second_ind = 0;
        var second_ten = 0;
        var minute_ind = 2;

        clearTimeout(down_time);
         down_time = setInterval(function () {
            $(".down_time").text(minute_ind+"："+second_ten+second_ind);
            if((second_ten+""+second_ind)=="00"){
                minute_ind-=1;
                second_ten=5;
                second_ind=9
            }else{
                second_ind-=1;
                if(second_ind<=0){
                    if(second_ten>0){
                        second_ten-=1;
                        second_ind=9
                    }
                }
            }
            if(minute_ind+"："+(second_ten+""+second_ind)=="0：00"){
                clearTimeout(down_time);
            }
        },1000)
    }


</script>

