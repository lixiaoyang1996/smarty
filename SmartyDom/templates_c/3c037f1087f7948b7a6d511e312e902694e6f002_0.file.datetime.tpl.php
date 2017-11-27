<?php
/* Smarty version 3.1.31, created on 2017-11-20 02:26:46
  from "E:\XAMPP\htdocs\smartyTest\templates\datetime.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a122f56181981_23611567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c037f1087f7948b7a6d511e312e902694e6f002' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\smartyTest\\templates\\datetime.tpl',
      1 => 1511141181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a122f56181981_23611567 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_test')) require_once 'E:\\XAMPP\\htdocs\\smartyTest\\libs\\ORG\\Smarty\\plugins\\modifier.test.php';
echo smarty_modifier_test($_smarty_tpl->tpl_vars['time']->value,'Y-m-d H:i:s');?>

<br><?php }
}
