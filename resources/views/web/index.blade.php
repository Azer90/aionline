@include('web.layouts.header')

<body>
@include('web.layouts.nav')
<div class="acticle_bannera">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="{{asset('images/active_banner_03.jpg')}}" /></div>
            <div class="swiper-slide"><img src="{{asset('images/active_banner_03.jpg')}}" /></div>
            <div class="swiper-slide"><img src="{{asset('images/active_banner_03.jpg')}}" /></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>
<div class="online_contant">
    <div class="voiec">
        <div class="tong">
            <p>语音转换</p>
            <span>Voice Conversion</span>
        </div>
        <div class="voice_box">
            <a href="{{ route('voiceToText') }}"><div class="fl">
                <img src="{{asset('images/onlines_551.png')}}"/>
                <p>语音转文字</p>
                <span>内容文字介绍内容文字介绍内容文字介绍内容文字介绍</span>
                </div></a>
            <a href="{{ route('voiceCompose') }}"> <div class="fr">
                <img src="{{asset('images/onlines_03.png')}}"/>
                <p>在线语音合成</p>
                <span>内容文字介绍内容文字介绍内容文字介绍内容文字介绍</span>
                </div></a>
        </div>
    </div>
    <div class="image_ai">
        <div class="tong">
            <p>图像AI处理</p>
            <span>Image AI Processing</span>
        </div>
        <ul>
            <li>
                <img src="{{asset('images/onlines_553.png')}}"/>
                <p>图像去雾</p>
                <span>文字内容介绍文字内容介绍</span>
            </li>
            <li>
                <img src="{{asset('images/onlines_552.png')}}"/>
                <p>图像无损放大</p>
                <span>文字内容介绍文字内容介绍</span>
            </li>
            <li>
                <img src="{{asset('images/onlines_554.png')}}"/>
                <p>黑白图片上色</p>
                <span>文字内容介绍文字内容介绍</span>
            </li>
            <li>
                <img src="{{asset('images/onlines_555.png')}}"/>
                <p>拉伸图像修复</p>
                <span>文字内容介绍文字内容介绍</span>
            </li>
        </ul>
    </div>
    <div class="image_ai">
        <div class="tong">
            <p>文字光学识别</p>
            <span>Character Optical Recognition</span>
        </div>
        <ul>
            <li>
                <img src="{{asset('images/onlines_559.png')}}"/>
                <p>常用识别</p>
                <span>文字内容介绍文字内容介绍</span>
            </li>
            <li>
                <img src="{{asset('images/onlines_556.png')}}"/>
                <p>银行卡识别</p>
                <span>文字内容介绍文字内容介绍</span>
            </li>
            <li>
                <img src="{{asset('images/onlines_557.png')}}"/>
                <p>身份证识别</p>
                <span>文字内容介绍文字内容介绍</span>
            </li>
            <li>
                <img src="{{asset('images/onlines_558.png')}}"/>
                <p>营业执照识别</p>
                <span>文字内容介绍文字内容介绍</span>
            </li>
        </ul>
        <ul>
            <li>
                <img src="{{asset('images/onlines_223.jpg')}}"/>
                <p>行驶证/驾驶证识别</p>
                <span>文字内容介绍文字内容介绍</span>
            </li>
            <li>
                <img src="{{asset('images/onlines_21.png')}}"/>
                <p>表格文字识别</p>
                <span>文字内容介绍文字内容介绍</span>
            </li>
            <li>
                <img src="{{asset('images/onlines_2.png')}}"/>
                <p>手写文字识别</p>
                <span>文字内容介绍文字内容介绍</span>
            </li>
            <li>
                <img src="{{asset('images/onlines_22.png')}}"/>
                <p>更多请联系我们</p>
                <span>文字内容介绍文字内容介绍</span>
            </li>
        </ul>
    </div>
</div>
<div class="list_file">
    <ul>
        <li>
            <img src="{{asset('images/onlines_155.png')}}"/>
            <p>免费试用</p>
            <span>onlinedo所有在线服务都可以免费使用，支持5MB以内的文件。无任何水印，并支待全线浏览器。</span>
        </li>
        <li>
            <img src="{{asset('images/onlines_55.png')}}"/>
            <p>免费试用</p>
            <span>onlinedo所有在线服务安装任何软件及插件，可在网页直接操作使用。</span>
        </li>
        <li>
            <img src="{{asset('images/onlines_5525.png')}}"/>
            <p>100%安全</p>
            <span>onlinedo承诺，你上传的文件我们不会查看、备份或分享，所有的文件都会在转换及使用结束后目动立即删除。</span>
        </li>
    </ul>
</div>
@extends('web.layouts.footer')