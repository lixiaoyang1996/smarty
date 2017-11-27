<?php
/* Smarty version 3.1.31, created on 2017-11-27 08:23:23
  from "E:\XAMPP\htdocs\smartyTest\SmartyDom\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a1bbd6b1a3611_46537009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cec18d4b2e262352b666e0fd121af1b855a2bc30' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\smartyTest\\SmartyDom\\templates\\index.tpl',
      1 => 1511767401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1bbd6b1a3611_46537009 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_test')) require_once 'E:\\XAMPP\\htdocs\\smartyTest\\SmartyDom\\libs\\ORG\\Smarty\\plugins\\modifier.test.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>
		<?php ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>

	</title>
	<style type="text/css">
		p{
			color:<?php ob_start();
echo $_smarty_tpl->tpl_vars['color']->value;
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>
;
		}
	</style>
</head>
<body>
	<p>what is Smarty!</p>
	


	<?php if ($_smarty_tpl->tpl_vars['c']->value == "vip") {?>
	<?php ob_start();
echo smarty_modifier_test($_smarty_tpl->tpl_vars['time']->value,"Y-m-d H:s");
$_prefixVariable3=ob_get_clean();
echo $_prefixVariable3;?>
	
	<?php } else { ?>
	<?php ob_start();
echo ($_smarty_tpl->tpl_vars['hello']->value).("!!!Isfalse");
$_prefixVariable4=ob_get_clean();
echo $_prefixVariable4;?>

	<?php }?>


</body>
</html><?php }
}
