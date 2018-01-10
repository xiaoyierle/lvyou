<?php
/* Smarty version 3.1.30, created on 2017-09-18 08:16:51
  from "D:\wamp\wamp\www\PHP\0911\mvc\template\index\category_route.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bf64d3a35fc3_68349015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '408b56425325c7bf52b20e55033601d0d5840ef3' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\PHP\\0911\\mvc\\template\\index\\category_route.html',
      1 => 1505715409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/common/header.html' => 1,
    'file:index/common/footer.html' => 1,
  ),
),false)) {
function content_59bf64d3a35fc3_68349015 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
about.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
route.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
admin.css">
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
                        <h2>路线</h2>
                        <h4>route</h4>
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
                    <!--<li class="navItem active">
                        <a href="index.php?a=<?php echo $_smarty_tpl->tpl_vars['v']->value['temp_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
                        <span>&gt;</span>
                    </li>-->
                    <a href="index.php?a=<?php echo $_smarty_tpl->tpl_vars['v']->value['temp_name'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&catid=<?php echo $_smarty_tpl->tpl_vars['catid']->value;?>
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
                        <?php if (isset($_smarty_tpl->tpl_vars['catname']->value)) {?>
                        <a href="index.php?a=<?php echo $_smarty_tpl->tpl_vars['catname']->value['temp_name'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['catname']->value['id'];?>
&catid=<?php echo $_smarty_tpl->tpl_vars['catid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['catname']->value['name'];?>
</a>
                        <?php }?>

                    </div>
                    <p class="line"></p>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['con']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <div class="row" style="margin-bottom: 25px">
                        <div class="col-sm-6">
                            <a href="index.php?a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&catid=<?php echo $_smarty_tpl->tpl_vars['catid']->value;?>
" class="imga">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
" alt="" style="width: 370px;height: 190px;">
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <div class="inner">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['r']->value['id'] == $_smarty_tpl->tpl_vars['v']->value['catid']) {?>
                                <a href="" class="type">[<?php echo $_smarty_tpl->tpl_vars['r']->value['name'];?>
]</a>
                                <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                                <a href="index.php?a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&catid=<?php echo $_smarty_tpl->tpl_vars['catid']->value;?>
" class="season"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
                                <p class="price">价格： <span>123</span></p>
                                <div>
                                    <?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <div class="pagelist">
                        <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:index/common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
