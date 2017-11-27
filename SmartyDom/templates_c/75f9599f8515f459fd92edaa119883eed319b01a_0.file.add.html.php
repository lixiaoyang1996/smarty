<?php
/* Smarty version 3.1.31, created on 2017-11-23 10:21:59
  from "E:\XAMPP\htdocs\smartyTest\SmartyDom\templates\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a1693376da3a7_22626361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75f9599f8515f459fd92edaa119883eed319b01a' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\smartyTest\\SmartyDom\\templates\\add.html',
      1 => 1511428916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1693376da3a7_22626361 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>
		新增
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

<form class="form-horizontal" role="form" method="post" action="table.php?do=doAdd">
	<div class="form-group" style="margin-top: 75px">
		<label for="firstname" class="col-sm-2 control-label">书名</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="firstname"  name="name" 
				   placeholder="请输入书名">
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">出版社</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="firstname"  name="publish" 
				   placeholder="请输入出版社">
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">价格</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="firstname"  name="price" 
				   placeholder="请输入价格">
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">日期</label>
		<div class="col-sm-6">
			<input type="date" class="form-control" id="firstname"  name="timeDate" 
				   placeholder="请输入日期">
		</div>
	</div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <input type="hidden" name="id" value="">
            <button type="submit"  class="btn btn-primary btn-lg btn-block">
			新增
            </button>
        </div>
    </div>
</form>

</body>
</html><?php }
}
