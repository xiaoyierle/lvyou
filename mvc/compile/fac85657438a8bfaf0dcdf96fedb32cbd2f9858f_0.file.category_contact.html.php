<?php
/* Smarty version 3.1.30, created on 2017-09-18 10:02:33
  from "D:\wamp\wamp\www\PHP\0911\mvc\template\index\category_contact.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bf7d999a7212_65786990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fac85657438a8bfaf0dcdf96fedb32cbd2f9858f' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\PHP\\0911\\mvc\\template\\index\\category_contact.html',
      1 => 1505721703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/common/header.html' => 1,
    'file:index/common/footer.html' => 1,
  ),
),false)) {
function content_59bf7d999a7212_65786990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
about.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
contact.css">
<!--<?php echo '<script'; ?>
 type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"><?php echo '</script'; ?>
>-->
<?php echo '<script'; ?>
 type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=HR2EhMYjznGPOdR4LzX3keKABcohof1h"><?php echo '</script'; ?>
>
    <div class="banner">
        <div class="inner">
            <h2>真正的旅行</h2>
            <h3>从来不会追溯汹涌的人潮</h3>
            <p>咨询电话：400 - 000 - 000</p>
        </div>
    </div>
</div>

<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-bg-3 col-md-3 col-sm-3 aboutInner">
                <div class="item">
                    <span>|</span>
                    <div class="guanyu">
                        <h2>联系</h2>
                        <h4>contact</h4>
                    </div>
                    <img src="img/u7ds_qy75.png" alt="">
                </div>
                <ul class="navList">
                    <?php if (isset($_smarty_tpl->tpl_vars['cat']->value)) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <a href="index.php?a=<?php echo $_smarty_tpl->tpl_vars['v']->value['temp_name'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="navItem">
                        <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

                        <span>&gt;</span>
                    </a>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <?php }?>
                </ul>
            </div>
            <div class="col-lg-9 col-bg-9 col-md-9 col-sm-9 aboutInner">
                <div class="content">
                    <div class="top">
                        <img src="img/kmwg.png" alt="">
                        <a href="#">首页</a>
                        <span>&gt;&gt;</span>
                        <a href="#">联系</a>
                    </div>
                    <p class="line"></p>
                    <!--<div style="width:770px;height:328px;border:#ccc solid 1px;" id="dituContent"></div>-->
                    <div id="allmap"></div>
                    <div class="row">
                        <div class="col-sm-4 col-center">
                            <img src="<?php echo IMAGES_PATH;?>
qq.jpg" alt="">
                            <h2>384650553</h2>
                        </div>
                        <div class="col-sm-4 col-center">
                            <img src="<?php echo IMAGES_PATH;?>
wb.jpg" alt="">
                            <h2>lvyou</h2>
                        </div>
                        <div class="col-sm-4 col-center">
                            <img src="<?php echo IMAGES_PATH;?>
wx.jpg" alt="">
                            <h2>lvyou</h2>
                        </div>
                        <div class="col-sm-4 col-center">
                            <img src="<?php echo IMAGES_PATH;?>
tel.png" alt="">
                            <h2>400-0000-0000</h2>
                        </div>
                        <div class="col-sm-4 col-center">
                            <img src="<?php echo IMAGES_PATH;?>
eml.png" alt="">
                            <h2>wangzhengyi000@126.com</h2>
                        </div>
                        <div class="col-sm-4 col-center">
                            <img src="<?php echo IMAGES_PATH;?>
adress.png" alt="">
                            <h2>山西省太原市</h2>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:index/common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
category_contact.js"><?php echo '</script'; ?>
>
</html><?php }
}
