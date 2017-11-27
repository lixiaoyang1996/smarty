<?php
/* Smarty version 3.1.31, created on 2017-11-24 03:08:44
  from "E:\XAMPP\htdocs\smartyTest\SmartyOperation\tpl\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a177f2cea7024_77360630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9d31cc1e0b7adfd9da1be75150c6b293db9dbb1' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\smartyTest\\SmartyOperation\\tpl\\login.html',
      1 => 1511488839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a177f2cea7024_77360630 (Smarty_Internal_Template $_smarty_tpl) {
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
            <button type="submit"  class="btn btn-primary btn-lg btn-block">
			登录
            </button>
        </div>
    </div>
</form>
	</div>
</div>
</body>
</html><?php }
}
