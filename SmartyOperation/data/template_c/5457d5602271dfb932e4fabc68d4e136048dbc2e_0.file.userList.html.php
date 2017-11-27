<?php
/* Smarty version 3.1.31, created on 2017-11-21 14:30:07
  from "E:\XAMPP\htdocs\smartyTest\SmartyOperation\tpl\bookList.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a142a5fcd9c89_20788607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5457d5602271dfb932e4fabc68d4e136048dbc2e' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\smartyTest\\SmartyOperation\\tpl\\bookList.html',
      1 => 1511271006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a142a5fcd9c89_20788607 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="container">
	<div>
		<a class="btn btn-primary" href="">添加</a>
	</div>
	<br>
	<table class="table table-bordered">
		<thead>
		<tr>
			<td>ID</td>
			<td>姓名</td>
			<td>性别</td>
			<td>年龄</td>
			<td>操作1</td>
			<td>操作2</td>
		</tr>
		</thead>
		<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usersNum']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['user']->value['sex'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['user']->value['age'];?>
</td>
			<td>
				<a class="btn btn-primary" href="">修改</a>
			</td>
			<td>
				<a class="btn btn-warning" href="">删除</a>
			</td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

		</tbody>
	</table>
</div>
</body>
</html><?php }
}
