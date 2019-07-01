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
            <li class="on" data-type="1"><a href="#">通用识别</a></li>
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
                        <a href="#">首页</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="#">文字在线识别</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="#" class="name">通用识别</a>
                    </li>
                </ul>
            </div>
        </div>
        <img src="images/line_03.jpg" class="line" />
        <div class="src">
            <img src="images/icons_03.jpg"/>
            <div class="url">
                <div class="url_box">
                    <input type="text" placeholder="请输入网络图片URL" name="" id="" value="" />
                    <div class="jc"><a href="#">检测</a></div>
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
                        <a href="#">首页</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="#">文字在线识别</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="#" class="name">身份证识别</a>
                    </li>
                </ul>
            </div>
        </div>
        <img src="images/line_03.jpg" class="line" />
        <div class="src">
            <img src="images/icons_03.jpg"/>
            <div class="url">
                <div class="url_box">
                    <input type="text" placeholder="请输入网络图片URL" name="" id="" value="" />
                    <div class="jc"><a href="#">检测</a></div>
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
                        <a href="#">首页</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="#">文字在线识别</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="#" class="name">行驶证</a>
                    </li>
                </ul>
            </div>
        </div>
        <img src="images/line_03.jpg" class="line" />
        <div class="src">
            <img src="images/icons_03.jpg"/>
            <div class="url">
                <div class="url_box">
                    <input type="text" placeholder="请输入网络图片URL" name="" id="" value="" />
                    <div class="jc"><a href="#">检测</a></div>
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
                        <a href="#">首页</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="#">文字在线识别</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="#" class="name">驾驶证</a>
                    </li>
                </ul>
            </div>
        </div>
        <img src="images/line_03.jpg" class="line" />
        <div class="src">
            <img src="images/icons_03.jpg"/>
            <div class="url">
                <div class="url_box">
                    <input type="text" placeholder="请输入网络图片URL" name="" id="" value="" />
                    <div class="jc"><a href="#">检测</a></div>
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
                        <a href="#">首页</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="#">文字在线识别</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="#" class="name">营业执照</a>
                    </li>
                </ul>
            </div>
        </div>
        <img src="images/line_03.jpg" class="line" />
        <div class="src">
            <img src="images/icons_03.jpg"/>
            <div class="url">
                <div class="url_box">
                    <input type="text" placeholder="请输入网络图片URL" name="" id="" value="" />
                    <div class="jc"><a href="#">检测</a></div>
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
                        <a href="#">首页</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="#">文字在线识别</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="#" class="name">表格文字识别</a>
                    </li>
                </ul>
            </div>
        </div>
        <img src="images/line_03.jpg" class="line" />
        <div class="src">
            <img src="images/icons_03.jpg"/>
            <div class="url">
                <div class="url_box">
                    <input type="text" placeholder="请输入网络图片URL" name="" id="" value="" />
                    <div class="jc"><a href="#">检测</a></div>
                    <p>或</p>
                    <div class="jcs"><div class="upload" >本地上传</div></div>
                </div>
                <span>图片文件类型支持jpg、png、jpeg、bmp、图片大小不超过2M。</span>
            </div>
        </div>
        <div class="jgs">
            <h2>识别结果</h2>
            <ul>
                <li>号牌号码：京AA5599</li>
                <li>品牌型号：讴歌牌GHA7150JAD5B</li>
                <li>车辆类型：小型轿车</li>
                <li>车辆识别代号：HHGHH555778802669</li>
                <li>所有人：王京</li>
                <li>发动机号码：1122444</li>
                <li>住址：北京市石景山区</li>
                <li>注册日期：20180614</li>
                <li>使用性质：非营运</li>
                <li>发证日期：20180614</li>
            </ul>
            <div class="copy">复制</div>
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
                        <a href="#">首页</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="#">文字在线识别</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="#" class="name">手写文字识别</a>
                    </li>
                </ul>
            </div>
        </div>
        <img src="images/line_03.jpg" class="line" />
        <div class="src">
            <img src="images/icons_03.jpg"/>
            <div class="url">
                <div class="url_box">
                    <input type="text" placeholder="请输入网络图片URL" name="" id="" value="" />
                    <div class="jc"><a href="#">检测</a></div>
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
                        <a href="#">首页</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="#">文字在线识别</a>
                    </li>
                    <li>></li>
                    <li>
                        <a href="#" class="name">银行卡识别</a>
                    </li>
                </ul>
            </div>
        </div>
        <img src="images/line_03.jpg" class="line" />
        <div class="src">
            <img src="images/icons_03.jpg"/>
            <div class="url">
                <div class="url_box">
                    <input type="text" placeholder="请输入网络图片URL" name="" id="" value="" />
                    <div class="jc"><a href="#">检测</a></div>
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
@extends('web.layouts.footer')
<script type="text/javascript" src="{{asset('js/home/layer.js')}}" ></script>
<script>

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
    uploader.on( 'startUpload', function( file ) {

        uploader.makeThumb( file, function( error, ret ) {
            if ( error ) {
                $li.text('预览错误');
            } else {
                $li.append('&lt;img alt="" src="' + ret + '" />');
            }
        });
    });


    //上传成功
    uploader.on( 'uploadSuccess', function( file,response ) {

        switch (parseInt(response["type"])) {
            case 1:
                var res = response.data.words_result,str="";
                $.each(res,function (index,item) {
                    str+="<li>"+item.words+"</li>";
                });
                $(".currency").html(str);
                break;
            case 2:
                var res = response.data.words_result,str="";
                $.each(res,function (index,item) {
                    str+="<li>"+index+"："+item.words+"</li>";
                });
                $(".id_cart").html(str);
                break;
            case 3:
                var res = response.data.words_result,str="";
                $.each(res,function (index,item) {
                    str+="<li>"+index+"："+item.words+"</li>";
                });
                $(".driving").html(str);
                break;
            case 4:
                var res = response.data.words_result,str="";
                $.each(res,function (index,item) {
                    str+="<li>"+index+"："+item.words+"</li>";
                });
                $(".driver").html(str);
                break;
            case 5:
                var res = response.data.words_result,str="";
                $.each(res,function (index,item) {
                    str+="<li>"+index+"："+item.words+"</li>";
                });
                $(".business").html(str);

                break;
            case 6:

                break;
            case 7:
                var res = response.data.words_result,str="";
                $.each(res,function (index,item) {
                    str+="<li>"+item.words+"</li>";
                });
                $(".handwriting").html(str);
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

</script>

