@include('web.layouts.header')

<body>
@include('web.layouts.nav')
<div class="contant">
    <div class="main_left">
        <h2>服务定制</h2>
        <ul>
            @foreach ($c_name as $value)

                @if ($value['id']==$page_id)
                <li class="on"><a href="{{ route('service',['id'=>$value['id']]) }}">{{$value['c_name']}}</a></li>
                @else
                    <li><a href="{{ route('service',['id'=>$value['id']]) }}">{{$value['c_name']}}</a></li>
                @endif
            @endforeach

        </ul>
    </div>
    <div class="main_right">
        <div class="main_tops">
            <img src="images/icon_11.png"/>
            <ul>
                <li>当前位置:</li>
                <li><a href="#">首页</a></li>
                <li>></li>
                <li><a href="#">服务定制</a></li>
                <li>></li>
                <li><a href="#">服务定制内容</a></li>
            </ul>
        </div>
        <img src="images/line_03.jpg" class="line"/>
        <div class="service_box">
            <h2>{{ $singlePage['title'] }}</h2>
            <span>{{ $singlePage['description'] }}</span>

            {!! $singlePage['content'] !!}
        </div>
    </div>
</div>


@include('web.layouts.footer')