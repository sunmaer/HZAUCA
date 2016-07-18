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
    	<div class="allactivity_top">
                <img src="/HZAUCA2.0/Public/image/manage.png" />
                <p class="manager">全部动态</p>
                <div class="welcome">
                    <p class="title">版块说明</p>
                    <p class="content">你好！欢迎使用 ZeroDegree 后台管理系统 V1.0！</p>
                    <p class="content">你可以在本版块查看协会的所有动态，动态信息一般不需要修改。你还可以点击<a href="<?php echo U('Admin/addactivity');?>" class="alter-Pw">添加动态</a></p>
                </div>
        </div>
        <div class="allactivity">
             <p class="title">所有动态</p>
             <table>
             	<tr class="allactivity_content">
             		<td class="td1"><strong>#</strong></td>
             		<td class="td2"><strong>标题</strong></td>
             		<td class="td3"><strong>类型</strong></td>
                    <td class="td4"><strong>主要内容</strong></td>
                    <td class="td5"><strong>标签</strong></td>
             		<td class="td6"><strong>作者</strong></td>
             		<td class="td7"><strong>时间</strong></td>
                    <td class="td8"><strong>操作</strong></td>
             	</tr>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="allactivity_content1" onmouseover="this.className='allactivity_content2'" onmouseout="this.className='allactivity_content1'">
             		<td class="td1"><?php echo ($vo["aid"]); ?></td>
             		<td class="td2"><?php echo ($vo["theme"]); ?></td>
                    <!-- <?php echo (htmlspecialchars_decode($vo["content"])); ?> -->
             		<td class="td3"><?php echo ($vo["type"]); ?></td>
             		<td class="td4"><?php echo ($vo["mcontents"]); ?></td>
                    <td class="td5"><?php echo ($vo["tags"]); ?></td>
                    <td class="td6"><?php echo ($vo["author"]); ?></td>
             		<td class="td7"><?php echo ($vo["date"]); ?></td>
             		<td class="td8">
             			<a href="<?php echo U('Admin/editactivity','','');?>/aid/<?php echo ($vo["aid"]); ?>" class="allactivity_a1">修改</a>
             			<a href="<?php echo U('Home/Index/index');?>#activity" target="_blank" class="allactivity_a1">查看</a>
             			<a href="<?php echo U('Admin/deleteactivity','','');?>/aid/<?php echo ($vo["aid"]); ?>" onclick="return conf_delact()" class="allactivity_a1">删除</a>
             		</td>
             	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
                <tr class="allactivity_clear"></tr>
             </table>
             <div class="allactivity_page"><?php echo ($page); ?></div>
        </div>
    </div>
</div>
</body>
</html>