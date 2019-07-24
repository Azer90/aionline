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

    .src img{
          width: 100%;
    }
    .copy{
        display: none;
    }
    .table_ul td{
       font-size: 16px;
        width: 60px;
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
            <img class="currency_img" src="images/default.jpg"/>
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
                <li style="width: 100%">《演讲的力量》
                任何一个人，只要拥有值得分享的思想，就能
                发表精彩的演讲，在公共演讲中，唯一真正重要的
                东西不是自信，不是舞台展示，也不是流利的语言。
                而是有价值的思想。<br>
                    <span style="float: right;display: inline-block;margin-right: 10px">——克里斯•安德森</span>
                </li>
            </ul>
            <div class="copy">复制</div>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="introduce_title">通用识别 功能介绍</p>
            </div>
            <span class="introduce_content">对手写字、照片等内容进行智能识别为可编辑内容。可应用于各行业的文字字符信息的提取识别</span>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="guide_title">通用识别 操作指南</p>
            </div>
            <span class="guide_content">可通过【复制网络图片链接-检测】或【本地上传】将需要识别的图片上传，等待智能在线AI系统处理后，点击【复制】可获取识别内容。</span>
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
            <img class="cart_img" src="images/card.jpg"/>
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
                <li>姓名   常涛</li>
                <li>性别  男</li>
                <li>民族  汉</li>
                <li>出生 1997年6月01日</li>
                <li>住址 河北省邯郸市肥乡县肥乡</li>
                <li>公民身份号码 411526199706013217</li>

            </ul>
            <div class="copy">复制</div>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="introduce_title">身份证识别 功能介绍</p>
            </div>
            <span class="introduce_content">对居民身份证进行智能精准识别,内容可复制。可应用于公安、安防等体系。</span>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="guide_title">身份证识别 操作指南</p>
            </div>
            <span class="guide_content">可通过【复制网络图片链接-检测】或【本地上传】将需要识别的身份证上传，等待智能在线AI系统处理后，点击【复制】可获取识别内容。</span>
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
            <img class="travel_img" src="images/driving.png"/>
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
                <li>中华人民共和国机动车行驶证</li>
                <li>号牌号码  豫A99RR9</li>
                <li>车辆类型  小型普通客车</li>
                <li>所有人  郑昆</li>
                <li>住址  中牟县三刘寨村</li>
                <li>使用性质  非营运</li>
                <li>品牌型号  大众汽车牌SVW6474DFD</li>
                <li>车辆识别代号  SSVUDDTT2J2022558</li>
                <li>发动机号码  111533</li>
                <li>注册日期  2018-03-12</li>
                <li>发证日期  2018-03-13</li>

            </ul>
            <div class="copy">复制</div>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="introduce_title">行驶证 功能介绍</p>
            </div>
            <span class="introduce_content">对行驶证进行智能精准识别,内容可复制。可应用于交通、安防等体系。</span>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="guide_title">行驶证 操作指南</p>
            </div>
            <span class="guide_content">可通过【复制网络图片链接-检测】或【本地上传】将需要识别的行驶证上传，等待智能在线AI系统处理后，点击【复制】可获取识别内容。</span>
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
            <img class="driver_img" src="images/driver.png"/>
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
                <li>中华人民共和国机动车驾驶证</li>
                <li>姓名 谢乐桃</li>
                <li>性别 女</li>
                <li>国籍 中国</li>
                <li>住址  内蒙古自治区赤峰市33号</li>
                <li>出生日期  1999-02-22</li>
                <li>初次领证日期  2015-06-18</li>
                <li>准驾车型  C1</li>
                <li>有效期限  2015-06-18至2021-06-18</li>

            </ul>
            <div class="copy">复制</div>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="introduce_title">驾驶证 功能介绍</p>
            </div>
            <span class="introduce_content">对驾驶证进行智能精准识别,内容可复制。可应用于交通、安防等体系。</span>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="guide_title">驾驶证 操作指南</p>
            </div>
            <span class="guide_content">可通过【复制网络图片链接-检测】或【本地上传】将需要识别的驾驶证上传，等待智能在线AI系统处理后，点击【复制】可获取识别内容。</span>
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
            <img class="business_img" src="images/business.png"/>
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
                <li>企业法人营业执照 （副本）</li>
                <li>注册号 887330921837540</li>
                <li>社会信用代码  8111102033223410559</li>
                <li>名        称  北京仕达医疗有限公司</li>
                <li>类        型  医疗器械</li>
                <li>住        所  北京市丰台区三环新城</li>
                <li>法 定 代表人  朱胜贤</li>
                <li>有效 日期 至  2016年2月20日</li>

            </ul>
            <div class="copy">复制</div>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="introduce_title">营业执照 功能介绍</p>
            </div>
            <span class="introduce_content">对营业执照进行智能精准识别,内容可复制。可应用于工信查验、认证等。</span>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="guide_title">营业执照 操作指南</p>
            </div>
            <span class="guide_content">可通过【复制网络图片链接-检测】或【本地上传】将需要识别的营业执照上传，等待智能在线AI系统处理后，点击【复制】可获取识别内容。</span>
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
            <img class="table_img" src="images/table.png"/>
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
                <table>
                    <tr>
                        <td></td>
                        <td>语文</td>
                        <td>数学</td>
                        <td>英语</td>
                    </tr>
                    <tr>
                        <td>张三</td>
                        <td>95</td>
                        <td>96</td>
                        <td>97</td>
                    </tr>
                    <tr>
                        <td>李四</td>
                        <td>85</td>
                        <td>87</td>
                        <td>48</td>
                    </tr>
                    <tr>
                        <td>王二</td>
                        <td>88</td>
                        <td>87</td>
                        <td>67</td>
                    </tr>
                    <tr>
                        <td>麻子</td>
                        <td>98</td>
                        <td>88</td>
                        <td>78</td>
                    </tr>
                </table>

            </ul>
            <div class="copy" style='margin-right:20px'>点击下载</div>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="introduce_title">表格文字识别 功能介绍</p>
            </div>
            <span class="introduce_content">对表格图片进行智能精准识别,内容以Excel形式进行输出。可应用于财务、人事等报表处理。</span>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="guide_title">表格文字识别 操作指南</p>
            </div>
            <span class="guide_content">可通过【复制网络图片链接-检测】或【本地上传】将需要识别的表格图片上传，等待智能在线AI系统处理后，点击【复制】可获取识别内容。</span>
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
            <img class="hand_img" src="images/handwriting.jpg"/>
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
                <li>周二下午三点</li>
                <li>需求评审会。</li>
                <li>提前备好文档。</li>

            </ul>
            <div class="copy">复制</div>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="introduce_title">手写文字识别 功能介绍</p>
            </div>
            <span class="introduce_content">对手写文字进行智能精准识别,内容可复制。可应用于试卷、笔记等识别。</span>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="guide_title">手写文字识别 操作指南</p>
            </div>
            <span class="guide_content">可通过【复制网络图片链接-检测】或【本地上传】将需要识别的手写图片上传，等待智能在线AI系统处理后，点击【复制】可获取识别内容。</span>
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
            <img class="bank_img" src="images/bank.jpg"/>
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
                <li>ICBC    中国工商银行 GOLD</li>
                <li>CREDIT  环球旅行卡Global Travel</li>
                <li>6225 9700 7000 3000</li>
                <li>6225             月/年</li>
                <li>02   有效期限     07/22</li>
                <li>MR.CHENTA</li>
                <li>UnionPay</li>
                <li>银联</li>

            </ul>
            <div class="copy">复制</div>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="introduce_title">银行卡识别 功能介绍</p>
            </div>
            <span class="introduce_content">对银行卡内容进行智能精准识别,内容可复制。可应用于金融验证等。</span>
        </div>
        <div class="item_dis">
            <div>
                <img src="images/icons_07.jpg"/>
                <p class="guide_title">银行卡识别 操作指南</p>
            </div>
            <span class="guide_content">可通过【复制网络图片链接-检测】或【本地上传】将需要识别的银行卡图片上传，等待智能在线AI系统处理后，点击【复制】可获取识别内容。</span>
        </div>
    </div>
    </div>
</div>
<div class="qr">
    <div>
        <img class="close" src="images/close.png" alt="">
        <p style="padding-left: 10px">扫描二维码关注公众号后即可下载</p>
        <img class="qr_img" src="" alt="">
    </div>
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
        threads: 1,              //上传并发数。允许同时最大上传进程数。
        fileSizeLimit:2*1024*1024,
        duplicate :true,
        formData:{
            dis_type:1
        },
        // 只允许选择图片文件。
        accept: {
            // title: 'Images',
            extensions: 'jpg,jpeg,png,bmp',
            mimeTypes: 'image/*'
        }
    });

    /**
     * 验证文件格式以及文件大小
     */
    uploader.on("error", function (type) {

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
        $(".copy").show();
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
    });

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

    $(document).bind("selectstart",function(){return false;});

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
                    $(".qr .qr_img").attr("src",res.qrcode_url);
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
                        if(uploader.options.formData.dis_type==6){
                            location.href=res.path;
                        }else{
                            location.href=host+"/api/word_download?file_name="+file_name;
                        }
                    }else{
                        if(con<100){
                            polling();
                        }
                    }
                }
            })
        },500)
    }
    $(document).on("click",".qr .close",function () {
        $(".qr").hide();
        user_id="";
        clearTimeout(time)
    });
</script>

