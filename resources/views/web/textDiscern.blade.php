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
            <img src="images/icons_03.jpg"/>
            <div class="url">
                <div class="url_box">
                    <input type="text" placeholder="请输入网络图片URL" name="" id="" value="" />
                    <div class="jc"><a href="#">检测</a></div>
                    <p>或</p>
                    <div class="jcs"><a href="#">本地上传</a></div>
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
                <p>图片去雾 功能介绍</p>
            </div>
            <span>点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p>图片去雾 操作指南</p>
            </div>
            <span>点击选择文件加入待转换的语音文件,也可直接拖动语音文件添加，我们将自动上传转换文件，您只需稍等片刻将转换后的文件下载即可。</span>
        </div>
    </div>
</div>
@include('web.layouts.footer')