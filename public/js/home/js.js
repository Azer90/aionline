$(document).on('click','.closes',function(){
	$('.fadeinsaa').fadeOut();
	$('.fadeinsaa ul').animate({
		'right':'-60%'
	})
});
$(document).on('click','.menu',function(){
	$('.fadeinsaa').fadeIn();
	$('.fadeinsaa ul').animate({
		'right':'0'
})
});

$(function(){
	var str = '<img src="'+menu+'" class="menu"/>';
	$('.navbar .navbar_mid').append(str);
	var strs = `<div class="fadeinsaa">
			<ul class='sf'>
			<img src="images/close.png" class="closes"/>
				<li><a href="online.html">首页</a></li>
  				<li><a href="yuyin.html">语音转文字</a></li>
  				<li><a href="yuyin1.html">在线语音合成</a></li>
  				<li><a href="img.html">图像AI处理</a></li>
  				<li><a href="online.html">文字在线识别</a></li>
  				<li><a href="list_article.html">使用教程</a></li>
  				<li><a href="index.html">服务定制</a></li>
			</ul>
		</div>`;
		//$('body').append(strs);
});
$('.contant .main_left h2').click(function(){
			if($(this).hasClass('a')){
				$(this).removeClass('a');
				$('.contant .main_left ul').slideUp()
			}else{
				$(this).addClass('a');
				$('.contant .main_left ul').slideDown()
			}
		});
$('.slide_img img').click(function() {
			var n = $(this).attr('src');
			$('.src .imgs').attr('src', n);
			$(this).addClass('on').siblings().removeClass('on')
		});

    var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
      },
    });
$('.slide_gem .slide_top .slide_navbar ul li').click(function(){
	var n = $(this).index();
	$(this).addClass('on').siblings().removeClass('on');
	$('.fadines .itemg').eq(n).show().siblings().hide();
	$('.slide_gem .slide_top .fadines ul li').removeClass('on');
    $('.bofan img').attr('src','images/yuyin_11.jpg');
    $('.compose').text('立即合成');
    var audio = document.getElementById('myMusic');
    if(audio!==null){
        //检测播放是否已暂停.audio.paused 在播放器播放时返回false.
        if(!audio.paused) {
            audio.pause();// 这个就是暂停
        }
    }
});


$(document).on("click","input[type=range]",function(e){
	$(this).next().html($(this).val())
});
$('.slide_gem .slide_top .fadines ul li').click(function(){
	$(this).addClass('on').siblings().removeClass('on');
    $('.bofan img').attr('src','images/yuyin_11.jpg');
    $('.compose').text('立即合成');
    var audio = document.getElementById('myMusic');
    if(audio!==null){
        //检测播放是否已暂停.audio.paused 在播放器播放时返回false.
        if(!audio.paused) {
            audio.pause();// 这个就是暂停
        }
    }
});

$('.addFavorite').click(function() {
	var url = window.location;
	var title = document.title;
	var ua = navigator.userAgent.toLowerCase();
	if (ua.indexOf("360se") > -1) {
		alert("由于360浏览器功能限制，请按 Ctrl+D 手动收藏！");
	}
	else if (ua.indexOf("msie 8") > -1) {
		window.external.AddToFavoritesBar(url, title); //IE8
	}
	else if (document.all) {//IE类浏览器
		try{
			window.external.addFavorite(url, title);
		}catch(e){
			alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
		}
	}
	else if (window.sidebar) {//firfox等浏览器；
		window.sidebar.addPanel(title, url, "");
	}
	else {
		alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
	}
});