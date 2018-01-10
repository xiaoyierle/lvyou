<?php
/* Smarty version 3.1.30, created on 2017-09-18 02:55:23
  from "D:\wamp\wamp\www\PHP\0911\mvc\template\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bf197b40df24_37200012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd63624bd78a67ef93461011872aafe5665db7117' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\PHP\\0911\\mvc\\template\\admin\\index.html',
      1 => 1505696120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59bf197b40df24_37200012 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
pintuer.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
admin.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="<?php echo IMAGES_PATH;?>
y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l"><a class="button button-little bg-green" href="index.php" target="_blank"><span class="icon-home"></span> 前台首页</a>&nbsp;&nbsp;<a class="button button-little bg-red" href="index.php?m=admin&f=index&a=logout"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>基本设置</h2>
  <ul style="display:block">
    <li><a href="index.php?m=admin&a=showinfo" target="right"><span class="icon-caret-right"></span>网站设置</a></li>
    <li><a href="index.php?m=admin&f=index&a=showpass" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
    <!--<li><a href="page.html" target="right"><span class="icon-caret-right"></span>单页管理</a></li>  -->
    <!--<li><a href="adv.html" target="right"><span class="icon-caret-right"></span>首页轮播</a></li>   -->
    <li><a href="index.php?m=admin&f=book&a=show" target="right"><span class="icon-caret-right"></span>预约管理</a></li>
    <!--<li><a href="column.html" target="right"><span class="icon-caret-right"></span>栏目管理</a></li>-->
  </ul>   
  <h2><span class="icon-pencil-square-o"></span>栏目管理</h2>
  <ul>
    <li><a href="index.php?m=admin&f=tent&a=show" target="right"><span class="icon-caret-right"></span>内容管理</a></li>
    <li><a href="index.php?m=admin&f=tent&a=addtent" target="right"><span class="icon-caret-right"></span>添加内容</a></li>
    <li><a href="index.php?m=admin&f=cat&a=show" target="right"><span class="icon-caret-right"></span>分类管理</a></li>
    <li><a href="index.php?m=admin&f=pos&a=show" target="right"><span class="icon-caret-right"></span>推荐位管理</a></li>
  </ul>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
<?php echo '</script'; ?>
>
<ul class="bread">
  <li><a href="index.php?m=admin&f=index&a=showinfo" target="right" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
  <li><b>当前语言：</b><span style="color:red;">中文</php></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="info.html" name="right" width="100%" height="100%"></iframe>
</div>
<div style="text-align:center;">
<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
</body>
</html><?php }
}
