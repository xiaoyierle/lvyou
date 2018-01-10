<?php
/* Smarty version 3.1.30, created on 2017-09-17 17:20:19
  from "D:\wamp\wamp\www\PHP\0911\mvc\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59be92b3829113_73519852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b42f815224aa689edab0578d748934728e19694' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\PHP\\0911\\mvc\\template\\index\\index.html',
      1 => 1505661616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/common/header.html' => 1,
    'file:index/common/footer.html' => 1,
  ),
),false)) {
function content_59be92b3829113_73519852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="banner">
        <div class="inner">
            <h2>让心灵去旅行</h2>
            <span>————————</span>
            <h3>旅行中的每一个画面 都是你自己想要的</h3>
            <p>EVERY PICTURE OF THE JOURNEY IS WHAT YOU WANT</p>
            <div>立即预约</div>
        </div>
    </div>
</div>
<div class="one">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-bg-3 col-md-3 col-sm-3 tips">
                <img src="<?php echo IMAGES_PATH;?>
1_zhbd.jpg" alt="">
                <h3>一站式自由行服务</h3>
                <p class="h4">机票 酒店 签证 攻略<br>
                    目的地安排 都为您搞定</p>
            </div>
            <div class="col-lg-3 col-bg-3 col-md-3 col-sm-6 tips">
                <img src="<?php echo IMAGES_PATH;?>
2_786y.jpg" alt="">
                <h3>旅行管家保障服务</h3>
                <p class="h4">
                    互联网是旅行管家服务，<br>
                    让您的旅行更加简单！
                </p>
            </div>
            <div class="col-lg-3 col-bg-3 col-md-3 col-sm-3 tips">
                <img src="<?php echo IMAGES_PATH;?>
3_rm1a.jpg" alt="">
                <h3>100%用心服务</h3>
                <p class="h4">
                    超赞酒店 全程直飞 接送机<br>
                    各项增值服务 100%用心服务
                </p>
            </div>
            <div class="col-lg-3 col-bg-3 col-md-3 col-sm-3 tips">
                <img src="<?php echo IMAGES_PATH;?>
4_px02.png" alt="">
                <h3>咨询电话</h3>
                <p class="h4">400 - 000 - 000<br></p>
            </div>
        </div>
        <div class="title">
            <p>ONE</p>
            <span>|</span>
            <div>
                <p>旅游路线</p>
                <p>TOURIST ROUTE</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 route">
                <div class="routeInner">
                    <a href="index.php?a=list_con&id=<?php echo $_smarty_tpl->tpl_vars['one']->value[0]['id'];?>
">
                        <img src="static/images/1.jpg" alt="" class="img1">
                        <img src="static/images/1-1.jpg" alt="" class="img2">
                        <div>
                            <h3><?php echo $_smarty_tpl->tpl_vars['one']->value[0]['name'];?>
</h3>
                            <p>DOMESTIC TRAVEL</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xs-4 route">
                <div class="routeInner">
                    <a href="index.php?a=list_con&id=<?php echo $_smarty_tpl->tpl_vars['one']->value[1]['id'];?>
">
                        <img src="static/images/2.jpg" alt="" class="img1">
                        <img src="static/images/2-2.jpg" alt="" class="img2">
                        <div>
                            <h3><?php echo $_smarty_tpl->tpl_vars['one']->value[1]['name'];?>
</h3>
                            <p>DOMESTIC TRAVEL</p>
                        </div>
                    </a>
                </div>
            </div><div class="col-xs-4 route">
            <div class="routeInner">
                <a href="index.php?a=list_con&id=<?php echo $_smarty_tpl->tpl_vars['one']->value[2]['id'];?>
">
                    <img src="static/images/3.jpg" alt="" class="img1">
                    <img src="static/images/3-3.jpg" alt="" class="img2">
                    <div>
                        <h3><?php echo $_smarty_tpl->tpl_vars['one']->value[2]['name'];?>
</h3>
                        <p>DOMESTIC TRAVEL</p>
                    </div>
                </a>
            </div>
        </div>

        </div>
        <div class="row row3">
            <div class="col-xs-8 route col-xs-offset-4">
                <div class="routeInner" style="height: 288px;">
                    <a href="index.php?a=list_con&id=<?php echo $_smarty_tpl->tpl_vars['one']->value[3]['id'];?>
">
                        <img src="static/images/4.jpg" alt="" class="img1">
                        <img src="static/images/4-1.jpg" alt="" class="img2">
                        <div>
                            <h3><?php echo $_smarty_tpl->tpl_vars['one']->value[3]['name'];?>
</h3>
                            <p> HOT Line</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="title1">
                <p>TWO</p>
                <span>|</span>
                <div>
                    <p>关于我们</p>
                    <p>ABOUT US</p>
                </div>
            </div>
            <div class="two">
                <h3><?php echo $_smarty_tpl->tpl_vars['two']->value[0]['title'];?>
</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['two']->value[0]['description'];?>
</p>
                <div>
                    <a href="index.php?a=category_aboutus&id=9">MORE+</a>
                </div>
            </div>
        </div>
    </div>
    <div class="bgbg"></div>
</div>
<div class="three">
    <div class="container">
        <div class="title2">
            <p>THREE</p>
            <span>|</span>
            <div>
                <p>旅游咨询</p>
                <p>TOURIST ROUTE</p>
            </div>
        </div>
        <div class="row inner">
            <div class="col-xs-3 first">
                <a href="index.php?a=showRoute&id=<?php echo $_smarty_tpl->tpl_vars['threeOne']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['threeOne']->value['thumb'];?>
" alt=""></a>
                <h3>
                    <a href="index.php?a=showRoute&id=<?php echo $_smarty_tpl->tpl_vars['threeOne']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['threeOne']->value['title'];?>
</a>
                </h3>
                <p class="time"><?php echo $_smarty_tpl->tpl_vars['threeOne']->value['time'];?>
</p>
                <p class="content text-justify"><?php echo mb_substr($_smarty_tpl->tpl_vars['threeOne']->value['description'],1,70,"utf-8");?>
......</p>
            </div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['threeMore']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <div class="col-xs-3 sec">
                <div class="sectop">
                    <p class="month"><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['time'],5,2,"utf-8");?>
/<?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['time'],8,2,"utf-8");?>
</p>
                    <p class="year"><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['time'],0,4,"utf-8");?>
</p>
                </div>
                <a href="index.php?a=showRoute&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="sectitle"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
                <p class="content text-justify"><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['description'],1,50,"utf-8");?>
......</p>
                <p class="line"></p>
                <a href="index.php?a=showRoute&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="bottom">&gt;</a>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
</div>
<div class="four">
    <div class="container">
        <div class="title3">
            <p>FOUR</p>
            <span>|</span>
            <div>
                <p>旅游一览</p>
                <p>TRAVEL TO BROWSE</p>
            </div>
        </div>
        <div class="row inner">
            <div class="col-xs-3 part">
                <div class="img">
                    <img src="<?php echo IMAGES_PATH;?>
2je0.jpg" alt="">
                </div>
                <div class="content">
                    <h3>住-宿</h3>
                    <p>你往哪里去，我也往哪里去。你在那里住宿，我也在那里住宿。你的国就是我的国，你的神就是我的神。 根据圣经给我们的权柄，我宣布你们为夫妇。 神所配合的，人不可分开。</p>
                    <a href="index.php?a=list_bro&id=20" class="sbtn">查看</a>
                </div>
            </div>
            <div class="col-xs-3 part">
                <div class="content">
                    <h3>美-食</h3>
                    <p>美食和风景的意义，不是逃避，不是躲藏，不是获取，不是记录，而是在想象之外的环境里，去改变自己的世界观，从此慢慢改变心中真正觉得重要的东西。</p>
                    <a href="index.php?a=list_bro&id=21" class="sbtn">查看</a>
                </div>
                <div class="img">
                    <img src="<?php echo IMAGES_PATH;?>
3_yjhi.jpg" alt="">
                </div>
            </div>
            <div class="col-xs-3 part">
                <div class="img">
                    <img src="<?php echo IMAGES_PATH;?>
2_808g.jpg" alt="">
                </div>
                <div class="content">
                    <h3>风-情</h3>
                    <p>人生中出现的一切，都无法拥有，只能经历。深知这一点的人，就会懂得：无所谓失去，而只是经过而已；亦无所谓失败，而只是经验而已。用一颗浏览的心，去看待人生，一切的得与失、隐与显，都是风景与风情。</p>
                    <a href="index.php?a=list_bro&id=19" class="sbtn">查看</a>
                </div>
            </div>
            <div class="col-xs-3 part">
                <div class="content">
                    <h3>攻-略</h3>
                    <p>书堆很多了不知道看哪本，那就从手头的开始看起；单词总是背不完，那就不要去寻求捷径，从第一个开始背；旅行下不了决心，那就放弃攻略从订机票开始。出发永远是最有意义的事，去做就是了。</p>
                    <a href="index.php?a=list_bro&id=18" class="sbtn">查看</a>
                </div>
                <div class="img">
                    <img src="<?php echo IMAGES_PATH;?>
1_fpqp.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="yuyue"><a href="index.php?a=category_booling&id=7">立即预约</a></div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:index/common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
main.js"><?php echo '</script'; ?>
>
<?php }
}
