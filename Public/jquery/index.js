$(function(){
	// 响应式轮播图
	$('.jquery-reslider').reSlider({
		speed:1000,//设置轮播的高度
		delay:5000,//设置轮播的延迟时间
		imgCount:5,//设置轮播的图片数
		dots:true,//设置轮播的序号点
		autoPlay:true//设置轮播是否自动播放
	});
    
	// 移动设备上的导航栏
	$('.m-menu').on('click',function(){
		if($('.m-mask').css('display') == 'none') {
			$('.m-mask').show();
		}
		else {
			$('.m-mask').hide();
		}
	});

	// 清除轮播图绝对定位后的高度
	$('.clearheight').height($(window).height());

    // 滚动条滚动时导航栏增加背景色
    $(window).scroll(function() {
    	if ($(document).scrollTop() > 10) {
			$('#header').removeClass('header').addClass('header1');
		}
		else {
			$('#header').removeClass('header1').addClass('header');
		}
    });
    // 回到顶部效果
    $(window).scroll(function() {
    	if ($(document).scrollTop() > 250) {
			$('.button').show();
			$('.button').animate({
				bottom: 40
			},
			10);
		}
		else {
			$('.button').hide();
			$('.button').animate({
				bottom: -40
			},
			0);
		}
    });
    $('.button').on('click',function(){
    	$('html,body').animate({
    	  	 	scrollTop: 0
    	 },
    	 400);
    });

    // 水平垂直居中
    $(window).resize(function(){
    $('.banner').css({
    position:'absolute',
    left: ($(window).width() - $('.banner').outerWidth())/2,
    top: ($(window).height() - $('.banner').outerHeight())/2,
    });
    });
    //初始化函数
    $(window).resize(); 

//     // 文字的逐渐出现
//     function changeText(cont1,cont2,speed){
// 	var Otext=cont1.text();
// 	var Ocontent=Otext.split("");
// 	var i=0;
// 	function show(){
// 		if(i<Ocontent.length)
// 		{		
// 			cont2.append(Ocontent[i]);
// 			i=i+1;
// 		};
// 	};
// 		var Otimer=setInterval(show,speed);	
// };
// 	$(document).ready(function(){
// 		changeText($(".p1"),$(".p2"),100);
// 		changeText($(".p3"),$(".p4"),150);
// 		clearInterval(Otimer);
// 	});

	// 段落淡入淡出
	$('.p1').fadeIn(1000);
	var Otimer1=setTimeout(function(){
		$('.p2').fadeIn(1000);
	},1000);
	var Otimer2=setTimeout(function(){
		$('.p3').fadeIn(1000);
	},2000);
	
	// 锚点的平滑过渡
	$(function(){  
  	$('a[href*=#],area[href*=#]').click(function() {
    	if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
     	 	var $target = $(this.hash);
      		$target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
        if ($target.length) {
        	var targetOffset = $target.offset().top;
       		 $('html,body').animate({
         	 scrollTop: targetOffset
        },
        600);
        return false;
      }
    }
  });
})
});
