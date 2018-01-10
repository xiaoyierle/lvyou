<?php
/* Smarty version 3.1.30, created on 2017-09-16 09:36:07
  from "D:\wamp\wamp\www\PHP\0911\mvc\template\index\category_booling.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bcd46794ca52_04597839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba6f8485cdf9fbf18994a544abdeee1cc96655c6' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\PHP\\0911\\mvc\\template\\index\\category_booling.html',
      1 => 1505547079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/common/header.html' => 1,
    'file:index/common/footer.html' => 1,
  ),
),false)) {
function content_59bcd46794ca52_04597839 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
about.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
route.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
booling.css">
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
                        <h2>预约</h2>
                        <h4>booling</h4>
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
                        <a href="#">预约</a>
                    </div>
                    <p class="line"></p>
                    <form action="index.php?a=addcontact" method="post" class="form-horizontal">
                        <table action="index.php?a=addcontact">
                            <p class="tipsyuyue">请仔细填写好下方预约表格，我们的客服人员会在24小时内与您联系，<br>
                                谢谢您的支持与关注！​</p>
                            <div class="form-group">
                                <label for="title" class="control-label col-sm-2 col-sm-offset-1">出发时间</label>
                                <div class="col-sm-6">
                                    <input id="title" type="date" placeholder="请输入内容标题" class="form-control" required name="time">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label col-sm-2 col-sm-offset-1">出行人数</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="请输入出行人数" class="form-control" name="people" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-sm-2 col-sm-offset-1">出行路线</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="请输入出行路线" class="form-control" name="route" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-sm-2 col-sm-offset-1">姓名</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="请输入您的姓名" class="form-control" name="name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-sm-2 col-sm-offset-1">联系电话</label>
                                <div class="col-sm-6">
                                    <input type="tel" placeholder="请输入联系电话" class="form-control" name="tel" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-sm-2 col-sm-offset-1">备注</label>
                                <div class="col-sm-6">
                                    <textarea name="remark" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                            <tr>
                                <td><input type="submit" class="btn btn-default form-control"></td>
                            </tr>
                            <tr>
                                <td><h2>THANKS</h2></td>
                            </tr>
                        </table>
                    </form>
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
