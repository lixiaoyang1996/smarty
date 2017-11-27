<?php
/* Smarty version 3.1.31, created on 2017-11-27 09:57:42
  from "E:\XAMPP\htdocs\smarty\SmartyOperation\tpl\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a1bd3861f4267_27961933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc113c3a27aaba76d7123012b4e79b5666dce9e6' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\smarty\\SmartyOperation\\tpl\\register.html',
      1 => 1511771679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1bd3861f4267_27961933 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
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
        <div class="col-sm-6 col-sm-offset-4"><h1>用户注册</h1></div>
        <form class="form-horizontal" role="form" method="post" action="bookList.php?controller=register&method=register">
            <!-- <input type="hidden" name="idw" value="<?php echo $_smarty_tpl->tpl_vars['books']->value['id'];?>
"/> -->
            <div class="form-group" style="margin-top: 100px">
                <label  class="col-sm-2 control-label">用户名</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control"  placeholder="请输入用户名" name="userName" >
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">密码</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control"  name="pwd" placeholder="请输入密码">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <input type="hidden" name="id" value="">
                    <button type="submit"  class="btn btn-primary btn-lg btn-block">
                       注册
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html><?php }
}
