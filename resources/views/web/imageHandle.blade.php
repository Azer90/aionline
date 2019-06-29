@include('web.layouts.header')

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
        <h2>图像处理</h2>
        <ul>
            <li class="on"><a href="#">图像去雾</a></li>
            <li><a href="#">图像无损放大</a></li>
            <li><a href="#">黑白图片上色</a></li>
            <li><a href="#">拉伸图片修复</a></li>
        </ul>
    </div>
    <div class="main_right">
        <div class="main_tops1">
            <div class="fl">图像去雾</div>
            <div class="fr">
                <img src="images/icon_11.png" />
                <ul>
                    <li>当前位置:</li>
                    <li>
                        <a href="#">首页</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="#">图像处理</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="#">图像去雾</a>
                    </li>
                </ul>
            </div>
        </div>
        <img src="images/line_03.jpg" class="line" />
        <div class="src" >
            <img src="images/imgs_16.jpg" class="imgs" />
            <div class="src_box" id="panel" ><div id="dragIcon"></div></div>
            <div class="url">
                <div class="url_box">
                    <input type="text" placeholder="请输入网络图片URL" name="" id="" value="" />
                    <div class="jc">
                        <a href="#">检测</a>
                    </div>
                    <p>或</p>
                    <div class="jcs">
                        <div href="#" id="upload">本地上传</div>
                    </div>
                </div>
                <span>图片文件类型支持jpg、png、jpeg、bmp、图片大小不超过2M。</span>
            </div>
            <div class="youhua fl">优化后</div>
            <div class="youhua fr">优化前</div>
        </div>
        {{--<div class="slide_img">--}}
            {{--<img src="images/imgs_13.jpg" class="on" />--}}
            {{--<img src="images/imgs_07.jpg" />--}}
            {{--<img src="images/imgs_09.jpg" />--}}
            {{--<img src="images/imgs_11.jpg" />--}}
            {{--<img src="images/imgs_13.jpg" />--}}
        {{--</div>--}}
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg" />
                <p>图片去雾 功能介绍</p>
            </div>
            <span>点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg" />
                <p>图片去雾 操作指南</p>
            </div>
            <span>点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
        </div>
        <div class="tiujian">
            <div class="t_top">
                <div>
                    <p>推荐阅读</p>
                    <a href="#"><img src="images/more_03.jpg" /></a>
                </div>
                <img src="images/line_03.jpg" class="line"/>
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
@extends('web.layouts.footer')
@section('script')
    <script>
        window.onload = function () {
            // 1. 获取两个大小div
            var oPanel = document.getElementById('panel');
            var oDragIcon = document.getElementById('dragIcon');
            // 定义4个变量
            var disX = 0;//鼠标按下时光标的X值

            var disW = 0; //拖拽前div的宽

            //3. 给小div加点击事件
            oDragIcon.onmousedown = function (ev) {
                var ev = ev || window.event;
                disX = ev.clientX; // 获取鼠标按下时光标x的值
                disW = oPanel.offsetWidth; // 获取拖拽前div的宽
                document.onmousemove = function (ev) {
                    var ev = ev || window.event;
                    //拖拽时为了对宽和高 限制一下范围，定义两个变量
                    var W = disX + disW - ev.clientX;

                    if(W<50){
                        W = 50;
                    }
                    if(W>900){
                        W =900;
                    }

                    oPanel.style.width =W +'px';// 拖拽后物体的宽

                }
                document.onmouseup = function () {
                    document.onmousemove = null;
                    document.onmouseup = null;
                }
            }
        }

        var uploader = WebUploader.create({
            swf: 'swf/Uploader.swf',
            server: host+'/api/voice',     // 服务端地址
            auto:true,
            pick: '#upload',         // 指定选择文件的按钮容器
            resize: false,
            chunked: true,           //开启分片上传
            chunkSize: 1024*1024*2,  //每一片的大小
            chunkRetry: 100,         // 如果遇到网络错误,重新上传次数
            threads: 3,              //上传并发数。允许同时最大上传进程数。
            fileSizeLimit:20*1024*1024,
            // 只允许选择图片文件。
            accept: {
                //     title: 'Images',
                //     extensions: 'MP3，MAV，M4A，WMA，AAC，FLAC，AC3，M4R，APE，OGG，WAV',
                mimeTypes: 'audio/*'
            }
        });

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



        });
    </script>
@endsection