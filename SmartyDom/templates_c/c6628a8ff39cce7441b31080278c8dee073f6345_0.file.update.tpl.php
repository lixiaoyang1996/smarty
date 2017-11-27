<?php
/* Smarty version 3.1.31, created on 2017-11-23 09:50:01
  from "E:\XAMPP\htdocs\smartyTest\SmartyDom\templates\update.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a168bb9c13661_32880050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6628a8ff39cce7441b31080278c8dee073f6345' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\smartyTest\\SmartyDom\\templates\\update.tpl',
      1 => 1511426975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a168bb9c13661_32880050 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>
		更新
	</title>
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
	<?php echo '<script'; ?>
 src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>

<form class="form-horizontal" role="form" method="post" action="table.php?do=doEdit">
	 		<input type="hidden" name="idw" value="<?php echo $_smarty_tpl->tpl_vars['books']->value['id'];?>
"/>
	<div class="form-group" style="margin-top: 75px">
		<label for="firstname" class="col-sm-2 control-label">书名</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="firstname" value="<?php echo $_smarty_tpl->tpl_vars['books']->value['name'];?>
" name="name" >
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">出版社</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="firstname" value="<?php echo $_smarty_tpl->tpl_vars['books']->value['publish'];?>
" name="publish"> 
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">价格</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="firstname" value="<?php echo $_smarty_tpl->tpl_vars['books']->value['price'];?>
" name="price" >
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">日期</label>
		<div class="col-sm-6">
			<input type="date" class="form-control" id="firstname" value="<?php echo $_smarty_tpl->tpl_vars['books']->value['timeDate'];?>
" name="timeDate">
		</div>
	</div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <input type="hidden" name="id" value="">
            <button type="submit"  class="btn btn-primary btn-lg btn-block">
			更新
            </button>
        </div>
    </div>
</form>

</body>
</html><?php }
}
