<?php
/* Smarty version 3.1.31, created on 2017-11-27 07:32:44
  from "E:\XAMPP\htdocs\smartyTest\SmartyOperation\tpl\bookList.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a1bb18ca6c537_15633016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b22a68fc1a99272202b1d5ba3b3ed5508b7cc4c' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\smartyTest\\SmartyOperation\\tpl\\bookList.html',
      1 => 1511752815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1bb18ca6c537_15633016 (Smarty_Internal_Template $_smarty_tpl) {
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
		<a class="btn btn-primary" href="bookList.php?controller=book&method=bookAdd">添加书籍</a>
	</div>
	<br>
	<table class="table table-bordered">
		<thead>
		<tr>
			<td>ID</td>
			<td>书名</td>
			<td>出版社</td>
			<td>价格</td>
			<td>日期</td>
			<td>状态</td>
			<td>操作1</td>
			<td>操作2</td>
		</tr>
		</thead>
		<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['booksNum']->value, 'book');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['book']->value['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['book']->value['name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['book']->value['publish'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['book']->value['price'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['book']->value['timeDate'];?>
</td>
			<td>
 			 <?php if ($_smarty_tpl->tpl_vars['book']->value['flag'] == 0) {?>
          	<a href="" class="btn btn-warning" onclick="changeStat(this,<?php echo $_smarty_tpl->tpl_vars['book']->value['id'];?>
)">禁用</a>
       		 <?php } else { ?>
         	 <a href="" class="btn btn-success" onclick="changeStat(this,<?php echo $_smarty_tpl->tpl_vars['book']->value['id'];?>
)">启用</a>
        	<?php }?>
			</td>
			<td>
				<a class="btn btn-primary" href="bookList.php?controller=book&method=bookAdd&id=<?php echo $_smarty_tpl->tpl_vars['book']->value['id'];?>
">修改</a>
			</td>
			<td>
				<a class="btn btn-danger" href="bookList.php?controller=book&method=delBook&id=<?php echo $_smarty_tpl->tpl_vars['book']->value['id'];?>
">删除</a>
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
<?php echo '<script'; ?>
 src="public/js/changeStat.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
