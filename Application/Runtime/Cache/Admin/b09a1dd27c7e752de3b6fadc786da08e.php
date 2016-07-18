<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="author" content="孙梦海" />
	<title>后台管理系统</title>
	<link rel="shortcut icon" href="/HZAUCA2.0/Public/image/1404.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="/HZAUCA2.0/Public/css/admin.css">
	<script type="text/javascript" src="/HZAUCA2.0/Public/js/nav.js"></script>

    <!-- Ueditor插件 -->
    <!--<script type="text/javascript">
        window.UEDITOR_HOME_URL='__UEDITOR__/';
        window.onload = function(){
            window.UEDITOR_CONFIG.initialFrameWidth=610;
            window.UEDITOR_CONFIG.initialFrameHeight=419;
            UE.getEditor('content');
        }
    </script>
    <script type="text/javascript" src="__UEDITOR__/ueditor.config.js"></script>
    <script type="text/javascript" src="__UEDITOR__/ueditor.all.min.js"></script>-->

    <!-- kindeditor插件 -->
    <script charset="utf-8" src="/HZAUCA2.0/Public/editor/kindeditor-min.js"></script>
    <script>
        KindEditor.ready(function(K) {
            window.editor = K.create('#content',{
                resizeType: '1',    //高度可拖动
                width: '610px',
                height: '527px',
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
    		<img src="/HZAUCA2.0/Public/image/1404.png" class="logo" /><p class="p1"> 后台管理系统</p>
    		<div>
                <a href="<?php echo U('Admin/Admin/logout');?>"><img src="/HZAUCA2.0/Public/image/loginout.png" class="login"/></a>
                <a href="<?php echo U('Home/Index/index');?>" target="_blank"><img src="/HZAUCA2.0/Public/image/home_page.png" class="login"/></a>
            </div>   
    	</div>
<!-- 头部 -->
<!-- 侧边导航栏 -->
<div id="nav">
 <div class="menu-p"><img src="/HZAUCA2.0/Public/image/12.png" class="menu"/><span>菜单</span></div>
 <p class="p">活动管理</p>
 <div>
    <a href="<?php echo U('Admin/allactivity');?>">所有活动</a>
    <a href="<?php echo U('Admin/addactivity');?>">添加活动</a>        
</div>
<p class="p">留言管理</p>
 <div>
    <a href="<?php echo U('Admin/allbbs');?>">所有留言</a>
    <a href="<?php echo U('Admin/addbbs');?>">添加留言</a>
</div>
<p class="p">班级相册</p>
 <div>
    <a href="<?php echo U('Admin/allphoto','','');?>">图片管理</a>
</div>
<p class="p">班级成员</p>
 <div>
    <a href="<?php echo U('Admin/allmember');?>">成员信息</a>
    <a href="<?php echo U('Admin/addmember');?>">添加成员</a>
</div>
<p class="p">管理员</p>
 <div>
    <a href="<?php echo U('Admin/alterinformation');?>">修改信息</a>
    <a href="<?php echo U('Admin/admin');?>">帮助信息</a>
</div>
<!-- 版权说明 -->
<p id="copyRight">©2016&nbsp;&nbsp;计科1404班</p>
</div>
<!-- 侧边导航栏 -->
    	
<!-- 中间 -->
    <div class="wrapper">
    	<div class="allactivity_top">
                <img src="/HZAUCA2.0/Public/image/manage.png" />
                <p class="manager">全部留言</p>
                <div class="welcome">
                    <p class="title">版块说明</p>
                    <p class="content">你好！欢迎使用S·J·L后台管理系统管理“计科1404班级空间”！</p>
                    <p class="content">你可以在本版块查看所有留言，留言内容不能修改。你还可以点击<a href="<?php echo U('Admin/addbbs');?>" class="alter-Pw">添加留言</a></p>
                </div>
        </div>
        <div class="allactivity">
             <p class="title">所有留言</p>
             <table>
             	<tr class="allactivity_content">
             		<td class="td1"><strong>#</strong></td>
             		<td class="td2"><strong>标题</strong></td>
             		<td class="td3"><strong>留言内容</strong></td>
             		<td class="td4"><strong>留言相关</strong></td>
             		<td class="td5"><strong>留言时间</strong></td>
                    <td class="td6"></td>
             	</tr>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="allactivity_content1" onmouseover="this.className='allactivity_content2'" onmouseout="this.className='allactivity_content1'">
             		<td class="td1"><?php echo ($vo["bid"]); ?></td>
             		<td class="td2"><?php echo ($vo["title"]); ?></td>
             		<td class="td3"><?php echo ($vo["content"]); ?></td>
             		<td class="td4"><?php echo ($vo["user"]); ?>@<?php echo ($vo["for"]); ?></td>
             		<td class="td5"><?php echo ($vo["date"]); ?></td>
             		<td class="td6">
             			<a href="#" class="allactivity_a1">查看</a>
             			<a href="<?php echo U('Admin/deletebbs','','');?>/bid/<?php echo ($vo["bid"]); ?>" onclick="return conf_delbbs()" class="allactivity_a1">删除</a>
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