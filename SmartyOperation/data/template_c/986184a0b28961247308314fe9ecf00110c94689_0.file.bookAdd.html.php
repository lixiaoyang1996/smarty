<?php
/* Smarty version 3.1.31, created on 2017-11-22 10:53:19
  from "E:\XAMPP\htdocs\smartyTest\SmartyOperation\tpl\bookAdd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a15490f6eafb9_70373306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '986184a0b28961247308314fe9ecf00110c94689' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\smartyTest\\SmartyOperation\\tpl\\bookAdd.html',
      1 => 1511342956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a15490f6eafb9_70373306 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>书籍</title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<form class="form-horizontal" role="form" method="post" action="bookList.php?controller=book&method=bookAdd">
    <div class="form-group">
        <label class="col-sm-offset-1 col-sm-2 control-label">书名</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="name" placeholder="请输入书名" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-offset-1 col-sm-2 control-label">出版社</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="publish" placeholder="请输入出版社"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['publish'])===null||$tmp==='' ? '' : $tmp);?>
">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-offset-1 col-sm-2 control-label">价格</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="price" placeholder="请输入价格" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['price'])===null||$tmp==='' ? '' : $tmp);?>
">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-offset-1 col-sm-2 control-label">日期</label>
        <div class="col-sm-6">
            <input type="date" class="form-control" name="timeDate" placeholder="请输入日期" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['timeDate'])===null||$tmp==='' ? '' : $tmp);?>
">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
            <button type="submit"  class="btn btn-primary btn-lg btn-block">更新</button>
        </div>
    </div>

</form>
</body>
</html><?php }
}
