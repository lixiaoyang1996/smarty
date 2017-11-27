<?php
/* Smarty version 3.1.31, created on 2017-11-20 02:26:46
  from "E:\XAMPP\htdocs\smartyTest\templates\content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a122f56258739_59382393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9acab12ad61e000cd7784a602893812bbc0ab1f' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\smartyTest\\templates\\content.tpl',
      1 => 1511141175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a122f56258739_59382393 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_test2')) require_once 'E:\\XAMPP\\htdocs\\smartyTest\\libs\\ORG\\Smarty\\plugins\\block.test2.php';
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
