@include('web.layouts.header')
<body>
@include('web.layouts.nav')
<div class="contant">
    <div class="main_left">
        <h2>使用教程</h2>
        <ul>
            @foreach ($classify as $value)
                @if ($article['classify_id'] ==  $value['id'])
                    <li class="on"><a href="{{ route('tutorials',['classify_id'=>$value['id']]) }}">{{ $value['name'] }}</a></li>
                @else
                    <li><a href="{{ route('tutorials',['classify_id'=>$value['id']]) }}">{{ $value['name'] }}</a></li>
                @endif

            @endforeach
        </ul>
    </div>
    <div class="main_right">
        <div class="main_tops">
            <img src="{{ asset('images/icon_11.png') }}" />
            <ul>
                <li>当前位置:</li>
                <li>
                    <a href="#">首页</a>
                </li>
                <li>></li>
                <li>
                    <a href="#">使用教程</a>
                </li>
                <li>></li>
                <li>
                    <a href="#">{{ $article->classify->name }}</a>
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
                <p>标签：
                    @foreach ( $article['tag'] as $tag)
                        @if ($loop->last)
                           <a href="{{ route('search',['tag'=>$tag]) }}">{{ $tag }}</a>
                        @else
                            <a href="{{ route('search',['tag'=>$tag]) }}">{{ $tag }}，</a>
                        @endif
                    @endforeach
                 </p>
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
</div>

@extends('web.layouts.footer')