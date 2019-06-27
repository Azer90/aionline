@include('web.layouts.header')
<body>
@include('web.layouts.nav')
<div class="banner">
    <div class="search">
        <input type="text" placeholder="请输入关键词" name="" id="" value="" />
        <div><img src="images/list_03.jpg"/></div>
    </div>
</div>
<div class="list_contant">
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
@extends('web.layouts.footer')
