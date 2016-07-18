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
                <p class="manager">班级成员</p>
                <div class="welcome">
                    <p class="title">版块说明</p>
                    <p class="content">你好！欢迎使用S·J·L后台管理系统管理“计科1404班级空间”！</p>
                    <p class="content">你可以在本版块查看成员信息，成员信息一般不做修改。你还可以点击<a href="<?php echo U('Admin/addmember');?>" class="alter-Pw">添加成员</a></p>
                </div>
        </div>
        <div class="allactivity">
             <p class="title">所有成员</p>
             <table>
             	<tr class="allactivity_content">
             		<td class="td1"><strong>#</strong></td>
             		<td class="td5"><strong>姓名</strong></td>
             		<td class="td2"><strong>学号</strong></td>
             		<td class="td4"><strong>职位</strong></td>
             		<td class="td3"><strong>自我介绍</strong></td>
                    <td class="td6"></td>
             	</tr>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="allactivity_content1" onmouseover="this.className='allactivity_content2'" onmouseout="this.className='allactivity_content1'">
             		<td class="td1"><?php echo ($vo["mid"]); ?></td>
                    <td class="td5"><?php echo ($vo["name"]); ?></td>
                    <td class="td2"><?php echo ($vo["studentid"]); ?></td>
                    <td class="td4"><?php echo ($vo["post"]); ?></strong></td>
                    <td class="td3"><?php echo ($vo["instrduction"]); ?></td>
                    <td class="td6">
                        <a href="<?php echo U('Admin/editmember','','');?>/mid/<?php echo ($vo["mid"]); ?>" class="allactivity_a1">修改</a>
             			<a href="<?php echo U('Home/Index/index');?>#member" target="_blank" class="allactivity_a1">查看</a>
             			<a href="<?php echo U('Admin/deletemember','','');?>/mid/<?php echo ($vo["mid"]); ?>" onclick="return conf_delmem()" class="allactivity_a1">删除</a>
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