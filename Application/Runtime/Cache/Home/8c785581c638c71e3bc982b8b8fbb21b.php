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
		<p class="title">协会动态</p>
			<ul>
				<li>新闻通知</li>
				<li>协会活动</li>
				<li>技能培训</li>
				<li>技术博客</li>
			</ul>
		<div class="clearfix"></div>
		<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="article">
			<img class="photo" src="/HZAUCA2.0/Public/image/img11.jpg" alt="">
			<div class="article-info">
				<a class="article-title" href="<?php echo U('Home/Index/contents','','');?>/aid/<?php echo ($vo["aid"]); ?>"><?php echo ($vo["theme"]); ?></a>
				<p class="author">
				<span class="type"><?php echo ($vo["type"]); ?></span>
				<span class="icon-time"></span><?php echo ($vo["date"]); ?>
				</p>
			</div>
			<div class="clearfix"></div>
			<div class="article-keywords">
				主要内容：<?php echo ($vo["mcontents"]); ?>
			</div>
			<a href="<?php echo U('Home/Index/contents','','');?>/aid/<?php echo ($vo["aid"]); ?>" class="article-contents">
				<?php echo ($vo["allcontents"]); ?>
			</a>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
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
</body>
</html>