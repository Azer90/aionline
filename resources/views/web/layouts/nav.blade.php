<div class="header">
    <div class="header_mid">
        <p>欢迎来到在线AI转换官网</p>
        <div>
            <a href="#"><img src="{{asset('images/icon_03.jpg')}}" /><span>APP下载</span></a>
        </div>
    </div>
</div>
<div class="navbar" style="border: none;">
    <div class="navbar_mid">
        <h1><img src="{{asset('images/icon_07.png')}}"/></h1>
        <ul>
            @foreach ($nav as $value)
                @if ($value['url']==$name)
                    <li class="on"><a  href="{{ route($value['url'])  }}">{{ $value['name'] }}</a></li>
                @else
                    <li><a  href="{{ route($value['url']) }}">{{ $value['name'] }}</a></li>
                @endif

            @endforeach
        </ul>
    </div>
</div>

<div class="fadeinsaa">
    <ul class='sf'>
        <img src="{{asset('images/close.png')}}" class="closes"/>
        @foreach ($nav as $value)
           <li><a  href="{{ route($value['url']) }}">{{ $value['name'] }}</a></li>
        @endforeach
    </ul>
</div>
