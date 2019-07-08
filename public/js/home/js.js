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
});


$(document).on("click","input[type=range]",function(e){
	$(this).next().html($(this).val())
});
$('.slide_gem .slide_top .fadines ul li').click(function(){
	$(this).addClass('on').siblings().removeClass('on')
});