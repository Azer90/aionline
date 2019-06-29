@include('web.layouts.header')
<body>
@include('web.layouts.nav')
<div class="banner">
    <div class="search">
        <input type="text" placeholder="请输入关键词" name="" id="searchValueId" value="" />
        <div onclick="searchUrl()"><img src="{{ asset('images/list_03.jpg') }}"/></div>
    </div>
</div>
<div class="list_contant">
    <ul>
        @foreach ($article_index as $value)

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
    {{ $article_index->links('web.paginate') }}

</div>
@extends('web.layouts.footer')
@section('script')
    <script>
        function searchUrl() {

            var reg = /^(\s*)$/g;

            if (reg.test(document.getElementById("searchValueId").value))

                var res = '\'\'';

            else
                res = document.getElementById("searchValueId").value;

            window.location.href = 'http://' + location.hostname + '/search/' + res;

        }
    </script>
@endsection