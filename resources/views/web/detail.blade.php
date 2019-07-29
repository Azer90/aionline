@include('web.layouts.header')
<body>
@include('web.layouts.nav')
<div class="acticle">
    <div class="acticle_banner">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('images/active_banner_03.jpg') }}" /></div>
                <div class="swiper-slide"><img src="{{ asset('images/active_banner_03.jpg') }}" /></div>
                <div class="swiper-slide"><img src="{{ asset('images/active_banner_03.jpg') }}" /></div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>

    </div>
    <div class="main_tops">
        <img src="{{ asset('images/icon_11.png') }}" />
        <ul>
            <li>当前位置:</li>
            <li>
                <a href="#">首页</a>
            </li>
            <li>></li>
            <li>
                <a href="#">服务支持</a>
            </li>
            <li>></li>
            <li>
                <a href="#">{{ $article['title'] }}</a>
            </li>
        </ul>
    </div>
    <img src="{{ asset('images/line_03.jpg') }}" class="line" />
    <div class="fonts">
        <h2>{{ $article['title'] }}</h2>
        <div class="acticle_box">
            {!! $article['content'] !!}
        </div>

        <div class="bqs">
            <p>标签：{{ $article['tag'] }} </p>
            <div>
                @if (!empty($up))
                    <a href="{{ route('detail',['id'=>$up['id']]) }}" rel="prev">上一篇:{{ $up['title'] }}</a>
                @endif
                @if (!empty($down))
                    <a href="{{ route('detail',['id'=>$down['id']]) }}" rel="prev">下一篇:{{ $down['title'] }}</a>
                @endif

            </div>
        </div>
    </div>
</div>
@extends('web.layouts.footer')