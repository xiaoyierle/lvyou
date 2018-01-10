<?php
/* Smarty version 3.1.30, created on 2017-09-14 11:43:56
  from "D:\wamp\wamp\www\PHP\0911\mvc\template\index\category_yuyue.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ba4f5c8de8f6_99876680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c471b58bd61481c4129c36279bdd029dcd5cefc' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\PHP\\0911\\mvc\\template\\index\\category_yuyue.html',
      1 => 1505382089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/common/header.html' => 1,
    'file:index/common/footer.html' => 1,
  ),
),false)) {
function content_59ba4f5c8de8f6_99876680 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
about.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
route.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
yuyue.css">
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
                    <li class="navItem active">
                        国内游
                        <span>&gt;</span>
                    </li>
                    <li class="navItem">
                        周边游
                        <span>&gt;</span>
                    </li>
                    <li class="navItem">
                        海外游
                        <span>&gt;</span>
                    </li>
                    <li class="navItem">
                        热门路线
                        <span>&gt;</span>
                    </li>
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
                    <table action="">
                        <p class="tipsyuyue">请仔细填写好下方预约表格，我们的客服人员会在24小时内与您联系，<br>
                            谢谢您的支持与关注！​</p>
                        <tr>
                            <td>出发日期</td>
                        </tr>
                        <tr>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td>人数</td>
                        </tr>
                        <tr>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td>路线</td>
                        </tr>
                        <tr>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td>姓名</td>
                        </tr>
                        <tr>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td>电话</td>
                        </tr>
                        <tr>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td>备注</td>
                        </tr>
                        <tr>
                            <td><textarea name="" id="" cols="30" rows="10" ></textarea></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="提交"></td>
                        </tr>
                        <tr>
                            <td>
                                <h2>THANKS</h2>
                            </td>
                        </tr>
                    </table>
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
