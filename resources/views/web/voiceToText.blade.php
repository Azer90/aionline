@include('web.layouts.header')
<style>
    .webuploader-pick{
        padding: 0;
    }
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
            <li class="on"> <a href="{{ route('voiceToText') }}">语音转文字</a></li>
            <li> <a href="{{ route('voiceCompose') }}">在线语音合成</a></li>
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
                <div class="fr">立即下载</div>
            </div>
            <p>请上传需要转换的语音文件，最大支持20M，<br />支持的文件格式：<span>MP3，MAV，M4A，WMA，AAC，FLAC，AC3，M4R，APE，OGG，WAV格式</span></p>
        </div>
        <div class="data-list">
            <p>预计剩余时间：<span>00:18</span>    已经转换时间：<span>00:22</span></p>
            <div class="box_sl">
                <div class="box_sl_item">
                    <div class="sl_g">1</div>
                    <em>上传文件</em>
                </div>
                <div class="box_sl_item">
                    <div class="sl_g">2</div>
                    <em>上传完成</em>
                </div>
                <div class="box_sl_item">
                    <div class="sl_g">3</div>
                    <em>开始转换</em>
                </div>
                <div class="box_sl_item">
                    <div class="sl_g1">4</div>
                    <em>转换完成</em>
                </div>
            </div>

        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg" />
                <p>文字转语音 功能介绍</p>
            </div>
            <span>点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg" />
                <p>文字转语音 操作指南</p>
            </div>
            <span>点击选择文件加入待转换的语音文件，也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
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
                <li>
                    <a href="#">推荐阅读推荐阅读文章调用推荐阅读推荐阅读文章调用</a>
                </li>
                <li>
                    <a href="#">推荐阅读推荐阅读文章调用推荐阅读推荐阅读文章调用</a>
                </li>
                <li>
                    <a href="#">推荐阅读推荐阅读文章调用推荐阅读推荐阅读文章调用</a>
                </li>
                <li>
                    <a href="#">推荐阅读推荐阅读文章调用推荐阅读推荐阅读文章调用</a>
                </li>
                <li>
                    <a href="#">推荐阅读推荐阅读文章调用推荐阅读推荐阅读文章调用</a>
                </li>
                <li>
                    <a href="#">推荐阅读推荐阅读文章调用推荐阅读推荐阅读文章调用</a>
                </li>
                <li>
                    <a href="#">推荐阅读推荐阅读文章调用推荐阅读推荐阅读文章调用</a>
                </li>
                <li>
                    <a href="#">推荐阅读推荐阅读文章调用推荐阅读推荐阅读文章调用</a>
                </li>
                <li>
                    <a href="#">推荐阅读推荐阅读文章调用推荐阅读推荐阅读文章调用</a>
                </li>
                <li>
                    <a href="#">推荐阅读推荐阅读文章调用推荐阅读推荐阅读文章调用</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@extends('web.layouts.footer')
<script type="text/javascript" src="{{asset('js/home/webuploader.js')}}" ></script>
<script>
    var uploader = WebUploader.create({
        swf: 'swf/Uploader.swf',
        server: 'http://www.aionline.com/api/voice',     // 服务端地址
        auto:true,
        pick: '#select',         // 指定选择文件的按钮容器
        resize: false,
        chunked: true,           //开启分片上传
        chunkSize: 1024*1024*2,  //每一片的大小
        chunkRetry: 100,         // 如果遇到网络错误,重新上传次数
        threads: 3,              //上传并发数。允许同时最大上传进程数。
        // 只允许选择图片文件。
        accept: {
        //     title: 'Images',
        //     extensions: 'MP3，MAV，M4A，WMA，AAC，FLAC，AC3，M4R，APE，OGG，WAV',
            mimeTypes: 'audio/*'
        }
    });
//上传进度
    uploader.on( 'uploadProgress', function( file,percentage  ) {
        console.log(percentage);
    })
//上传成功
    uploader.on( 'uploadSuccess', function( file ) {
       console.log(file)
    });
</script>

