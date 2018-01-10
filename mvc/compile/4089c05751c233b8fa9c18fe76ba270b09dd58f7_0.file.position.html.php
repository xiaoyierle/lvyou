<?php
/* Smarty version 3.1.30, created on 2017-09-13 03:20:58
  from "D:\wamp\wamp\www\PHP\0911\mvc\template\admin\position.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b887fa762668_94082413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4089c05751c233b8fa9c18fe76ba270b09dd58f7' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\PHP\\0911\\mvc\\template\\admin\\position.html',
      1 => 1505265595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b887fa762668_94082413 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
pintuer.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
admin.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
pintuer.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 推荐位列表</strong></div>
    <div class="padding border-bottom">
        <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加分类</button>
    </div>
    <table class="table table-hover text-center">
        <tr>
            <th width="5%">ID</th>
            <th width="15%">推荐位名称</th>
            <th width="10%">内容条数</th>
            <th width="10%">推荐位排序</th>
            <th width="10%">操作</th>

        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['count'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
</td>
            <td><div class="button-group"> <a class="button border-main" href="index.php?m=admin&f=pos&a=editpos&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="index.php?m=admin&f=pos&a=delpos&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" onclick="return del(1,2)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    function del(id,mid){
        if(confirm("您确定要删除吗?")){

        }
    }
<?php echo '</script'; ?>
>
<div class="panel admin-panel margin-top">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加推荐位</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="index.php?m=admin&f=pos&a=addpos">
            <div class="form-group">
                <div class="label">
                    <label>推荐位名称：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="name" />
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>推荐位排序：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="num" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html><?php }
}
