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

            <a href="{{ route('voiceCompose') }}"> <div class="fr">
                <img src="{{asset('images/onlines_03.png')}}"/>
                <p>在线语音合成</p>
                <span>将文本转化成真人语音的需求，提供多种音色选择，支持自定义音量、语速，为您提供个性化音色定制服务，让发音更自然、更专业、更符合场景需求。</span>
                </div></a>

            <a href="{{ route('voiceToText') }}"><div class="fl">
                    <img src="{{asset('images/onlines_551.png')}}"/>
                    <p>语音转文字</p>
                    <span>在线语音转文字，可以直接把语言文件转换为语音文件，支持主流的音频格式，将音频文件中的语音转换为文字内容。</span>
                </div></a>
        </div>
    </div>
    <div class="image_ai">
        <div class="tong">
            <p>图像AI处理</p>
            <span>Image AI Processing</span>
        </div>
        <ul>
            <a href="{{ route('imageHandle') }}">
            <li>
                <img src="{{asset('images/onlines_553.png')}}"/>
                <p>图像去雾</p>
                <span>对浓雾天气下拍摄，导致细节无法辨认的图像进行去雾处理，还原更清晰真实的图像</span>
            </li>
            </a>
            <a href="{{ route('imageHandle') }}">
            <li>
                <img src="{{asset('images/onlines_552.png')}}"/>
                <p>图像无损放大</p>
                <span>将图像在长宽方向各放大两倍，保持图像质量无损</span>
            </li>
            </a>
            <a href="{{ route('imageHandle') }}">
            <li>
                <img src="{{asset('images/onlines_554.png')}}"/>
                <p>黑白图片上色</p>
                <span>智能识别黑白图像内容并填充色彩，使黑白图像变得鲜活</span>
            </li>
            </a>
          <a href="{{ route('imageHandle') }}">
            <li>
                <img src="{{asset('images/onlines_555.png')}}"/>
                <p>拉伸图像修复</p>
                <span>自动识别过度拉伸的图像，将图像内容恢复成正常比例</span>
            </li>
          </a>
        </ul>
    </div>
    <div class="image_ai">
        <div class="tong">
            <p>文字光学识别</p>
            <span>Character Optical Recognition</span>
        </div>
        <ul>
         <a href="{{ route('textDiscern') }}">
            <li>
                <img src="{{asset('images/onlines_559.png')}}"/>
                <p>常用识别</p>
                <span>对手写字、照片等内容进行智能识别为可编辑内容</span>
            </li>
         </a>
          <a href="{{ route('textDiscern') }}">
            <li>
                <img src="{{asset('images/onlines_556.png')}}"/>
                <p>银行卡识别</p>
                <span>对银行卡内容进行智能精准识别,内容可复制</span>
            </li>
          </a>
          <a href="{{ route('textDiscern') }}">
            <li>
                <img src="{{asset('images/onlines_557.png')}}"/>
                <p>身份证识别</p>
                <span>对居民身份证进行智能精准识别,内容可复制</span>
            </li>
          </a>
         <a href="{{ route('textDiscern') }}">
            <li>
                <img src="{{asset('images/onlines_558.png')}}"/>
                <p>营业执照识别</p>
                <span>对营业执照进行智能精准识别,内容可复制</span>
            </li>
          </a>
        </ul>
        <ul>
            <a href="{{ route('textDiscern') }}">
                <li>
                    <img src="{{asset('images/onlines_223.jpg')}}"/>
                    <p>行驶证/驾驶证识别</p>
                    <span>对行/驾驶证进行智能精准识别,内容可复制</span>
                </li>
            </a>
                <a href="{{ route('textDiscern') }}">
                    <li>
                        <img src="{{asset('images/onlines_21.png')}}"/>
                        <p>表格文字识别</p>
                        <span>对表格图片进行智能精准识别,内容以Excel形式进行输出</span>
                    </li>
                </a>
             <a href="{{ route('textDiscern') }}">
                <li>
                    <img src="{{asset('images/onlines_2.png')}}"/>
                    <p>手写文字识别</p>
                    <span>对手写文字进行智能精准识别,内容可复制</span>
                </li>
             </a>
                 <a href="{{ route('service') }}">
                    <li>
                        <img src="{{asset('images/onlines_22.png')}}"/>
                        <p>更多请联系我们</p>
                        <span>更多需求请通过qq或者联系方式联系我们</span>
                    </li>
                 </a>
        </ul>
    </div>
</div>
<div class="list_file">
    <ul>
        <li>
            <img src="{{asset('images/onlines_155.png')}}"/>
            <p>免费试用</p>
            <span>在线AI.cn所有的服务均是免费试用，无任何水印限制。</span>
        </li>
        <li>
            <img src="{{asset('images/onlines_55.png')}}"/>
            <p>自动设置</p>
            <span>在线AI.cn所有的服务只需上传您需要处理的信息，系统将自动进行相应设置。</span>
        </li>
        <li>
            <img src="{{asset('images/onlines_5525.png')}}"/>
            <p>隐私安全</p>
            <span>您上传于zaixianAI.cn的信息，均在10分钟内自动清除服务器缓存，100%尊重您的隐私。</span>
        </li>
    </ul>
</div>
@extends('web.layouts.footer')