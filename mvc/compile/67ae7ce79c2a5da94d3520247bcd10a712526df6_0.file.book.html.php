<?php
/* Smarty version 3.1.30, created on 2017-09-15 19:09:54
  from "D:\wamp\wamp\www\PHP\0911\mvc\template\admin\book.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bc09621798b7_72362031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67ae7ce79c2a5da94d3520247bcd10a712526df6' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\PHP\\0911\\mvc\\template\\admin\\book.html',
      1 => 1505495391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59bc09621798b7_72362031 (Smarty_Internal_Template $_smarty_tpl) {
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
<form method="post" action="">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 留言管理</strong></div>
    <div class="padding border-bottom">
      <!--<ul class="search">
        <li>
          <button type="button"  class="button border-green" id="checkall"><span class="icon-check"></span> 全选</button>
          <button type="submit" class="button border-red"><span class="icon-trash-o"></span> 批量删除</button>
        </li>
      </ul>-->
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="120">ID</th>
        <th>姓名</th>       
        <th>电话</th>
        <th>人数</th>
        <th>路线</th>
        <th>出发日期</th>
        <th width="25%">备注</th>

        <th>操作</th>       
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
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['tel'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['people'];?>
</td>
           <td><?php echo $_smarty_tpl->tpl_vars['v']->value['route'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['remark'];?>
</td>
          <td><div class="button-group"> <a class="button border-red" href="index.php?m=admin&f=book&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <tr>
        <td colspan="8"><div class="pagelist"> <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div></td>
      </tr>
    </table>
  </div>
</form>
<?php echo '<script'; ?>
 type="text/javascript">

function del(id){
	if(confirm("您确定要删除吗?")){
		
	}
}


<?php echo '</script'; ?>
>
</body></html><?php }
}
