<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>管理员登录</title>
	<link rel="shortcut icon" href="/HZAUCA2.0/Public/image/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="/HZAUCA2.0/Public/css/login.css">
</head>
<body>
    <div class="container">
    	<div class="logo">
    	    <img src="/HZAUCA2.0/Public/image/6.png">
    		<p>欢迎登录后台管理系统</p>
    	</div>
    	<div class="login">
    		<form action="<?php echo U('Admin/Login/login');?>" method="post">
                <img src="/HZAUCA2.0/Public/image/user.png" /> 用户名：
                <input type="text" class="login_input1" name="managername" required="required" /><br />
                <img src="/HZAUCA2.0/Public/image/pw.png" /> 密&nbsp;&nbsp;&nbsp;&nbsp;码：
                <input type="password" class="login_input2" name="password" required="required"/>
                <input type="submit" onmouseover="this.className='changeBg'" onmouseout="this.className='button'"value="登&nbsp;&nbsp;录" class="button"/>
                </form>
    	</div>
    	<div class="copyright">
    		<p>CopyRight©2016&nbsp;&nbsp;计科1404班版权所有</p>
    	</div>
    </div>
</body>
</html>