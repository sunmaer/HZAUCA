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
                <p class="manager">班级成员</p>
                <div class="welcome">
                    <p class="title">版块说明</p>
                    <p class="content">你好！欢迎使用 ZeroDegree 后台管理系统 V1.0！</p>
                    <p class="content">你可以在本版块查看维修表单信息。
                </div>
        </div>
        <div class="allactivity">
             <p class="title">所有成员</p>
             <table>
             	<tr class="allactivity_content">
             		<td class="td1"><strong>#</strong></td>
             		<td class="td3"><strong>姓名</strong></td>
             		<td class="td2"><strong>手机号码</strong></td>
             		<td class="td6"><strong>qq</strong></td>
                    <td class="td5"><strong>故障类型</strong></td>
                    <td class="td4"><strong>故障详细描述</strong></td>
                    <td class="td7"><strong>时间</strong></td>
                    <td class="td8"><strong>状态</strong></td>
             	</tr>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="allactivity_content1" onmouseover="this.className='allactivity_content2'" onmouseout="this.className='allactivity_content1'">
             		<td class="td1"><?php echo ($vo["fid"]); ?></td>
                    <td class="td3"><?php echo ($vo["name"]); ?></td>
                    <td class="td2"><?php echo ($vo["phone"]); ?></td>
                    <td class="td6"><?php echo ($vo["qq"]); ?></td>
                    <td class="td5"><?php echo ($vo["pheno"]); ?></td>
                    <td class="td4"><?php echo ($vo["description"]); ?></td>
                    <td class="td7"><?php echo ($vo["time"]); ?></td>
                    <td class="td8"><a href="<?php echo U('Admin/Admin/shenhe','','');?>/fid/<?php echo ($vo["fid"]); ?>" class="alluser-verify"><?php echo ($vo["status"]); ?></a></td>
             	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
                <tr class="allactivity_clear"></tr>
             </table>
             <div class="allactivity_page"><?php echo ($page); ?></div>
        </div>
    </div>
</div>
</body>
<script>
    $().ready(function() {
    // 表单状态切换
    $('.alluser-verify').each(function() {
        if ($(this).text()=="未完成") {
        // $('.alluser-verify').removeClass("alluser-abutton");
        $(this).addClass("alluser-abutton");
     }
     if ($(this).text()=="已完成") {
        // $('.alluser-verify').removeClass("alluser-abutton");
        $(this).addClass("alluser-button");
     }
    })
});
    // window.onload=function(){
    //     var flag=Math.floor(Math.random()*4);
    //     if(flag==0) {document.getElementById('jsbk-key').style.backgroundColor="#ff7575";}
    //     if(flag==1) {document.getElementById('jsbk-key').style.backgroundColor="#53FF53";}
    //     if(flag==2) {document.getElementById('jsbk-key').style.backgroundColor="#46A3FF";}
    //     if(flag==3) {document.getElementById('jsbk-key').style.backgroundColor="#FFE153";}
    //     for (var i =  1; i <= 10; i++) {
    //         var id="jsbk-key"+i;
    //         var flag=Math.floor(Math.random()*4);
    //         if(flag==0) {document.getElementById(id).style.backgroundColor="#ff7575";}
    //         if(flag==1) {document.getElementById(id).style.backgroundColor="#53FF53";}
    //         if(flag==2) {document.getElementById(id).style.backgroundColor="#46A3FF";}
    //         if(flag==3) {document.getElementById(id).style.backgroundColor="#FFE153";}
    // }
</script>
</html>