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
        <textarea class="gem" name="" rows="" cols="" placeholder="请输入你需要转换的文字"></textarea>

        <div class="ge_ti">
            <p>最多可输入<span>300</span>个字,超出部分合成将被截断</p>
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
                    </ul>
                </div>
                <div class="fadines">
                    <div class="itemg">
                        <ul>
                            <li class="on" data-value="Aiqi"><img src="images/yuyin_07.png" />
                                <p>艾琪，温柔女声</p>
                            </li>
                            <li data-value="Aicheng"><img src="images/yuyin_07.png" />
                                <p>艾诚，标准男声</p>
                            </li>
                            <li data-value="Aida"><img src="images/yuyin_07.png" />
                                <p>艾达，标准男声</p>
                            </li>
                            <li data-value="Aijia"><img src="images/yuyin_07.png" />
                                <p>艾佳，标准女声</p>
                            </li>
                            <li data-value="Siqi"><img src="images/yuyin_07.png" />
                                <p>思琪，温柔女声</p>
                            </li>
                            <li data-value="Sijia"><img src="images/yuyin_07.png" />
                                <p>思佳，标准女声</p>
                            </li>
                            <li data-value="Sicheng"><img src="images/yuyin_07.png" />
                                <p>思诚，标准男声</p>
                            </li>
                            <li data-value="Ruoxi"><img src="images/yuyin_07.png" />
                                <p>若兮，温柔女声</p>
                            </li>
                            <li data-value="Ninger"><img src="images/yuyin_07.png" />
                                <p>宁儿，温柔女声</p>
                            </li>
                            <li data-value="Ruilin"><img src="images/yuyin_07.png" />
                                <p>瑞琳，标准女声</p>
                            </li>
                            <li data-value="Xiaomeng"><img src="images/yuyin_07.png" />
                                <p>小梦，标准女声</p>
                            </li>
                            <li data-value="Xiaowei"><img src="images/yuyin_07.png" />
                                <p>小威，标准男声</p>
                            </li>
                            <li data-value="Xiaoyun"><img src="images/yuyin_07.png" />
                                <p>小云，标准女声</p>
                            </li>
                            <li data-value="Xiaogang"><img src="images/yuyin_07.png" />
                                <p>小刚，标准男声</p>
                            </li>
                        </ul>
                    </div>
                    <div class="itemg hide">
                        <ul>
                            <li  data-value="Aixia"><img src="images/yuyin_07.png" />
                                <p>艾夏，自然女声</p>
                            </li>
                            <li data-value="Aiyue"><img src="images/yuyin_07.png" />
                                <p>艾悦，温柔女声</p>
                            </li>
                            <li data-value="Aijing"><img src="images/yuyin_07.png" />
                                <p>艾婧，严厉女声</p>
                            </li>
                            <li data-value="Aimei"><img src="images/yuyin_07.png" />
                                <p>艾美，甜美女声</p>
                            </li>
                            <li data-value="Siyue"><img src="images/yuyin_07.png" />
                                <p>思悦，温柔女声</p>
                            </li>
                            <li data-value="Aiyu"><img src="images/yuyin_07.png" />
                                <p>艾雨，自然女声</p>
                            </li>
                            <li data-value="Xiaomei"><img src="images/yuyin_07.png" />
                                <p>小美，甜美女声</p>
                            </li>
                            <li data-value="Yina"><img src="images/yuyin_07.png" />
                                <p>伊娜，浙普女声</p>
                            </li>
                            <li data-value="Sijing"><img src="images/yuyin_07.png" />
                                <p>思婧，严厉女声</p>
                            </li>
                            <li data-value="Xiaoxue"><img src="images/yuyin_07.png" />
                                <p>小雪，温柔女声</p>
                            </li>
                            <li data-value="Amei"><img src="images/yuyin_07.png" />
                                <p>阿美，甜美女声</p>
                            </li>

                        </ul>
                    </div>
                    <div class="itemg hide">
                        <ul>
                            <li data-value="Aibao"><img src="images/yuyin_07.png" />
                                <p>艾宝，萝莉女声</p>
                            </li>
                            <li data-value="Xiaobei"><img src="images/yuyin_07.png" />
                                <p>小北，萝莉女声</p>
                            </li>
                            <li data-value="Sitong"><img src="images/yuyin_07.png" />
                                <p>思彤，儿童音</p>
                            </li>
                        </ul>
                    </div>
                    <div class="itemg hide">
                        <ul>
                            <li  data-value="Olivia"><img src="images/yuyin_07.png" />
                                <p>Olivia，英音女声</p>
                            </li>
                            <li data-value="William"><img src="images/yuyin_07.png" />
                                <p>William，英音男声</p>
                            </li>
                            <li data-value="Wendy"><img src="images/yuyin_07.png" />
                                <p>Wendy，英音女声</p>
                            </li>
                            <li  data-value="Halen"><img src="images/yuyin_07.png" />
                                <p>Halen，英音女声</p>
                            </li>
                            <li data-value="Harry"><img src="images/yuyin_07.png" />
                                <p>Harry，英音男声</p>
                            </li>

                        </ul>
                    </div>
                    <div class="itemg hide">
                        <ul>
                            <li data-value="Shanshan"><img src="images/yuyin_07.png" />
                                <p>姗姗，粤语女声</p>
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
                    <div class="bofan">
                        <img src="images/yuyin_11.jpg" />
                        <p>立即合成</p>
                    </div>
                    <div>
                        <img src="images/yuyin_10.jpg" />
                        <p>下载</p>
                    </div>
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
                    <a href="#"><img src="images/more_03.jpg" /></a>
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
@extends('web.layouts.footer')

@section('script')
    <script type="text/javascript" src="{{asset('js/home/progressjs.js')}}"></script>
    <script>
        var timeID;
        var pro = new Progress('.progress', {
            val: 0, //初始值 取值范围：0-100
            size: 4, //控件大小默认值为10，可结合css自行修改样式
            precision: 0, //val精度配置，默认保留0位小数,最多配位4位
            drag: true, //默认开启拖拽，关闭设为false，不配置默认为true
            direction: 'horizontal', //方向 默认水平 vertical 垂直
            tip: {
                trigger: 'show', //
                align: 'bottom'
            },
            //获取val回调方法
            getVal: function(el) {
                 //console.log(el) //这个进度条对象
                //console.log(el.val);
                $('#span').html(el.val)
            }
        });

        pro.onLoad(false);
        var pro1 = new Progress('.progress1', {
            val: 0, //初始值 取值范围：0-100
            size: 4, //控件大小默认值为10，可结合css自行修改样式
            precision: 0, //val精度配置，默认保留0位小数,最多配位4位
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
                //console.log(el.val);
                $('#spans').html(el.val * 3)
            }
        });

        pro1.onLoad(false);

        $(".bofan").on("click",function () {
            var content=$('.gem').val();
            if(content==''){
                layer.alert('请输入你要转换的文字');
            }
            var volume=$('#span').text();
            var speech_rate=$('#spans').text();
            var token="{{csrf_token()}}";
            var voice=$('.slide_gem .slide_top .fadines ul .on').data('value');

            $.ajax({
                url:host+"/Api_getVoice",
                dataType:"json",
                type:"post",
                data:{'content':content,'volume':volume,'speech_rate':speech_rate,'voice':voice,'_token':token},
                beforeSend:function(){

                },
                success:function (res) {
                    console.log(res);
                }
            })
        })
    </script>

@endsection