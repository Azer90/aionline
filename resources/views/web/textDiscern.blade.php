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
    .show{
        display: block;
    }
    .hide{
        display: none;
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
    .qr img{
        margin: 50% 50%;
        transform: translateX(-50%);
        /*transform: translateY(-50%);*/
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
        <h2>文字在线识别</h2>
        <ul>
            <li class="on" data-type="1"><a href="javascript:">通用识别</a></li>
            <li data-type="2"><a href="javascript:">身份证识别</a></li>
            <li data-type="3"><a href="javascript:">行驶证</a></li>
            <li data-type="4"><a href="javascript:">驾驶证</a></li>
            <li data-type="5"><a href="javascript:">营业执照</a></li>
            <li data-type="6"><a href="javascript:">表格文字识别</a></li>
            <li data-type="7"><a href="javascript:">手写文字识别</a></li>
            <li data-type="8"><a href="javascript:">银行卡识别</a></li>
        </ul>
    </div>
    <div>

    <div class="main_right show">
        <div class="main_tops1">
            <div class="fl name">通用识别</div>
            <div class="fr">
                <img src="images/icon_11.png" />
                <ul>
                    <li>当前位置:</li>
                    <li>
                        <a href="javascript:">首页</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="javascript:">文字在线识别</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="javascript:" class="name">通用识别</a>
                    </li>
                </ul>
            </div>
        </div>
        <img src="images/line_03.jpg" class="line" />
        <div class="src">
            <img class="currency_img" src="images/icons_03.jpg"/>
            <div class="url">
                <div class="url_box">
                    <input type="text" class="web_url" placeholder="请输入网络图片URL" name="" id="" value="" />
                    <div class="jc"><a class="sub_test" href="javascript:">检测</a></div>
                    <p>或</p>
                    <div class="jcs"><div class="upload" >本地上传</div></div>
                </div>
                <span>图片文件类型支持jpg、png、jpeg、bmp、图片大小不超过2M。</span>
            </div>
        </div>
        <div class="jgs">
            <h2>识别结果</h2>
            <ul class="currency">

            </ul>
            <div class="copy">复制</div>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="introduce_title">通用识别 功能介绍</p>
            </div>
            <span class="introduce_content">点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="guide_title">通用识别 操作指南</p>
            </div>
            <span class="guide_content">点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
        </div>
    </div>
    <div class="main_right hide">
        <div class="main_tops1">
            <div class="fl name">身份证识别</div>
            <div class="fr">
                <img src="images/icon_11.png" />
                <ul>
                    <li>当前位置:</li>
                    <li>
                        <a href="javascript:">首页</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="javascript:">文字在线识别</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="javascript:" class="name">身份证识别</a>
                    </li>
                </ul>
            </div>
        </div>
        <img src="images/line_03.jpg" class="line" />
        <div class="src">
            <img class="cart_img" src="images/icons_03.jpg"/>
            <div class="url">
                <div class="url_box">
                    <input type="text" class="web_url" placeholder="请输入网络图片URL" name="" id="" value="" />
                    <div class="jc"><a class="sub_test" href="javascript:">检测</a></div>
                    <p>或</p>
                    <div class="jcs"><div class="upload" >本地上传</div></div>
                </div>
                <span>图片文件类型支持jpg、png、jpeg、bmp、图片大小不超过2M。</span>
            </div>
        </div>
        <div class="jgs">
            <h2>识别结果</h2>
            <ul class="id_cart">

            </ul>
            <div class="copy">复制</div>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="introduce_title">身份证识别 功能介绍</p>
            </div>
            <span class="introduce_content">点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="guide_title">身份证识别 操作指南</p>
            </div>
            <span class="guide_content">点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
        </div>
    </div>
    <div class="main_right hide">
        <div class="main_tops1">
            <div class="fl name">行驶证</div>
            <div class="fr">
                <img src="images/icon_11.png" />
                <ul>
                    <li>当前位置:</li>
                    <li>
                        <a href="javascript:">首页</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="javascript:">文字在线识别</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="javascript:" class="name">行驶证</a>
                    </li>
                </ul>
            </div>
        </div>
        <img src="images/line_03.jpg" class="line" />
        <div class="src">
            <img class="travel_img" src="images/icons_03.jpg"/>
            <div class="url">
                <div class="url_box">
                    <input type="text" class="web_url" placeholder="请输入网络图片URL" name="" id="" value="" />
                    <div class="jc"><a href="javascript:" class="sub_test">检测</a></div>
                    <p>或</p>
                    <div class="jcs"><div class="upload" >本地上传</div></div>
                </div>
                <span>图片文件类型支持jpg、png、jpeg、bmp、图片大小不超过2M。</span>
            </div>
        </div>
        <div class="jgs">
            <h2>识别结果</h2>
            <ul class="driving">

            </ul>
            <div class="copy">复制</div>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="introduce_title">行驶证 功能介绍</p>
            </div>
            <span class="introduce_content">点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="guide_title">行驶证 操作指南</p>
            </div>
            <span class="guide_content">点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
        </div>
    </div>
    <div class="main_right hide">
        <div class="main_tops1">
            <div class="fl name">驾驶证</div>
            <div class="fr">
                <img src="images/icon_11.png" />
                <ul>
                    <li>当前位置:</li>
                    <li>
                        <a href="javascript:">首页</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="javascript:">文字在线识别</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="javascript:" class="name">驾驶证</a>
                    </li>
                </ul>
            </div>
        </div>
        <img src="images/line_03.jpg" class="line" />
        <div class="src">
            <img class="driver_img" src="images/icons_03.jpg"/>
            <div class="url">
                <div class="url_box">
                    <input type="text" class="web_url" placeholder="请输入网络图片URL" name="" id="" value="" />
                    <div class="jc"><a class="sub_test" href="javascript:">检测</a></div>
                    <p>或</p>
                    <div class="jcs"><div class="upload" >本地上传</div></div>
                </div>
                <span>图片文件类型支持jpg、png、jpeg、bmp、图片大小不超过2M。</span>
            </div>
        </div>
        <div class="jgs">
            <h2>识别结果</h2>
            <ul class="driver">

            </ul>
            <div class="copy">复制</div>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="introduce_title">驾驶证 功能介绍</p>
            </div>
            <span class="introduce_content">点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="guide_title">驾驶证 操作指南</p>
            </div>
            <span class="guide_content">点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
        </div>
    </div>
    <div class="main_right hide">
        <div class="main_tops1">
            <div class="fl name">营业执照</div>
            <div class="fr">
                <img src="images/icon_11.png" />
                <ul>
                    <li>当前位置:</li>
                    <li>
                        <a href="javascript:">首页</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="javascript:">文字在线识别</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="javascript:" class="name">营业执照</a>
                    </li>
                </ul>
            </div>
        </div>
        <img src="images/line_03.jpg" class="line" />
        <div class="src">
            <img class="business_img" src="images/icons_03.jpg"/>
            <div class="url">
                <div class="url_box">
                    <input type="text" class="web_url" placeholder="请输入网络图片URL" name="" id="" value="" />
                    <div class="jc"><a class="sub_test" href="javascript:">检测</a></div>
                    <p>或</p>
                    <div class="jcs"><div class="upload" >本地上传</div></div>
                </div>
                <span>图片文件类型支持jpg、png、jpeg、bmp、图片大小不超过2M。</span>
            </div>
        </div>
        <div class="jgs">
            <h2>识别结果</h2>
            <ul class="business">

            </ul>
            <div class="copy">复制</div>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="introduce_title">营业执照 功能介绍</p>
            </div>
            <span class="introduce_content">点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="guide_title">营业执照 操作指南</p>
            </div>
            <span class="guide_content">点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
        </div>
    </div>
    <div class="main_right hide">
        <div class="main_tops1">
            <div class="fl name">表格文字识别</div>
            <div class="fr">
                <img src="images/icon_11.png" />
                <ul>
                    <li>当前位置:</li>
                    <li>
                        <a href="javascript:">首页</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="javascript:">文字在线识别</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="javascript:" class="name">表格文字识别</a>
                    </li>
                </ul>
            </div>
        </div>
        <img src="images/line_03.jpg" class="line" />
        <div class="src">
            <img class="table_img" src="images/icons_03.jpg"/>
            <div class="url">
                <div class="url_box">
                    <input type="text" class="web_url" placeholder="请输入网络图片URL" name="" id="" value="" />
                    <div class="jc"><a class="sub_test" href="javascript:">检测</a></div>
                    <p>或</p>
                    <div class="jcs"><div class="upload" >本地上传</div></div>
                </div>
                <span>图片文件类型支持jpg、png、jpeg、bmp、图片大小不超过2M。</span>
            </div>
        </div>
        <div class="jgs">
            <h2>识别结果</h2>
            <ul class="table_ul">

            </ul>
            <div class="copy" style='margin-right:20px'>点击下载</div>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="introduce_title">表格文字识别 功能介绍</p>
            </div>
            <span class="introduce_content">点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="guide_title">表格文字识别 操作指南</p>
            </div>
            <span class="guide_content">点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
        </div>
    </div>
    <div class="main_right hide">
        <div class="main_tops1">
            <div class="fl name">手写文字识别</div>
            <div class="fr">
                <img src="images/icon_11.png" />
                <ul>
                    <li>当前位置:</li>
                    <li>
                        <a href="javascript:">首页</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="javascript:">文字在线识别</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="javascript:" class="name">手写文字识别</a>
                    </li>
                </ul>
            </div>
        </div>
        <img src="images/line_03.jpg" class="line" />
        <div class="src">
            <img class="hand_img" src="images/icons_03.jpg"/>
            <div class="url">
                <div class="url_box">
                    <input type="text" class="web_url" placeholder="请输入网络图片URL" name="" id="" value="" />
                    <div class="jc"><a class="sub_test" href="javascript:">检测</a></div>
                    <p>或</p>
                    <div class="jcs"><div class="upload" >本地上传</div></div>
                </div>
                <span>图片文件类型支持jpg、png、jpeg、bmp、图片大小不超过2M。</span>
            </div>
        </div>
        <div class="jgs">
            <h2>识别结果</h2>
            <ul class="handwriting">

            </ul>
            <div class="copy">复制</div>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="introduce_title">手写文字识别 功能介绍</p>
            </div>
            <span class="introduce_content">点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="guide_title">手写文字识别 操作指南</p>
            </div>
            <span class="guide_content">点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
        </div>
    </div>
    <div class="main_right hide">
        <div class="main_tops1">
            <div class="fl name">银行卡识别</div>
            <div class="fr">
                <img src="images/icon_11.png" />
                <ul>
                    <li>当前位置:</li>
                    <li>
                        <a href="javascript:">首页</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="javascript:">文字在线识别</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="javascript:" class="name">银行卡识别</a>
                    </li>
                </ul>
            </div>
        </div>
        <img src="images/line_03.jpg" class="line" />
        <div class="src">
            <img class="bank_img" src="images/icons_03.jpg"/>
            <div class="url">
                <div class="url_box">
                    <input type="text" class="web_url" placeholder="请输入网络图片URL" name="" id="" value="" />
                    <div class="jc"><a class="sub_test" href="javascript:">检测</a></div>
                    <p>或</p>
                    <div class="jcs"><div class="upload" >本地上传</div></div>
                </div>
                <span>图片文件类型支持jpg、png、jpeg、bmp、图片大小不超过2M。</span>
            </div>
        </div>
        <div class="jgs">
            <h2>识别结果</h2>
            <ul class="bank">

            </ul>
            <div class="copy">复制</div>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="introduce_title">银行卡识别 功能介绍</p>
            </div>
            <span class="introduce_content">点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="guide_title">银行卡识别 操作指南</p>
            </div>
            <span class="guide_content">点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
        </div>
    </div>
    </div>
</div>
<div class="qr">
    <img src="" alt="">
</div>
@extends('web.layouts.footer')
<script type="text/javascript" src="{{asset('js/home/layer.js')}}" ></script>
<script>
    var file_name ="",user_id="";
    var uploader = WebUploader.create({
        swf: 'swf/Uploader.swf',
        server: host+'/api/word',     // 服务端地址
        auto:true,
        // pick: '#'+pick,         // 指定选择文件的按钮容器
        pick: '.upload',         // 指定选择文件的按钮容器
        resize: false,
        chunked: true,           //开启分片上传
        chunkSize: 1024*1024*2,  //每一片的大小
        chunkRetry: 100,         // 如果遇到网络错误,重新上传次数
        threads: 3,              //上传并发数。允许同时最大上传进程数。
        fileSingleSizeLimit:10*1024*1024,
        duplicate :true,
        formData:{
            dis_type:1
        },
        // 只允许选择图片文件。
        accept: {
            // title: 'Images',
            extensions: 'jpg,png,bmp',
            mimeTypes: 'image/*'
        }
    });

    /**
     * 验证文件格式以及文件大小
     */
    uploader.on("error", function (type) {
        alert(type);
        if (type == "Q_TYPE_DENIED") {
            layer.msg("请上传图片文件");
        } else if (type == "Q_EXCEED_SIZE_LIMIT") {
            layer.msg("文件大小不能超过2M");
        }else {
            layer.msg("上传出错！请检查后重新上传！错误代码"+type);
        }
    });
    //上传进度
    uploader.on( 'uploadProgress', function( file,percentage  ) {});
    uploader.on( 'fileQueued', function( file ) {
        index = layer.load(1);
        uploader.makeThumb( file, function( error, ret ) {
            var type = uploader.options.formData.dis_type;
            if ( error ) {
                $li.text('预览错误');
            } else {
                switch (type) {
                    case 1:
                        $li = $(".currency_img");
                        break;
                    case 2:
                        $li = $(".cart_img");
                        break;
                    case 3:
                        $li = $(".travel_img");
                        break;
                    case 4:
                        $li = $(".driver_img");
                        break;
                    case 5:
                        $li = $(".business_img");
                        break;
                    case 6:
                        $li = $(".table_img");
                        break;
                    case 7:
                        $li = $(".hand_img");
                        break;
                    case 8:
                        $li = $(".bank_img");
                        break;
                    default:
                        $li = "";
                }
                $li.attr("src",ret).css({"width":"100%","height":"100%"});
            }
        });
    });

    //上传成功
    uploader.on( 'uploadSuccess', function( file,response ) {
        layer.close(index);
        switch (parseInt(response["type"])) {
            case 1:
                var res = response.data.words_result,str="";
                $.each(res,function (index,item) {
                    str+="<li>"+item.words+"</li>";
                });
                $(".currency").html(str);
                file_name =  response.data.file_name
                break;
            case 2:
                var res = response.data.words_result,str="";
                $.each(res,function (index,item) {
                    str+="<li>"+index+"："+item.words+"</li>";
                });
                $(".id_cart").html(str);
                file_name =  response.data.file_name
                break;
            case 3:
                var res = response.data.words_result,str="";
                $.each(res,function (index,item) {
                    str+="<li>"+index+"："+item.words+"</li>";
                });
                $(".driving").html(str);
                file_name =  response.data.file_name
                break;
            case 4:
                var res = response.data.words_result,str="";
                $.each(res,function (index,item) {
                    str+="<li>"+index+"："+item.words+"</li>";
                });
                $(".driver").html(str);
                file_name =  response.data.file_name
                break;
            case 5:
                var res = response.data.words_result,str="";
                $.each(res,function (index,item) {
                    str+="<li>"+index+"："+item.words+"</li>";
                });
                $(".business").html(str);
                file_name =  response.data.file_name

                break;
            case 6:
                console.log(response);
                var str=response.message;
                $(".table_ul").html("表格识别成功");
                file_name =  response.data.file_name
                break;
            case 7:
                var res = response.data.words_result,str="";
                $.each(res,function (index,item) {
                    str+="<li>"+item.words+"</li>";
                });
                $(".handwriting").html(str);
                file_name =  response.data.file_name
                break;
            case 8:
                var res = response.data.result,str="";
                str +="<li>银行卡号："+res.bank_card_number+"</li>" +
                    "<li>银行名："+res.bank_name+"</li>";
                switch (res.bank_card_type) {
                    case 0:
                        str+="<li>银行卡类型：不能识别</li>";
                        break;
                    case 1:
                        str+="<li>银行卡类型：借记卡</li>";
                        break;
                    case 2:
                        str+="<li>银行卡类型： 信用卡</li>";
                        break;
                }
                $(".bank").html(str);
                file_name =  response.data.file_name
                break;
        }
    });

    /**
     * 选项卡切换
     */
    $(".main_left li").on("click",function () {

        var type = $(this).data("type");
        var name = $(this).children("a").text();
        $(this).attr("class","on").siblings().removeClass("on");
        uploader.options.formData.dis_type = type;
        $(".name").text(name);
        $(".main_right:eq("+$(this).index()+")").show().siblings().hide()
    })

    /**
     * 检测
     */
    $(".sub_test").on("click",function () {
        var value = $(this).parent().prev().val();
        var dis_type = uploader.options.formData.dis_type;
        var index="";
        $.ajax({
            url:host+"/api/webDis",
            dataType:"json",
            type:"post",
            data:{url:value},
            beforeSend:function(){
                index = layer.load(1);
                switch (dis_type) {
                    case 1:
                        $li = $(".currency_img");
                        break;
                    case 2:
                        $li = $(".cart_img");
                        break;
                    case 3:
                        $li = $(".travel_img");
                        break;
                    case 4:
                        $li = $(".driver_img");
                        break;
                    case 5:
                        $li = $(".business_img");
                        break;
                    case 6:
                        $li = $(".table_img");
                        break;
                    case 7:
                        $li = $(".hand_img");
                        break;
                    case 8:
                        $li = $(".bank_img");
                        break;
                    default:
                        $li = "";
                }
                $li.attr("src",value).css({"width":"100%","height":"100%"});
            },
            success:function (res) {
                layer.close(index);
                var result = res.words_result,str="";
                $.each(result,function (index,item) {
                    str+="<li>"+item.words+"</li>";
                });

                switch (dis_type) {
                    case 1:
                        curr_class = "currency";
                        break;
                    case 2:
                        curr_class = "id_cart";
                        break;
                    case 3:
                        curr_class = "driving";
                        break;
                    case 4:
                        curr_class = "driver";
                        break;
                    case 5:
                        curr_class = "business";
                        break;
                    case 6:
                        curr_class = "table_ul";
                        break;
                    case 7:
                        curr_class = "handwriting";
                        break;
                    case 8:
                        curr_class ="bank";
                        break;
                    default :
                        curr_class = "";
                }

                $("."+curr_class).html(str);

            }
        })
    })


    $(".copy").on("click",function () {

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
                url:host+"/api/download_check",
                type:"post",
                dataType: "json",
                data:{user_id:user_id},
                success:function (res) {
                    con++;
                    if(res.code==1){
                        location.href=host+"/api/word_download?file_name="+file_name;
                    }else{
                        if(con<100){
                            time;
                        }
                    }
                }
            })
        },100)
    }

</script>

