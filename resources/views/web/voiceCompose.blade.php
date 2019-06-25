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
        <h2>语音识别</h2>
        <ul>
            <li><a href="{{ route('voiceToText') }}">语音转文字</a></li>
            <li class="on"><a href="{{ route('voiceCompose') }}">在线语音合成</a></li>
        </ul>
    </div>
    <div class="main_right">
        <div class="main_tops1">
            <div class="fl">在线语音合成</div>
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
                        <a href="#">在线语音合成</a>
                    </li>
                </ul>
            </div>
        </div>
        <img src="images/line_03.jpg" class="line" />
        <textarea class="gem" name="" rows="" cols="">革命、移动互联网革命尚末落幕,智能革命又像头大象—样撞进人类的生活,激荡着整个世界</textarea>

        <div class="ge_ti">
            <p>体验版最多可输入<span>300</span>个字,超出部分合成将被截断</p>
        </div>
        <div class="ge_line"></div>
        <div class="slide_gem">
            <div class="slide_top">
                <div class="slide_navbar">
                    <ul>
                        <li class="on">通用场景</li>
                        <li>客服场景</li>
                        <li>声场景</li>
                        <li>英文场景</li>
                        <li>方言场景</li>
                        <li>预览版</li>
                    </ul>
                </div>
                <div class="fadines">
                    <div class="itemg">
                        <ul>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音A</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音B</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音C</p>
                            </li>
                            <li class="on"><img src="images/yuyin_07.png" />
                                <p>预览版声音D</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音E</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音F</p>
                            </li>
                        </ul>
                    </div>
                    <div class="itemg hide">
                        <ul>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音A1</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音B</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音C</p>
                            </li>
                            <li class="on"><img src="images/yuyin_07.png" />
                                <p>预览版声音D</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音E</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音F</p>
                            </li>
                        </ul>
                    </div>
                    <div class="itemg hide">
                        <ul>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音A2</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音B</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音C</p>
                            </li>
                            <li class="on"><img src="images/yuyin_07.png" />
                                <p>预览版声音D</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音E</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音F</p>
                            </li>
                        </ul>
                    </div>
                    <div class="itemg hide">
                        <ul>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音A3</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音B</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音C</p>
                            </li>
                            <li class="on"><img src="images/yuyin_07.png" />
                                <p>预览版声音D</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音E</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音F</p>
                            </li>
                        </ul>
                    </div>
                    <div class="itemg hide">
                        <ul>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音A</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音B</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音C</p>
                            </li>
                            <li class="on"><img src="images/yuyin_07.png" />
                                <p>预览版声音D</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音E</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音F</p>
                            </li>
                        </ul>
                    </div>
                    <div class="itemg hide">
                        <ul>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音A</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音B</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音C</p>
                            </li>
                            <li class="on"><img src="images/yuyin_07.png" />
                                <p>预览版声音D</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音E</p>
                            </li>
                            <li><img src="images/yuyin_07.png" />
                                <p>预览版声音F</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="yins">
                <p>音量</p>
                <div class="yins_fr">
                    <div class="progress"></div>
                </div>
                <span id="span">0</span>
            </div>
            <div class="yins">
                <p>语速</p>
                <div class="yins_fr">
                    <div class="progress1"></div>
                </div>
                <span id="spans">0</span>
            </div>
            <div class="plays">
                <div class="fl">
                    <div>
                        <img src="images/yuyin_11.jpg" />
                        <p>播放</p>
                    </div>
                    <div>
                        <img src="images/yuyin_10.jpg" />
                        <p>下载</p>
                    </div>
                </div>
                <span>语音合成声音定制</span>
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
                    <a href="#"><img src="images/more_03.jpg" /></a>
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

@section('script')
    <script type="text/javascript" src="{{asset('js/home/progressjs.js')}}"></script>
    <script>
        var timeID;
        var pro = new Progress('.progress', {
            val: 0, //初始值 取值范围：0-100
            size: 4, //控件大小默认值为10，可结合css自行修改样式
            precision: 2, //val精度配置，默认保留0位小数,最多配位4位
            drag: true, //默认开启拖拽，关闭设为false，不配置默认为true
            direction: 'horizontal', //方向 默认水平 vertical 垂直
            tip: {
                trigger: 'show', //
                align: 'bottom'
            },
            //获取val回调方法
            getVal: function(el) {
                // console.log(el) //这个进度条对象
                console.log(el.val);
                $('#span').html(el.val + '%')
            }
        });

        pro.onLoad(false);
        var pro1 = new Progress('.progress1', {
            val: 0, //初始值 取值范围：0-100
            size: 4, //控件大小默认值为10，可结合css自行修改样式
            precision: 2, //val精度配置，默认保留0位小数,最多配位4位
            drag: true, //默认开启拖拽，关闭设为false，不配置默认为true
            direction: 'horizontal', //方向 默认水平 vertical 垂直

            /*tip数值提示
             tip:true开启
             tip:false关闭，默认不设为关闭
             配置对象时tip默认开启
             tip: {
              trigger: 'show', //一直显示;'hover'：'hover':tip鼠标hover显示，默认为'show'
              align: 'bottom'//显示位置,默认为'top',  可设置'top,bottom,left,right'
             }
            */
            tip: {
                trigger: 'show', //
                align: 'bottom'
            },
            //获取val回调方法
            getVal: function(el) {
                // console.log(el) //这个进度条对象
                console.log(el.val);
                $('#spans').html(el.val * 3)
            }
        });

        pro1.onLoad(false)
    </script>

@endsection