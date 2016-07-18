<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<title>协会动态</title>
    <link rel="shortcut icon" href="/HZAUCA2.0/Public/image/HZAUCA.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="/HZAUCA2.0/Public/css/activity.css">
	<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
	<!-- <script src="/HZAUCA2.0/Public/jquery/index.js"></script>  -->
	<script>
	$(function(){
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
	    // 移动设备上的导航栏
	    $('.m-menu').on('click',function(){
	    	if($('.m-mask').css('display') == 'none') {
	    		$('.m-mask').show();
	    	}
	    	else {
	    		$('.m-mask').hide();
	    	}
	    });
		});
	</script>
</head>
<body>
	<div id="header" class="header">
		<div class="center">
			<div class="logo">
				<img src="/HZAUCA2.0/Public/image/logo.png" />
				<p class="name">HZAUCA</p>
			</div>
			<div class="m-menu">
				<span class="icon-menu"></span>
			</div>
			<div class="nav">
				<ul>
					<li class="li-active">首页</li>
					<li><a href="<?php echo U('Home/Index/index#xhdt');?>">协会动态</a></li>
					<li><a href="<?php echo U('Home/Index/index#bmfc');?>">部门风采</a></li>
					<li><a href="<?php echo U('Home/Index/index#zxbx');?>">在线报修</a></li>
					<li><a href="<?php echo U('Home/Index/index#gywm');?>">关于我们</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="m-mask">
		<ul class="m-nav">
			<li><a href="<?php echo U('Home/Index/index#');?>">首页</a></li>
			<li><a href="<?php echo U('Home/Index/index#xhdt');?>">协会动态</a></li>
			<li><a href="<?php echo U('Home/Index/index#bmfc');?>">部门风采</a></li>
			<li><a href="<?php echo U('Home/Index/index#zxbx');?>">在线报修</a></li>
			<li><a href="<?php echo U('Home/Index/index#gywm');?>">关于我们</a></li>
		</ul>
	</div>
	<div class="container">
		<p class="ac-title">【<?php echo ($data["theme"]); ?>】</p>
		<div class="ac-info">
			<span class="icon-tags"></span><?php echo ($data["tags"]); ?>&nbsp;&nbsp;&nbsp;<span class="hr"></span>&nbsp;&nbsp;&nbsp;
			<span class="icon-author"></span><?php echo ($data["author"]); ?>&nbsp;&nbsp;&nbsp;<span class="hr thidden"></span><span class="thidden">&nbsp;&nbsp;&nbsp;</span>
			<span class="icon-time thidden"></span><span class="thidden"><?php echo ($data["date"]); ?></span>
		</div>
		<div class="ac-contents">
			<?php echo ($data["allcontents"]); ?>
		</div>
		<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div><span class="share">分享到：</span>
		<!-- UY BEGIN -->
<div id="uyan_frame" class="hidden"></div>
<script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js"></script>
<!-- UY END -->
	</div>
	<div class="centerlink">
	<hr>
	<span class="friendlink">友情链接：</span> 
	<ul  class="link">
		<li><a href="#">华中农业大学</a></li>
		<li><a href="#">华中农业大学信息学院</a></li>
		<li><a href="#">零度工作室</a></li>
		<li><a href="#">沸点工作室</a></li>
		<li><a href="#">慕课网</a></li>
		<li><a href="#">前端网</a></li>
		<li><a href="#">CSDN</a></li>
		<li><a href="#">w3school</a></li>
		<li><a href="http://www.mydrivers.com/" target="_blank">
		快科技</a></li>
		<li><a href="http://www.gfan.com" target="_blank">
		机锋网</a></li>
		<li><a href="http://www.romzhijia.net/" target="_blank">
		ROM之家</a></li>
		<li><a href="http://www.itindex.com/" target="_blank">
		IT之家</a></li>
		<li><a href="http://www.feng.com" target="_blank">
		威锋网</a>
		</li><li>
		<a href="http://www.fengniao.com/" target="_blank">
		蜂鸟网</a></li>
		<li><a href="http://www.iheima.com/" target="_blank">
		i黑马</a></li>
		<li><a href="http://www.tuicool.com/" target="_blank">
		推酷网</a></li>
		<li><a href="http://www.yixieshi.com/" target="_blank">
		互联网一些事</a></li>
		<li><a href="http://www.imobile.com.cn/" target="_blank">
		手机之家</a></li>
		<li><a href="http://www.it168.com/" target="_blank">
		IT168</a></li>
		<li><a href="http://www.app111.com/" target="_blank">
		苹果园</a></li>
		<li><a href="http://www.leiphone.com" target="_blank">
		雷锋网</a></li>
		<li><a href="http://ask.zealer.com" target="_blank">
		科技问答</a></li>
	</ul>
	</div>
	<div id="footer">
		<p><span class="chidden">Copyright </span>© 2016 HZAUCA.com All Rights Reserved.</p>
    	<p>Designed & Powered by 零度工作室<img src="/HZAUCA2.0/Public/image/zero.png"></p>
	</div>
	<!-- 回到顶部按钮 -->
	<div class="button" title="回到顶部"><span class="icon-top"></span></div>
	<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"24"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
</body>
</html>