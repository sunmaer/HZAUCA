<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="author" content="孙梦海" />
	<title>后台管理系统</title>
	<link rel="shortcut icon" href="/HZAUCA2.0/Public/image/1404.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="/HZAUCA2.0/Public/css/admin.css">
	<script type="text/javascript" src="/HZAUCA2.0/Public/js/nav.js"></script>
    <script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>

    <!-- kindeditor插件 -->
    <script charset="utf-8" src="/HZAUCA2.0/Public/editor/kindeditor-min.js"></script>
<!--     <script>
    $(function() {
        KindEditor.ready(function(K) {
            window.editor = K.create('#allcontents',{
                resizeType: '0',    //高度可拖动
                width: '610px',
                height: '502px',
                cssData: 'body { font-size: 14px; }',
                fillDescAfterUploadImage: 'true',
                uploadJson: '/HZAUCA2.0/index.php/Admin/Admin/editor_upload',
                afterCreate: function(){ $('.ke-container').css("border", "none")},
                items: [
                    'source', 'preview', '|', 'undo', 'redo', 'cut', 'copy', 'paste',
                    'plainpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
                    'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
                    'superscript', 'clearhtml', 'quickformat', 'selectall', '|', 'fullscreen', '/',
                    'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
                    'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|', 'image',
                    'insertfile', 'table', 'hr', 'emoticons', 'baidumap',
                    'anchor', 'link', 'unlink', '|', 'about'
                ]
            });
        });
    </script> -->

</head>
<body>
    <div class="container">
        <!-- 头部 -->
    	<div class="header">
    		<img src="/HZAUCA2.0/Public/image/6.png" class="logo" /><p class="p1"> 后台管理系统</p>
    		<div>
                <a href="<?php echo U('Admin/Admin/logout');?>"><img src="/HZAUCA2.0/Public/image/loginout.png" class="login"/></a>
                <a href="<?php echo U('Home/Index/index');?>" target="_blank"><img src="/HZAUCA2.0/Public/image/home_page.png" class="login"/></a>
            </div>   
    	</div>
<!-- 头部 -->
<!-- 侧边导航栏 -->
<div id="nav">
 <div class="menu-p"><img src="/HZAUCA2.0/Public/image/12.png" class="menu"/><span>菜单</span></div>
 <p class="p">协会动态</p>
 <div>
    <a href="<?php echo U('Admin/allactivity');?>">所有动态</a>
    <a href="<?php echo U('Admin/addactivity');?>">添加动态</a>        
</div>
<p class="p">维修表单</p>
 <div>
    <a href="<?php echo U('Admin/allform');?>">所有表单</a>
</div>
<p class="p">管理员</p>
 <div>
    <a href="<?php echo U('Admin/alterinformation');?>">修改信息</a>
    <a href="<?php echo U('Admin/admin');?>">帮助信息</a>
</div>
<!-- 版权说明 -->
<p id="copyRight">© 2016&nbsp;&nbsp;HZAUCA 版权所有</p>
</div>
<!-- 侧边导航栏 -->
    	
<!-- 中间 -->
    <div class="wrapper">
    	<div class="addmember_top">
                <img src="/HZAUCA2.0/Public/image/manage.png" />
                <p class="manager">修改个人信息</p>
        </div>
        <div class="clear"></div>
        <div class="addmember_welcome">
            <p class="title">版块说明</p>
            <p class="content">你好！欢迎使用 ZeroDegree 后台管理系统 V1.0！</p>
            <p class="content">你可以在本版块修改个人信息。</p>
            <p class="content">当前可以修改的有：登录密码。</p>
        </div>
        <div class="alterinformation_right">
            <p class="title">修改个人信息 </p>
            <form action="<?php echo U('Admin/updatemanager','','');?>/id/<?php echo ($_SESSION['id']); ?>" method="post">
                <div class="addactivity_canshu">
                <label for="managername">登录昵称</label>
                <input type="text" name="managername" id="managername" readonly="" value="<?php echo ($_SESSION['managername']); ?>"/>
            </div>
            <div class="addactivity_canshu">
                <label for="password">当前登录密码</label>
                <input type="password" name="password" id="password" required="required"/>
            </div>
            <div class="addactivity_canshu">
                <label for="new_password">新密码</label>
                <input type="password" name="new_password" id="new_password" required="required"/>
            </div>
            <div class="addactivity_canshu">
                <label for="conf_new_password">确认新密码</label>
                <input type="password" name="conf_new_password" id="conf_new_password" required="required"/>
            </div>
            <p class="addactivity_p"><input class="addactivity_button" onmouseover="this.className='addactivity_buttonch'" onmouseout="this.className='addactivity_button'" type="submit" value="确认修改" /></p>
            </form>  
        </div>
    </div>
    </div>
</body>
</html>