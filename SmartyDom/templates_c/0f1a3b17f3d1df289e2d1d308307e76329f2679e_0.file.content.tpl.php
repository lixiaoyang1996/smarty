<?php
/* Smarty version 3.1.31, created on 2017-11-16 03:52:28
  from "E:\XAMPP\htdocs\smartyTest\smarty\templates\content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a0cfd6cbba854_02107443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f1a3b17f3d1df289e2d1d308307e76329f2679e' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\smartyTest\\smarty\\templates\\content.tpl',
      1 => 1510800747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0cfd6cbba854_02107443 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_test2')) require_once 'E:\\XAMPP\\htdocs\\smartyTest\\smarty\\libs\\plugins\\block.test2.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('test2', array('replace'=>'true','maxnum'=>29));
$_block_repeat=true;
echo smarty_block_test2(array('replace'=>'true','maxnum'=>29), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

<?php echo $_smarty_tpl->tpl_vars['str']->value;?>

<?php $_block_repeat=false;
echo smarty_block_test2(array('replace'=>'true','maxnum'=>29), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<br><?php }
}
