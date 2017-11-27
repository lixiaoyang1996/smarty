<?php
/* Smarty version 3.1.31, created on 2017-11-20 02:52:43
  from "E:\XAMPP\htdocs\smartyTest\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a12356bb544b5_66139575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f513595770fb8a68f4273be4afa429baf3690e6' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\smartyTest\\templates\\index.tpl',
      1 => 1511142532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a12356bb544b5_66139575 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <style>
        p
        {
            color: <?php echo $_smarty_tpl->tpl_vars['color']->value;?>
;
            size: <?php echo $_smarty_tpl->tpl_vars['size']->value;?>
;
        }
    </style>
</head>
<body>
    <?php echo $_smarty_tpl->tpl_vars['hello']->value;?>

    <p>
        <?php echo $_smarty_tpl->tpl_vars['c']->value;?>

    </p>
</body>
</html><?php }
}
