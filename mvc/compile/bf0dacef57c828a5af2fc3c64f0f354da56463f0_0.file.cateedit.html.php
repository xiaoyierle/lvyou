<?php
/* Smarty version 3.1.30, created on 2017-09-14 10:52:53
  from "D:\wamp\wamp\www\PHP\0911\mvc\template\admin\cateedit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ba4365ac4887_48729447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf0dacef57c828a5af2fc3c64f0f354da56463f0' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\PHP\\0911\\mvc\\template\\admin\\cateedit.html',
      1 => 1505379005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ba4365ac4887_48729447 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改分类</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="index.php?m=admin&f=cat&a=updatecat">
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
      <div class="form-group">
        <div class="label">
          <label>栏目名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>栏目模版：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="temp_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['temp_name'];?>
" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>排序：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="num" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['num'];?>
"  data-validate="number:排序必须为数字" />
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
</body></html><?php }
}
