@include('web.layouts.header')
<body>
@include('web.layouts.nav')
<div class="banner">
    <div class="search">
        <input type="text" placeholder="请输入关键词" name="" id="searchValueId" value="" />
        <div onclick="searchUrl()"><img src="{{ asset('images/list_03.jpg') }}"/></div>
    </div>
</div>

<div class="contant">
    <div class="main_left">
        <h2>使用教程</h2>
        <ul>
            @foreach ($classify as $value)
                @if ($classify_id ==  $value['id'])
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
                    <a href="{{ route('/') }}">首页</a>
                </li>
                <li>></li>
                <li>
                    <a href="{{ route('tutorials') }}">使用教程</a>
                </li>
                <li>></li>
                <li>
                    <a href="{{ route('tutorials',['classify_id'=>$classify_id]) }}">{{ $classify_name }}</a>
                </li>
            </ul>
        </div>
        <img src="{{ asset('images/line_03.jpg') }}" class="line" />
        <div class="list_left">
            <ul>
                @foreach ($article as $value)

                    <li>
                        <div>
                            <img src="{{ $value['img'] }}"/>
                            <span>{{ $value['title'] }}</span>
                        </div>
                        <p>{{ str_limit($value['description'],150) }} </p>
                        <a href="{{ route('detail',['id'=>$value['id']]) }}">查看更多</a>
                    </li>

                @endforeach
            </ul>
            {{ $article->links('web.paginate') }}
        </div>
    </div>
</div>

@extends('web.layouts.footer')
@section('script')
<script>
    function searchUrl() {

        var reg = /^(\s*)$/g;

        if (reg.test(document.getElementById("searchValueId").value)){
            alert('请输入关键词后，再点击[搜索]。');
            var res = '\'\'';
        } else{
            res = document.getElementById("searchValueId").value;

            window.location.href = 'http://' + location.hostname + '/search/' + res;
        }


    }
</script>
@endsection