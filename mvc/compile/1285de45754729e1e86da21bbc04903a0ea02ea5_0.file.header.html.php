<?php
/* Smarty version 3.1.30, created on 2017-09-18 10:40:20
  from "D:\wamp\wamp\www\PHP\0911\mvc\template\index\common\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bf86747c3d96_84522221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1285de45754729e1e86da21bbc04903a0ea02ea5' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\PHP\\0911\\mvc\\template\\index\\common\\header.html',
      1 => 1505724014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59bf86747c3d96_84522221 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jQuery1.10.2.js"><?php echo '</script'; ?>
>
</head>
<style>

</style>
<body>
<div class="top">
    <div class="nav">
        <div class="container">
            <div class="container-inner">
                <img src="<?php echo IMAGES_PATH;?>
u7ds_qy75.png" alt="">
                <div class="logo">
                    <p class="name">思麦尔旅游</p>
                    <p class="name1">FuTai Tourism</p>
                </div>
                <ul class="navlist">
                    <!--<li><a href="index.php" class="active">首页</a></li>-->
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <li><a href="index.php?a=<?php echo $_smarty_tpl->tpl_vars['v']->value['temp_name'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['catid']->value == $_smarty_tpl->tpl_vars['v']->value['id']) {?>active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
                   <!-- <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data2']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['r']->value['parentid'] == $_smarty_tpl->tpl_vars['v']->value['id']) {?>
                            <li><?php echo $_smarty_tpl->tpl_vars['r']->value['name'];?>
</li>
                        <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                    </ul>-->
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <form action="index.php?a=search" class="nav-input" method="post">
                <!--<div class="nav-input">-->
                    <input type="text" placeholder="请输入关键字" name="text">
                    <input type="submit" value="&#xe61b;">
                <!--</div>-->
                </form>
            </div>
        </div>
    </div><?php }
}
