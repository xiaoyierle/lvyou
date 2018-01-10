<?php
/* Smarty version 3.1.30, created on 2017-09-18 11:36:21
  from "D:\wamp\wamp\www\PHP\0911\mvc\template\index\category_browse.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bf9395c6f561_02927222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7f5ddc903ffefd119f1314e3d2da91db0755140' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\PHP\\0911\\mvc\\template\\index\\category_browse.html',
      1 => 1505727380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/common/header.html' => 1,
    'file:index/common/footer.html' => 1,
  ),
),false)) {
function content_59bf9395c6f561_02927222 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
about.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
browse.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
booling.css">
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
                        <h2>一览</h2>
                        <h4>browse</h4>
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
                    <div class="row">
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['con']->value;
$_prefixVariable1=ob_get_clean();
if (isset($_prefixVariable1)) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['con']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <div class="col-sm-6">
                            <a href="index.php?a=showRoute&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&catid=<?php echo $_smarty_tpl->tpl_vars['catid']->value;?>
" class="outer">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
" alt="">
                            </a>
                            <h3><a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></h3>
                            <p class="time"><?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
</p>
                        </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        <?php }?>

                    </div>
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
