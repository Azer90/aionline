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
            <li class="on"><a href="{{ route('voiceCompose') }}">在线语音合成</a></li>
            <li><a href="{{ route('voiceToText') }}">语音转文字</a></li>
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
            <p>最多可输入<span>300</span>个字,已输入<span class="lets">0</span>个字,超出部分合成将被截断</p>
        </div>
        <div class="ge_line"></div>
        <div class="slide_gem">
            <div class="slide_top">
                <div class="slide_navbar">
                    <ul>
                        <li class="on">通用场景</li>
                        <li>客服场景</li>
                        <li>童声场景</li>
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
                    <div class="bofan" style="cursor: pointer;">
                        <img width="22" height="22" src="images/yuyin_11.jpg" />
                        <p class="compose">立即合成</p>
                    </div>

                    <div class="download">
                        <img src="images/yuyin_10.jpg" />
                        <p >下载</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg" />
                <p>文字转语音 功能介绍</p>
            </div>
            <span>将文本转化成真人语音的需求，提供多种音色选择，支持自定义音量、语速，为您提供个性化音色定制服务，让发音更自然、更专业、更符合场景需求。</span>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg" />
                <p>文字转语音 操作指南</p>
            </div>
            <span>输入需要合成的文字内容，自定义音量、语速后点击【立即合成】,系统将智能合成转换，试听后可【下载】。</span>
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
<div class="ggw">
    <div class="ggw_box">
        <p>您需要通过以下验证</p>
        <img src="images/close.png" class="closesa"/>
        <div id="SlidingVerification"></div>
    </div>
</div>
<audio id="myMusic">
    <source src="" type="audio/mpeg" />
</audio>

<div class="qr">
    <div>
        <p style="padding-left: 10px">扫描二维码关注公众号后即可下载</p>
        <img src="" alt="">
    </div>
</div>
<div class="zhifu">
    <ul class="payment-wrapper">
        <a class="close1"></a>
        <div class="buy-step">请选择付款方式
        </div>
        <p style="color: red;text-align: center;font-size: 16px;padding-top: 8px;">继续下载 需支付{{$pay_config['price']}}元</p>
        <div class="payment">
            <a value="alipay" id="aliPay" class="pay-ali current" ><span class="icon icon-tag"></span><img src="{{ asset('images/pay-ali.png') }}"></a>
            <a value="wechat" id="wechatPay" class="pay-wechat"><span class="icon icon-tag"></span><img src="{{ asset('images/pay-wechat.png') }}"></a>
        </div>
        <div class="pay-now" id="payNow">
           去支付
        </div>
    </ul>
</div>

<div class="wechat-pay-dialog-bg">
<div class="wechat-pay-dialog" id="show">
    <a class="close"></a>
    <ul>

        <li class="li-02">
            <h3>微信扫码支付</h3>
            <h1 class="price-wechat">￥<span class="thePlanPrice">{{$pay_config['price']}}</span></h1>
            <div class="qr-code-wrapper" id="qrcode">

            </div>
            <div class="tips">
                <img src="{{ asset('images/icon-scan.png') }}">
                <p>请使用微信扫一扫</p>
                <p>扫描二维码支付</p>
            </div>
        </li>
        <li class="li-03">
            <img src="{{ asset('images/code-tips.png') }}">
        </li>
    </ul>
</div>
</div>
<p class="wechatUrl" style="display:none;">{{ route('wechat_find') }}</p>
<p class="aliUrl" style="display:none;">{{ route('ali_find') }}</p>
<p class="order_no" style="display:none;">{{ request()->out_trade_no }}</p>
<p class="file_name" style="display:none;">{{ request()->file_name }}</p>
@extends('web.layouts.footer')

