@include('web.layouts.header')
<style>
    .webuploader-pick{
        padding: 0;!important;
        width: 100%;
        background: #0F6FE0;
    }
    .upload > div{
        width: 100%;
        height: 100%;
    }
    .hide{
        display: none;
    }
    .download{
        width: 110px;
        height: 40px;
        line-height: 40px;
        background: #0F6FE0;
        font-size: 20px;
        color: #fff;
        text-align: center;
        margin-top: .1rem;
    }
    .qr{
        display: none;
        width: 100%;
        position: absolute;
        top:0;
        left: 0;
        z-index: 10;
        background-color: rgba(0, 0, 0, .4);
    }
    .qr div{
        margin: 40% 50%;
        transform: translateX(-50%);
        /*transform: translateY(-50%);*/
        width: 200px;
    }
    .qr img{
        width: 200px;
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
        <h2>图像处理</h2>
        <ul>
            <li class="on" data-type="1"><a href="#">图像去雾</a></li>
            <li data-type="2"><a href="#">图像无损放大</a></li>
            <li data-type="3"><a href="#">黑白图片上色</a></li>
            <li data-type="4"><a href="#">拉伸图片修复</a></li>
        </ul>
    </div>
    <div>
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
                <div class="src_box panel" ><div class="dragIcon"></div></div>
                <div class="url">
                    <div class="url_box">
                        <input type="text" placeholder="请输入网络图片URL" name="" id="" value="" />
                        <div class="jc">
                            <a href="#">检测</a>
                        </div>
                        <p>或</p>
                        <div class="jcs">
                            <div href="#" class="upload">本地上传</div>
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
                <div class="download" style="cursor: pointer">点击下载</div>
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
        <div class="main_right hide">
            <div class="main_tops1">
                <div class="fl">图像无损放大</div>
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
                            <a href="#">图像无损放大</a>
                        </li>
                    </ul>
                </div>
            </div>
            <img src="images/line_03.jpg" class="line" />
            <div class="src" >
                <img src="images/imgs_16.jpg" class="imgs" />
                <div class="src_box panel" ><div class="dragIcon"></div></div>
                <div class="url">
                    <div class="url_box">
                        <input type="text" placeholder="请输入网络图片URL" name="" id="" value="" />
                        <div class="jc">
                            <a href="#">检测</a>
                        </div>
                        <p>或</p>
                        <div class="jcs">
                            <div href="#" class="upload">本地上传</div>
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
                    <p>图像无损放大 功能介绍</p>
                </div>
                <span>点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
            </div>
            <div class="item_dis">
                <div>
                    <img src="images/icons_07.jpg" />
                    <p>图像无损放大 操作指南</p>
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
        <div class="main_right hide">
            <div class="main_tops1">
                <div class="fl">黑白图片上色</div>
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
                            <a href="#">黑白图片上色</a>
                        </li>
                    </ul>
                </div>
            </div>
            <img src="images/line_03.jpg" class="line" />
            <div class="src" >
                <img src="images/imgs_16.jpg" class="imgs" />
                <div class="src_box panel" ><div class="dragIcon"></div></div>
                <div class="url">
                    <div class="url_box">
                        <input type="text" placeholder="请输入网络图片URL" name="" id="" value="" />
                        <div class="jc">
                            <a href="#">检测</a>
                        </div>
                        <p>或</p>
                        <div class="jcs">
                            <div href="#" class="upload">本地上传</div>
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
                    <p>黑白图片上色 功能介绍</p>
                </div>
                <span>点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
            </div>
            <div class="item_dis">
                <div>
                    <img src="images/icons_07.jpg" />
                    <p>黑白图片上色 操作指南</p>
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
        <div class="main_right hide">
        <div class="main_tops1">
            <div class="fl">拉伸图片修复</div>
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
                        <a href="#">拉伸图片修复</a>
                    </li>
                </ul>
            </div>
        </div>
        <img src="images/line_03.jpg" class="line" />
        <div class="src" >
            <img src="images/imgs_16.jpg" class="imgs" />
            <div class="src_box panel"  ><div class="dragIcon"></div></div>
            <div class="url">
                <div class="url_box">
                    <input type="text" placeholder="请输入网络图片URL" name="" id="" value="" />
                    <div class="jc">
                        <a href="#">检测</a>
                    </div>
                    <p>或</p>
                    <div class="jcs">
                        <div href="#" class="upload">本地上传</div>
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
                <p>拉伸图片修复 功能介绍</p>
            </div>
            <span>点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg" />
                <p>拉伸图片修复 操作指南</p>
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
</div>
<div class="qr">
    <div>
        <p>扫描二维码关注公众号后即可下载</p>
        <img src="" alt="">
    </div>
</div>
@extends('web.layouts.footer')
@section('script')
    <script>
        var on_index = 0;

        $(".main_left li").on("click",function () {
            var type = $(this).data("type");
            uploader.options.formData.handle = type;
            $(this).attr("class","on").siblings().removeClass("on");
            $(".main_right:eq("+$(this).index()+")").show().siblings().hide();
            on_index = $(this).index();

            drag(on_index);
        });
        window.onload = function () {
            drag(on_index);
        }

        var uploader = WebUploader.create({
            swf: 'swf/Uploader.swf',
            server: host+'/api/wordUpload',     // 服务端地址
            auto:true,
            pick: '.upload',         // 指定选择文件的按钮容器
            resize: false,
            chunked: true,           //开启分片上传
            chunkSize: 1024*1024*2,  //每一片的大小
            chunkRetry: 100,         // 如果遇到网络错误,重新上传次数
            threads: 3,              //上传并发数。允许同时最大上传进程数。
            fileSizeLimit:20*1024*1024,
            duplicate :true,
            formData:{handle:1},
            // 只允许选择图片文件。
            accept: {
                //     title: 'Images',
                //     extensions: 'MP3，MAV，M4A，WMA，AAC，FLAC，AC3，M4R，APE，OGG，WAV',
                mimeTypes: 'image/*'
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
        var user_id="";
        var file_name="";
        uploader.on( 'startUpload', function( ) {
            index = layer.load(1);
        });

        uploader.on('uploadSuccess',function (file,response) {
            console.log(response);
            layer.close(index);
            if(response.code==1){
                layer.msg("处理成功")
                file_name = response.data
            }else{
                layer.msg("处理失败")
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
                    if(res.download_code==1&&qrcode_url==""){
                        location.href=host+"/api/word_download?file_name="+file_name;
                    }else{
                        $(".qr img").attr("src",res.qrcode_url);
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
                            location.href=host+"/api/word_download?file_name="+file_name;

                        }else{
                            if(con<100){
                                polling();
                            }
                        }
                    }
                })
            },500)
        }
        //拖动
        function drag(on_index) {
            // 1. 获取两个大小div
            var oPanel = document.getElementsByClassName('panel')[on_index];
            var oDragIcon = document.getElementsByClassName('dragIcon')[on_index];

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
    </script>
@endsection