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
        <div class="top">
                <img src="/HZAUCA2.0/Public/image/manage.png" />
                <p class="manager"><strong class="font_color" ><?php echo ($_SESSION['managername']); ?></strong>，你好！欢迎使用 ZeroDegree 后台管理系统 V1.0！</p>
                <div class="welcome">
                    <p class="title">欢迎</p>
                    <p class="content">你好！欢迎使用 ZeroDegree 后台管理系统 V1.0！管理“计算机协会网站”！</p>
                    <p class="content"><strong class="font_color font_size" ><?php echo ($_SESSION['managername']); ?>&nbsp;</strong>是你当前登录的用户名。如果你是第一次登录你的帐号，请点击<a href="<?php echo U('Admin/alterinformation');?>" class="alter-Pw">更改初始密码</a></p>
                </div>
            </div>
            <div class="middle">
                <div class="welcome">
                    <p class="title">系统使用说明 </p>
                    <p class="content">本系统所有功能请参考左侧菜单，点击菜单将进入对应的管理页面。各个页面都有相应的版块说明，描述了该板块的内容、功能以及使用方法。</p>
                </div>
            </div>
            <div class="bottom">
                <div class="welcome">
                    <p class="title">关于本系统</p>
                    <p class="content">ZeroDegree 后台管理系统 V1.0</p>
                    <p class="content">本系统由孙梦海开发，版权归华中农业大学零度工作室所有。</p>
                    <p class="content">如果您在使用过程中遇到什么问题，或者出现漏洞、错误，请联系我，或者计科1404班。</p>
                    <p class="content">QQ：878131732 &nbsp;&nbsp;&nbsp;E-mail：878131732@qq.com</p>
                    <p class="content">联系地址：荟五636</p>
                </div>
            </div>
    </div>
</div>
</body>
</html>