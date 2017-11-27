<?php
/* Smarty version 3.1.31, created on 2017-11-27 10:32:59
  from "E:\XAMPP\htdocs\smarty\SmartyOperation\tpl\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a1bdbcbe7f9b1_40032542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7270b068427360994c2baebe104c02c64a8e2ac1' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\smarty\\SmartyOperation\\tpl\\login.html',
      1 => 1511775155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1bdbcbe7f9b1_40032542 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>
		登录
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
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-4"><h1>图书管理系统</h1></div>
		<form class="form-horizontal" role="form" method="post" action="bookList.php?controller=admin&method=login">
	 		<!-- <input type="hidden" name="idw" value="<?php echo $_smarty_tpl->tpl_vars['books']->value['id'];?>
"/> -->
	<div class="form-group" style="margin-top: 100px">
		<label for="firstname" class="col-sm-2 control-label">用户名</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="firstname" placeholder="请输入用户名" name="userName" >
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">密码</label>
		<div class="col-sm-8">
			<input type="password" class="form-control" id="firstname" name="pwd" placeholder="请输入密码"> 
		</div>
	</div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-8">
            <input type="hidden" name="id" value="">
            <button type="submit"  class="btn btn-primary btn-sm">
			登录
            </button>
			<a href="bookList.php?controller=register&method=index">有账号吗？</a>
        </div>
    </div>
</form>
	</div>
</div>
</body>
</html><?php }
}
