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
    <script>
    $(function() {
        $(".alluser-verify").on("click",function() {
                if ($(this).text()=="未完成") {
                        if(confirm("确定维修完成吗")){
                            $(this).removeClass("alluser-abutton");
                            $(this).addClass("alluser-button");
                            $(this).text("已完成");
                        }
                }
                else {
                    if(confirm("确定取消完成吗")) {
                        $(this).removeClass("alluser-button");
                        $(this).addClass("alluser-abutton");
                        $(this).text("未完成");
                    }
                }
            });
    });
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
    </script>

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
    <a href="<?php echo U('Admin/allmember');?>">已完成</a>
    <a href="<?php echo U('Admin/addmember');?>">未完成</a>
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
        <div class="allactivity_top">
                <img src="/HZAUCA2.0/Public/image/manage.png" />
                <p class="manager">添加动态</p>
                <div class="welcome">
                    <p class="title">版块说明</p>
                    <p class="content">你好！欢迎使用 ZeroDegree 后台管理系统 V1.0！</p>
                    <p class="content">你可以在本版块添加新的协会动态，请填写完整的活动信息。</p>
                </div>
        </div>
        <div class="addactivity_left">
            <p class="title">1、具体内容（*默认15px字体，段首使用tab或4个空格，200字以内） </p>
            <form action="<?php echo U('Admin/updateactivity','','');?>/aid/<?php echo ($data["aid"]); ?>" enctype="multipart/form-data" method="post">
            <textarea name="allcontents" id="allcontents" ><?php echo ($data["allcontents"]); ?></textarea>
        </div>
        <div class="addactivity_right1">
            <p class="title">2、设置参数并提交 </p>
            <div class="addactivity_canshu">
                <label for="theme">*标题</label>
                <input type="text" name="theme" id="theme" placeholder="填写标题" required="required" value="<?php echo ($data["theme"]); ?>" />
            </div>
                <div class="addactivity_canshu">
                <label for="type">*类型</label>
                <input type="text" name="type" id="type" placeholder="填写动态类型：义修、培训、通知、博客" required="required" value="<?php echo ($data["type"]); ?>" />
            </div>
            <div class="addactivity_canshu">
                <label for="mcontents">*主要内容</label>
                <input type="text" name="mcontents" id="mcontents" placeholder="填写主要内容" required="required" value="<?php echo ($data["mcontents"]); ?>"/>
            </div>
                <div class="addactivity_canshu">
                <label for="tags">*标签</label>
                <input type="text" name="tags" id="tags" placeholder="填写动态标签" required="required" value="<?php echo ($data["tags"]); ?>"/>
            </div>
            <div class="addactivity_canshu">
                <label for="author">*作者</label>
                <input type="text" name="author" id="author" placeholder="填写作者" required="required" value="<?php echo ($data["author"]); ?>"/>
            </div>
            <div class="addactivity_canshu">
                <label for="date">*时间</label>
                <input type="datetime-local" name="date" id="date" placeholder="填写时间,例如 2016-03-27" required="required" value="<?php echo ($data["date"]); ?>"/>
            </div>
            <p class="addactivity_p"><input class="addactivity_button" onmouseover="this.className='addactivity_buttonch'" onmouseout="this.className='addactivity_button'" type="submit" value="确认发布" /></p>
            </form>  
        </div>
    </div>
    </div>
</body>
</html>