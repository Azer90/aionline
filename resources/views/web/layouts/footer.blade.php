<div class="footer">
    <div class="main_footer">
        <div class="about">
            <div class="item">
                <p>最新资讯</p>
                @foreach ($new as $value)
                    <li>
                        <a href="{{ route('detail',['id'=>$value['id']]) }}" target="_blank"> <span>{{ $value['title'] }}</span></a>
                    </li>
                @endforeach
            </div>
            <div class="item">
                <p>常见问题</p>

                @foreach ($common as $value)
                    <li>
                        <a href="{{ route('detail',['id'=>$value['id']]) }}" target="_blank"> <span>{{ $value['title'] }}</span></a>
                    </li>
                @endforeach
            </div>
            <div class="item">
                <p>联系我们</p>
                <span>邮箱：{{$config['email']}}</span>
                <span>地址： {{$config['address']}}</span>
                <span>客服电话：{{$config['phone']}}</span>
                <span>QQ：{{$config['qq']}}</span>
                <span>网址：{{ $config['website'] }}</span>
            </div>
        </div>
        <ul class="link">
            <li>友情链接： </li>

            @foreach ($link as $value)
                <li>
                    <a href="{{ $value['url'] }}" target="_blank">{{ $value['name'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
<footer>Copyright ©2006-2019.All Rights Reserved 版权所有 {{$config['copyright']}} 网站备案号：{{$config['icp']}}</footer>
</body>

<script type="text/javascript" src="{{asset('js/home/swiper.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('js/home/js.js')}}" ></script>

<script>
    document.getElementsByTagName('html')[0].style.fontSize = document.documentElement.clientWidth / 7.5 + 'px';
    window.onresize = function() {
        document.getElementsByTagName('html')[0].style.fontSize = document.documentElement.clientWidth / 7.5 + 'px';
    }
</script>
@yield('script')
</html>