<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<title>华中农业大学计算机协会</title>
    <link rel="shortcut icon" href="/HZAUCA2.0/Public/image/HZAUCA.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="/HZAUCA2.0/Public/css/index.css">
	<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
	<script src="/HZAUCA2.0/Public/jquery/index.js"></script> 
	<!-- Bootstrap CSS -->
	<!-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
	<link href="/HZAUCA2.0/Public/assets/css/main.css" rel="stylesheet" media="screen"/>
	<!-- jQuery --> 
	<script src="/HZAUCA2.0/Public/assets/js/jquery.min.js"></script> 
	<!-- Client JavaScript --> 
	<script src="/HZAUCA2.0/Public/assets/js/jquery.reslider.js"></script> 
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
					<li><a href="#xhdt">协会动态</a></li>
					<li><a href="#bmfc">部门风采</a></li>
					<li><a href="#zxbx">在线报修</a></li>
					<li><a href="#gywm">关于我们</a></li>
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
	<div id="container">
		<!-- 响应式轮播图 -->
		<div class="wrap wrap-index">
		  <!-- slider-->
		  <div class="slider">
		    <div class="jquery-reslider">
		      <div class="slider-block" data-url="/HZAUCA2.0/Public/image/banner1.jpg"></div>
		      <div class="slider-block" data-url="/HZAUCA2.0/Public/image/banner2.jpg"></div>
		      <div class="slider-block" data-url="/HZAUCA2.0/Public/image/banner3.jpg"></div>
		      <div class="slider-block" data-url="/HZAUCA2.0/Public/image/banner4.jpg"></div>
		      <div class="slider-block" data-url="/HZAUCA2.0/Public/image/banner5.jpg"></div>
		      <div class="slider-dots">
		        <ul>
		        </ul>
		      </div>
		    </div>
		  </div>
		  <!-- end build--> 
		</div>
		<!-- <div class="banner">	
				<p class="p">鼓掌庆贺成功者，期待将到来的新时代。</p>
		</div> -->
		<div class="jquery-mask">		
		</div>
		<div class="clearheight">
		</div>
		<a name="xhdt" id="xhdt"></a>
		<div class="xhdt">
			<div class="center">
				<p class="title">协会动态</p>
				<ul class="xhdt-nav">
					<li>新闻<span class="wordhidden">通知</span></li>
					<li><span class="wordhidden">协会</span>活动</li>
					<li><span class="wordhidden">技能</span>培训</li>
					<li><span class="wordhidden">技术</span>博客</li>
					<li><a href="<?php echo U('Home/Index/allActivity','','');?>">更多</a></li>
				</ul>
				<div class="clearfix"></div>
				<div class="section">
					<div class="xhdt-wrapper">
						<div class="xhdt-img"><img src="/HZAUCA2.0/Public/image/img1.jpg" alt=""></div>
						<p class="xhdt-title"><a href="<?php echo U('Home/Index/contents','','');?>/aid/<?php echo ($data[0][aid]); ?>"><?php echo ($data[0][theme]); ?></a></p>
					</div>
					<div class="xhdt-wrapper">
						<div class="xhdt-img"><img src="/HZAUCA2.0/Public/image/img6.jpg" alt=""></div>
						<p class="xhdt-title"><a href="<?php echo U('Home/Index/contents','','');?>/aid/<?php echo ($data[1][aid]); ?>"><?php echo ($data[1][theme]); ?></a></p>
					</div>
					<div class="xhdt-wrapper">
						<div class="xhdt-img"><img src="/HZAUCA2.0/Public/image/img5.jpg" alt=""></div>
						<p class="xhdt-title"><a href="<?php echo U('Home/Index/contents','','');?>/aid/<?php echo ($data[2][aid]); ?>"><?php echo ($data[2][theme]); ?></a></p>
					</div>
					<div class="xhdt-wrapper">
						<div class="xhdt-img"><img src="/HZAUCA2.0/Public/image/img7.jpg" alt=""></div>
						<p class="xhdt-title"><a href="<?php echo U('Home/Index/contents','','');?>/aid/<?php echo ($data[3][aid]); ?>"><?php echo ($data[3][theme]); ?></a></p>
					</div>
					<div class="xhdt-wrapper">
						<div class="xhdt-img"><img src="/HZAUCA2.0/Public/image/img9.jpg" alt=""></div>
						<p class="xhdt-title"><a href="<?php echo U('Home/Index/contents','','');?>/aid/<?php echo ($data[4][aid]); ?>"><?php echo ($data[4][theme]); ?></a></p>
					</div>
					<div class="xhdt-wrapper">
						<div class="xhdt-img"><img src="/HZAUCA2.0/Public/image/img10.jpg" alt=""></div>
						<p class="xhdt-title"><a href="<?php echo U('Home/Index/contents','','');?>/aid/<?php echo ($data[5][aid]); ?>"><?php echo ($data[5][theme]); ?></a></p>
					</div>
					</div>
			</div>
		</div>
		<a name="bmfc" id="bmfc"></a>
		<div class="bmfc">
			<div class="center">
				<p class="bmfc-title">除了修电脑，居然还会...</p>
				<p class="bmfc-info">你听说过秘书处吗？反正我只听说过皇家种地高中。</p>
				<p class="bmfc-info">你听说过宣传部吗？反正我只听说过皇家种地高中。</p>
				<p class="bmfc-info">你听说过硬件组吗？反正我只听说过皇家种地高中。</p>
				<p class="bmfc-info">你听说过OFFICE组吗？反正我只听说过皇家种地高中。</p>
				<p class="bmfc-info">你听说过零度工作室吗？反正我只听说过皇家种地高中。</p>
				<div class="wrap">
					<div class="bmfc-wrapper">
					<p class="bmfc-name"><span class="icon-zero"></span>零度工作室</p>
					<p class="bmfc-member">组长：孙梦海<span class="icon-phone" title="15927366830"></span></p>
					<p class="bmfc-member">介绍</p>
					<p class="bmfc-instr">始于零度，力争沸腾。</p>
				</div>
				<div class="bmfc-wrapper">
					<p class="bmfc-name"><span class="icon-solid"></span>硬件组</p>
					<p class="bmfc-member">组长(会长)：郭武<span class="icon-phone" title="15927366830"></span></p>
					<p class="bmfc-member">介绍</p>
					<p class="bmfc-instr">举办每月的校内大型修电脑活动。</p>
				</div>
				<div class="bmfc-wrapper">
					<p class="bmfc-name"><span class="icon-mishuchu"></span>秘书处</p>
					<p class="bmfc-member">组长：孙梦海<span class="icon-phone" title="15927366830"></span></p>
					<p class="bmfc-member">介绍</p>
					<p class="bmfc-instr">管理协会各种资料档案并负责日常文件。</p>
				</div>
				<div class="bmfc-wrapper">
					<p class="bmfc-name"><span class="icon-xuanchuanbu"></span>宣传部</p>
					<p class="bmfc-member">组长(会长)：郭武<span class="icon-phone" title="15927366830"></span></p>
					<p class="bmfc-member">介绍</p>
					<p class="bmfc-instr">主要负责协会宣传工作和通讯工作。</p>
				</div>
				<div class="bmfc-wrapper">
					<p class="bmfc-name"><span class="icon-office"></span>OFFICE组</p>
					<p class="bmfc-member">组长：熊瑞<span class="icon-phone" title="15927366830"></span></p>
					<p class="bmfc-member">介绍</p>
					<p class="bmfc-instr">暂无介绍</p>
				</div>
				</div>
			</div>
		</div>
		<a name="zxbx" id="zxbx"></a>
		<div class="zxbx">
			<div class="center">
				<p class="title">计协义修</p>
				<ul class="xhdt-nav">
					<li><span class="wordhidden">重装</span>系统</li>
					<li><span class="wordhidden">电脑</span>杀毒</li>
					<li><span class="wordhidden">电脑</span>死机</li>
					<li><span class="wordhidden">电脑</span>清灰</li>
					<li>网络<span class="wordhidden">设备</span></li>
					<li><span class="wordhidden">其他</span></li>
				</ul>
				<div class="clearfix"></div>
				<div class="left">
					<div class="zxbx-wrapper1">
						<p class="zxbx-type">重装系统</p>
						<img  class="zxbx-png" src="/HZAUCA2.0/Public/image/c1.png" alt="">
					</div>
					<div class="zxbx-wrapper2">
						<p class="zxbx-type">电脑清灰</p>
						<img  class="zxbx-png" src="/HZAUCA2.0/Public/image/c2.png" alt="">
					</div>
					<div class="zxbx-wrapper3">
						<p class="zxbx-type">电脑杀毒</p>
						<img  class="zxbx-png" src="/HZAUCA2.0/Public/image/c3.png" alt="">
					</div>
					<div class="zxbx-wrapper4">
						<p class="zxbx-type">硬件维修</p>
						<img  class="zxbx-png" src="/HZAUCA2.0/Public/image/c4.png" alt="">
					</div>
				</div>
				<div class="right">
					<p class="zxbx-title"><span class="icon-diagram"></span>维修表单&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
					<div class="zxbx-table">
						<form action="<?php echo U('Home/Index/addForm');?>" method="post">
							<div class="zxbx-name">
								<p>姓名</p><span class="icon icon-name"></span><input type="text"  name="name" id="name" required="required"/>
							</div>
							<div class="zxbx-mobile">
								<p>手机号码</p><span class="icon icon-mobile"></span><input type="text" required="required" name="phone" id="phone"/>
							</div>
							<div class="zxbx-qq">
								<p>QQ</p><span class="icon icon-qq"></span><input type="text" required="required" name="qq" id="qq"/>
							</div>
							<div class="zxbx-pheno">
								<p>请选择故障现象</p>
								<span class="icon icon-pheno"></span>
								<select name="pheno">
								<option value="重装系统"  selected>重装系统</option>
								<option value="电脑杀毒">电脑杀毒</option>
								<option value="电脑死机">电脑死机</option>
								<option value="电脑清灰">电脑清灰</option>
								<option value="其他">其他</option>
								</select>
							</div>
							<div>
								<p>详细描述故障现象</p>
								<span class="icon icon-contents"></span><textarea name="description" id="description"></textarea>
							</div>
							<input type="submit" value="提 交" />
						</form>
					</div>
				</div>
		</div>
		</div>
		<a name="gywm" id="gywm"></a>
		<div class="gywm">
			<div class="center">
				<p class="bmfc-title">我们是即将放飞理想<span class="icon-fly"></span>的有志青年...</p>
				<p class="gywm-info">华中农业大学计算机协会是学生为主体的群众性组织，受校团委领导，由校社团联合会负责具体管理。协会由理学院湛为芳副教授指导。在1998年成立,现隶属于华中农业大学信息学院。自建立以来，以“推广计算机文化，普及计算机知识”为宗旨,立足农大,面向社会，服务全校同学，开展了一系列计算机及网络的宣传普及工作，取得了不少成绩。同时还立足启发同学们对计算机的探索，致力于为同学解决问题，普及知识，节约时间金钱，培养兴趣。在各个方面受到广大老师和同学的好评。计算机协会下设立5个部门，分别为：零度工作室（web组）、硬件组、OFFICE组、秘书处、宣传部。</p>
				<div class="gywm-sec1">
					<p class="gywm-title">关注我们</p>
					<p class="gywm-content">
						<span class="icon-renren">
						@华中农业大学计算机协会<br>
						<span class="icon-weibo">
						@华中农业大学计算机协会<br>
					</p>
				</div>
				<div class="gywm-sec2">
					<p class="gywm-title">联系我们</p>
					<span class="icon-gywm icon-contactqq"></span><span class="icon-gywm icon-contactweixin"></span><span class="icon-gywm icon-contactemail"></span>
				</div>
				<hr>
				<p class="gywm-friendlink">友情链接：</p>
				<ul  class="gywm-link">
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
		</div>
	</div>
	<div id="footer">
		<p><span class="chidden">Copyright </span>© 2016 HZAUCA.com All Rights Reserved.</p>
    	<p>Designed & Powered by 零度工作室<img src="/HZAUCA2.0/Public/image/zero.png"></p>
	</div>
	<!-- 回到顶部按钮 -->
	<div class="button" title="回到顶部"><span class="icon-top"></div>
</body>
</html>