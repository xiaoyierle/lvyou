<?php
/* Smarty version 3.1.30, created on 2017-09-14 04:18:25
  from "D:\wamp\wamp\www\PHP\0911\mvc\template\admin\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b9e6f1471556_77705060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e303f878d7b52213c2243f705e4ff73d981ca56' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\PHP\\0911\\mvc\\template\\admin\\add.html',
      1 => 1505355503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b9e6f1471556_77705060 (Smarty_Internal_Template $_smarty_tpl) {
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
  <link rel="stylesheet" href="<?php echo EDITOR_PATH;?>
themes/default/default.css" />
  <link rel="stylesheet" href="<?php echo EDITOR_PATH;?>
plugins/code/prettify.css" />
  <?php echo '<script'; ?>
 charset="utf-8" src="<?php echo EDITOR_PATH;?>
kindeditor.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 charset="utf-8" src="<?php echo EDITOR_PATH;?>
lang/zh_CN.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 charset="utf-8" src="<?php echo EDITOR_PATH;?>
plugins/code/prettify.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
upload.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
      KindEditor.ready(function(K) {
          var editor1 = K.create('textarea[name="content1"]', {
              cssPath : '<?php echo EDITOR_PATH;?>
plugins/code/prettify.css',
              uploadJson : '<?php echo EDITOR_PATH;?>
php/upload_json.php',
              fileManagerJson : '<?php echo EDITOR_PATH;?>
php/file_manager_json.php',
              allowFileManager : true,
              afterCreate : function() {
                  var self = this;
                  K.ctrl(document, 13, function() {
                      self.sync();
                      K('form[name=example]')[0].submit();
                  });
                  K.ctrl(self.edit.doc, 13, function() {
                      self.sync();
                      K('form[name=example]')[0].submit();
                  });
              }
          });
          prettyPrint();
      });
  <?php echo '</script'; ?>
>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="index.php?m=admin&f=tent&a=addcontent">
      <div class="form-group">
        <div class="label">
          <label>分类标题：</label>
        </div>
        <div class="field">
          <select name="catid" class="input w50">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tents']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </select>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="title" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>缩略图</label>
        </div>
        <div class="field">
          <input type="file" id="file">
          <input type="hidden" id="hidden" name="hidden">
          <div class="box input" id="show" style="width: 300px;height: 100px;border: 1px solid #ccc;margin: 5px 0"></div>
          <div class="progress" style="width: 200px;height: 10px;border: 1px solid #ccc;">
              <div id="inner" style="height: 10px; background: #00AAEE;width: 0;"></div>
          </div>
          <input type="button" id="btn" value="上传" class="button sm-main icon-check-square-o" style="margin-top: 5px;height: ;">
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>推荐位</label>
        </div>
        <div class="field" style="padding-top:8px;">
          <input type="radio" value="0" name="posid" checked>不推荐
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pos']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
          <input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" name="posid"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>描述：</label>
        </div>
        <div class="field">
          <textarea class="input" name="description" style=" height:90px;"></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>内容：</label>
        </div>
        <div class="field">
          <textarea name="content1" class="input" style="height:450px; border:1px solid #ddd;resize: none;"></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="form-group">
        <div class="label">
          <label>发布时间：</label>
        </div>
        <div class="field"> 
          <?php echo '<script'; ?>
 src="js/laydate/laydate.js"><?php echo '</script'; ?>
>
          <input type="date" class="laydate-icon input w50" name="datetime" value=""  data-validate="required:日期不能为空" style="padding:10px!important; height:auto!important;border:1px solid #ddd!important;" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>作者：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="source" value=""/>
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
<?php echo '<script'; ?>
>
    var up=new upload("index.php?m=admin&f=tent&a=upload",{
        fileobj:"#file",
        hiddenobj:"#hidden",
        show:"#show",
        inner:"#inner",
        btn:"#btn"
    });
    up.upload();
    //封装 所有的类 实例化就可以用 一个对象包含所有的功能
    //父类的方法 子类继承后  smarity  jump方法 checklogin方法  后代类继承后可以直接调用
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
