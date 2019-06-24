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
        <h2>文字在线识别</h2>
        <ul>
            <li>通用识别</li>
            <li>身份证识别</li>
            <li class="on">行驶证</li>
            <li>驾驶证</li>
            <li>营业执照</li>
            <li>表格文字识别</li>
            <li>手写文字识别</li>
            <li>银行卡识别</li>
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
        <div class="src">
            <img src="images/imgs_16.jpg" class="imgs" />
            <img src="images/imgs_03.png" class="ms" />
            <div class="url">
                <div class="url_box">
                    <input type="text" placeholder="请输入网络图片URL" name="" id="" value="" />
                    <div class="jc">
                        <a href="#">检测</a>
                    </div>
                    <p>或</p>
                    <div class="jcs">
                        <a href="#">本地上传</a>
                    </div>
                </div>
                <span>图片文件类型支持jpg、png、jpeg、bmp、图片大小不超过2M。</span>
            </div>
            <div class="youhua fl">优化后</div>
            <div class="youhua fr">优化前</div>
        </div>
        <div class="slide_img">
            <img src="images/imgs_13.jpg" class="on" />
            <img src="images/imgs_07.jpg" />
            <img src="images/imgs_09.jpg" />
            <img src="images/imgs_11.jpg" />
            <img src="images/imgs_13.jpg" />
        </div>
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
                    <img src="images/more_03.jpg" />
                </div>
                <img src="images/line_03.jpg" class="line"/>
            </div>
            <ul>
                <li><a href="#">推荐阅读推荐阅读文章调用推荐阅读推荐阅读文章调用</a></li>
                <li><a href="#">推荐阅读推荐阅读文章调用推荐阅读推荐阅读文章调用</a></li>
                <li><a href="#">推荐阅读推荐阅读文章调用推荐阅读推荐阅读文章调用</a></li>
                <li><a href="#">推荐阅读推荐阅读文章调用推荐阅读推荐阅读文章调用</a></li>
                <li><a href="#">推荐阅读推荐阅读文章调用推荐阅读推荐阅读文章调用</a></li>
                <li><a href="#">推荐阅读推荐阅读文章调用推荐阅读推荐阅读文章调用</a></li>
                <li><a href="#">推荐阅读推荐阅读文章调用推荐阅读推荐阅读文章调用</a></li>
                <li><a href="#">推荐阅读推荐阅读文章调用推荐阅读推荐阅读文章调用</a></li>
                <li><a href="#">推荐阅读推荐阅读文章调用推荐阅读推荐阅读文章调用</a></li>
                <li><a href="#">推荐阅读推荐阅读文章调用推荐阅读推荐阅读文章调用</a></li>
            </ul>
        </div>
    </div>
</div>
@include('web.layouts.footer')