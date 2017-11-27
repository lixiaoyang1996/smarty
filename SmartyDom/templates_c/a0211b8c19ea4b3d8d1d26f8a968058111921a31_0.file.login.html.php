<?php
/* Smarty version 3.1.31, created on 2017-11-23 12:42:57
  from "E:\XAMPP\htdocs\smartyTest\SmartyDom\templates\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a16b4419e3223_67768731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0211b8c19ea4b3d8d1d26f8a968058111921a31' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\smartyTest\\SmartyDom\\templates\\login.html',
      1 => 1511437332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a16b4419e3223_67768731 (Smarty_Internal_Template $_smarty_tpl) {
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
		<form class="form-horizontal" role="form" method="post" action="table.php?do=doLogin">
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
