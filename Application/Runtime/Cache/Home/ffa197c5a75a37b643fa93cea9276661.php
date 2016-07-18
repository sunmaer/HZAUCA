<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>华中农业大学计算机协会</title>
    <link rel="stylesheet" type="text/css" href="/HZAUCA/Public/css/index.css">
    <link rel="shortcut icon" href="/HZAUCA/Public/image/HZAUCA.ico" type="image/x-icon" />
    <script type="text/javascript" src="/HZAUCA/Public/js/bigimg.js"></script>
    <script type="text/javascript" src="/HZAUCA/Public/js/index.js"></script>
</head>
<body >
<div id="container">   
    <div id="bgimage"><img  class="blur" src="/HZAUCA/Public/image/11.jpg" /></div>
        <div id="header">
            <img class="logo" src="/HZAUCA/Public/image/logo.png" />
            <p class="name">H Z A U C A</p>
            <ul id="nav">
                <li><a href="<?php echo U('Index/index');?>" class="nav">首页</a></li>
                <li><a href="<?php echo U('Index/xhdt','','');?>" class="nav">协会动态</a></li>
                <li onmouseover="changeHe1()" onmouseout="defaultHe1()">部门风采
                <ul id="ul1">
                    <li><a href="#">零度工作室</a></li>
                    <li><a href="#">硬件组</a></li>
                    <li><a href="#">office组</a></li>
                    <li><a href="#">ACM组</a></li>
                </ul></li>
                <li onmouseover="changeHe2()" onmouseout="defaultHe2()">计协特色
                <ul id="ul2">
                    <li><a href="<?php echo U('Index/zxbx','','');?>">在线报修</a></li>
                    <li><a href="<?php echo U('Index/jnpx','','');?>">技能培训</a></li>
                    <li><a href="<?php echo U('Index/jsbk','','');?>">技术博客</a></li>
                </ul></li>
                <li onmouseover="changeHe3()" onmouseout="defaultHe3()">资源下载
                <ul id="ul3">
                    <li><a href="<?php echo U('Index/zyxz','','');?>">软件</a></li>
                    <li><a href="<?php echo U('Index/zyxz','','');?>">工具</a></li>
                    <li><a href="<?php echo U('Index/zyxz','','');?>">电影</a></li>
                    <li><a href="<?php echo U('Index/zyxz','','');?>">游戏</a></li>
                </ul></li>
                <li onmouseover="changeHe4()" onmouseout="defaultHe4()">项目开发
                <ul id="ul4">
                    <li><a href="<?php echo U('Index/xmkf','','');?>">网页制作</a></li>
                    <li><a href="<?php echo U('Index/xmkf','','');?>">办公自动化</a></li>
                    <li><a href="<?php echo U('Index/xmkf','','');?>">美工美化</a></li>
                </ul></li>
                <li onmouseover="changeHe5()" onmouseout="defaultHe5()">关于我们
                <ul id="ul5">
                    <li><a href="<?php echo U('Index/jxjs','','');?>">计协介绍</a></li>
                    <li><a href="#">加入我们</a></li>
                    <li><a href="<?php echo U('Index/yjfk','','');?>">意见反馈</a></li>
                </ul></li>
            </ul>
        </div>
<div class="zxbx-wrapper">
	<h1>维修表单</h1>	
	<form action="">
		<div class="zxbx-name">
			<p>姓名</p><span class="icon icon-name"></span><input type="text" required="required" />
		</div>
		<div class="zxbx-contact1">
			<p>联系方式</p><span class="icon icon-phone"></span><input type="text" required="required" />
		</div>
		<div class="zxbx-contact2">
			<p>邮箱</p><span class="icon icon-email"></span><input type="text" required="required" />
		</div>
		<div class="zxbx-class">
			<p>学院-专业-班级</p><span class="icon icon-class"></span><input type="text" required="required" />
		</div>
		<div class="zxbx-div1">
			<p>公寓</p><span class="icon icon-dor"></span><input type="text" required="required" />
		</div>
		<div class="zxbx-div2">
			<p>楼栋</p><span class="icon icon-lou"></span><input type="text" required="required" />
		</div>
		<div class="zxbx-div3">
			<p>房间</p><span class="icon icon-room"></span><input type="text" required="required" />
		</div>
		<div class="zxbx-pheno">
			<p>故障现象</p>
			<input  type="checkbox" required="required" /><span>系统重装</span>
			<input  type="checkbox" required="required" /><span>电脑硬件</span>
			<input  type="checkbox" required="required" /><span>网络设备</span>
			<input  type="checkbox" required="required" /><span>外设</span>
			<input  type="checkbox" required="required" /><span>电脑中毒</span>
			<input  type="checkbox" required="required" /><span>其他</span>
		</div>
		<div>
			<p>详细描述故障现象</p><span class="icon icon-contents"></span><textarea></textarea>
		</div>
		<input type="submit" value="提 交" required="required"/>
	</form>
</div>
</div>
<div id="footer">
    	<div class="info">
    		<ul>计协特色
				<li><a href="#">在线报修</a></li>
				<li><a href="#">技术博客</a></li>
				<li><a href="#">网页制作</a></li>
				<li><a href="#">电脑硬件</a></li>
    		</ul>
    		<ul>关于我们
    			<li><a href="#">计协介绍</a></li>
    			<li><a href="#">加入我们</a></li>
    			<li><a href="#">联系我们</a></li>
    			<li><a href="#">投诉建议</a></li>
    		</ul>
    		<ul>关于我们
    			<li><a href="#">计协介绍</a></li>
    			<li><a href="#">加入我们</a></li>
    			<li><a href="#">联系我们</a></li>
    			<li><a href="#">投诉建议</a></li>
    		</ul>
    		<ul>友情链接
    			<li><a href="#">HZAU</a></li>
    			<li><a href="#">HZAU COI</a></li>
    			<li><a href="#">W3School</a></li>
    			<li><a href="#">w3cfuns</a></li>
    		</ul>
    		<div class="contact">
    			<img src="/HZAUCA/Public/image/q.png">
    			<img src="/HZAUCA/Public/image/w.png">
    			<img src="/HZAUCA/Public/image/t.png">
    			<img src="/HZAUCA/Public/image/s.png">
    		</div>
    	</div>
    		<div class="line"></div>
    		<div class="copyright">
    			<p>Copyright © 2016 HZAUCA.com All Rights Reserved.</p>
    			<p>Designed & Powered by 零度工作室<img src="/HZAUCA/Public/image/0logo.png"></p>
    		</div>
</div>
</body>
</html>