@section('script')
    <script type="text/javascript" src="{{asset('js/home/progressjs.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/home/jquery.qrcode.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/home/qrcode.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/home/slidingverification.js')}}" ></script>

    <script>
        var timeID;
        var control="{{$pay_config['control']}}";
        var file_name ="",user_id="",str_len=0;
        var pro = new Progress('.progress', {
            val: 50, //初始值 取值范围：0-100
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
                $('#span').html(el.val);
                $('.bofan img').attr('src','images/yuyin_11.jpg');
                $('.compose').text('立即合成');
                var audio = document.getElementById('myMusic');
                if(audio!==null){
                    //检测播放是否已暂停.audio.paused 在播放器播放时返回false.
                    if(!audio.paused) {
                        audio.pause();// 这个就是暂停
                    }
                }
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
                $('#spans').html(el.val * 3);
                $('.bofan img').attr('src','images/yuyin_11.jpg');
                $('.compose').text('立即合成');
                var audio = document.getElementById('myMusic');
                if(audio!==null){
                    //检测播放是否已暂停.audio.paused 在播放器播放时返回false.
                    if(!audio.paused) {
                        audio.pause();// 这个就是暂停
                    }
                }
            }
        });

        pro1.onLoad(false);

        $('.gem').on('input propertychange',function () {
            var resultStr = $(this).val().replace(/[\r\n\s]/g, ""); //去掉回车换行
           var lent=resultStr.length;
           $('.lets').text(lent);
            $('.bofan img').attr('src','images/yuyin_11.jpg');
            $('.compose').text('立即合成');
            var audio = document.getElementById('myMusic');
            if(audio!==null){
                //检测播放是否已暂停.audio.paused 在播放器播放时返回false.
                if(!audio.paused) {
                    audio.pause();// 这个就是暂停
                }
            }
        });
        $(".bofan").on("click",function () {
            var compose= $('.compose').text();
            var audio = document.getElementById('myMusic');
            if(compose=='立即合成'){
                SlidingVerification('#SlidingVerification');
                $('.ggw').css('display','flex');
            }
            if(compose=='播放'||compose=='继续播放'){

                if(audio!==null){
                    //检测播放是否已暂停.audio.paused 在播放器播放时返回false.
                    if(audio.paused) {
                        $('.bofan img').attr('src','images/zt.jpg');
                        $('.compose').text('暂停');
                        audio.play();//audio.play();// 这个就是播放
                        audio.onended = function()
                        {
                            $('.bofan img').attr('src','images/yuyin_11.jpg');
                            $('.compose').text('播放');
                        };
                    }else{
                        audio.pause();// 这个就是暂停
                    }
                }
                return false;
            }
            if(compose=='暂停'){

                if(audio!==null){
                    //检测播放是否已暂停.audio.paused 在播放器播放时返回false.
                    if(!audio.paused) {
                        $('.bofan img').attr('src','images/yuyin_11.jpg');
                        $('.compose').text('继续播放');
                        audio.pause();// 这个就是暂停
                    }
                }
                return false;
            }
        });
      function bofan() {
            var content=$('.gem').val();
            if(content==''){
                layer.alert('请输入你要转换的文字');
                return false;
            }
            var volume=$('#span').text();
            var speech_rate=$('#spans').text();
            var token="{{csrf_token()}}";
            var voice=$('.slide_gem .slide_top .fadines ul .on').data('value');
            if(!voice){
                layer.alert('请选择发音人');
                return false;
            }
            $.ajax({
                url:host+"/Api_getVoice",
                dataType:"json",
                type:"post",
                data:{'content':content,'volume':volume,'speech_rate':speech_rate,'voice':voice,'_token':token},
                beforeSend:function(){
                    $('.bofan').css('pointer-events','none');
                    $('.bofan img').attr('src','images/loading1.gif');
                },
                success:function (res) {
                    $('.bofan').css('pointer-events','auto');
                   if(res.code==200){
                       $('.bofan img').attr('src','images/zt.jpg');
                        $('.compose').text('暂停');
                       $('#myMusic').attr('src','/voice/'+res.data.file_name);
                       file_name = res.data.file_name;
                       str_len=res.data.str_len;
                       var audio = document.getElementById('myMusic');
                       if(audio!==null){
                           //检测播放是否已暂停.audio.paused 在播放器播放时返回false.
                           if(audio.paused) {
                               audio.play();//audio.play();// 这个就是播放
                               audio.onended = function()
                               {
                                   $('.bofan img').attr('src','images/yuyin_11.jpg');
                                   $('.compose').text('播放');
                               };
                           }else{
                               audio.pause();// 这个就是暂停
                           }
                       }
                   }else {
                       $('.bofan img').attr('src','images/yuyin_11.jpg');
                       layer.alert(res.message);
                       return false;
                   }
                }
            })
        };
        $(".download").on("click",function () {
            if(file_name==''){
                layer.alert('请先点击立即合成');
                return false;
            }
            if(str_len>control){
                $(".zhifu").show();
            }else {
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
            }

        });
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

        $('.payment a').click(function () {
            $(this).addClass("current").siblings().removeClass("current");
        });

        $('#payNow').click(function () {
            payWay();
        });

        /**
         * 购买商品
         */
        function isIE(){
            var theUA = window.navigator.userAgent.toLowerCase();
            if ((theUA.match(/msie\s\d+/) && theUA.match(/msie\s\d+/)[0]) || (theUA.match(/trident\s?\d+/) && theUA.match(/trident\s?\d+/)[0])) {
                var ieVersion = theUA.match(/msie\s\d+/)[0].match(/\d+/)[0] || theUA.match(/trident\s?\d+/)[0];
                if (ieVersion < 9) {
                    return true;
                }
            }
        }
        function payWay() {
            var paymethod = $('.payment a.current').attr('value');
            $.ajax({
                url: host+"/pay",
                type: 'post',
                dataType: 'json',
                data: {
                    "paymethod": paymethod,
                    "file_name": file_name,
                    '_token':"{{csrf_token()}}",
                },
                success: function (data) {
                  /*  console.log(data);
                    return;*/
                    if (data.code == 1000) {
                        $('.order_no').html(data.order_no);
                        if (paymethod == 'alipay') {
                            window.open(data.message,'_self');
                        } else if (paymethod == 'wechat') {
                            var render;
                            if (isIE()) {
                                render = 'table';
                            }else{
                                render = 'canvas';
                            };
                            $(".wechat-pay-dialog-bg").css({ display: "block" });
                            $('.qr-code-wrapper').empty();
                            $('.qr-code-wrapper').qrcode({
                                render: render,
                                width: 120,
                                height: 120,
                                text: data.message
                            });
                        };
                    };
                }
            })
        }

        $(".close").click(function () {
            $(".wechat-pay-dialog-bg").css("display", "none");
        });
        $(".close1").click(function () {
            $(".zhifu").css("display", "none");
        });
        $(function () {
            chaxun = setInterval(function () {
                check()
            }, 3000);
        });

        function check() {
            var paymethod = $('.payment a.current').attr('value');
            if (paymethod == 'alipay') {
                var url =$('.aliUrl').text();
            }
            if (paymethod == 'wechat') {
                var url =$('.wechatUrl').text();
            }
            var order_no = $('.order_no').text();
            var param = {'order_no': order_no, '_token':"{{csrf_token()}}"};
            if(order_no !=''){
                $.post(url, param, function (data) {

                    if(paymethod == 'alipay'){
                        // console.log(data['trade_status']);

                        if (data['trade_status'] == 'TRADE_SUCCESS') {
                            if(file_name==''){
                                var file_name1 = $('.file_name').text();
                                clearInterval(chaxun);
                                location.href=host+"/api/word_download?file_name="+file_name1;
                            }else {
                                clearInterval(chaxun);
                                location.href=host+"/api/word_download?file_name="+file_name;
                            }

                        }
                    }else if(paymethod == 'wechat'){
                        //console.log(data['trade_state']);
                        if (data['trade_state'] == 'SUCCESS') {
                            $(".wechat-pay-dialog-bg").css("display", "none");
                            clearInterval(chaxun);
                            location.href=host+"/api/word_download?file_name="+file_name;
                        }
                    }

                });
            }

        }
        $('.closesa').click(function(){
            $('.ggw').hide()
        })

    </script>

@endsection