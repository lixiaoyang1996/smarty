<?php
/* Smarty version 3.1.31, created on 2017-11-16 03:38:23
  from "E:\XAMPP\htdocs\smartyTest\smarty\templates\datetime.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a0cfa1f93cac3_53710044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc4df5cc18cb2619fec38ab0fa97099643ff0b8d' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\smartyTest\\smarty\\templates\\datetime.tpl',
      1 => 1510799901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0cfa1f93cac3_53710044 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_test')) require_once 'E:\\XAMPP\\htdocs\\smartyTest\\smarty\\libs\\plugins\\modifier.test.php';
echo smarty_modifier_test($_smarty_tpl->tpl_vars['time']->value,'Y-m-d H:i:s');?>

<br><?php }
}
