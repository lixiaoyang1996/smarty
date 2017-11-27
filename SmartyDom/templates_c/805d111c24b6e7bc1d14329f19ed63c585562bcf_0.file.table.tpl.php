<?php
/* Smarty version 3.1.31, created on 2017-11-23 13:47:08
  from "E:\XAMPP\htdocs\smartyTest\SmartyDom\templates\table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a16c34cb14df7_66190940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '805d111c24b6e7bc1d14329f19ed63c585562bcf' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\smartyTest\\SmartyDom\\templates\\table.tpl',
      1 => 1511441220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a16c34cb14df7_66190940 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>人员信息</title>
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
       <a style="margin-top: 50px" href="table.php?do=add" class="btn btn-success">增加</a>
  <table class="table table-bordered" style="margin-top: 50px">
    <tr>
      <th>书号</th>
      <th>书名</th>
      <th>出版社</th>
      <th>价格</th>
      <th>日期</th>
      <th>状态</th>
      <th>操作1</th>
      <th>操作2</th>
    </tr>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value, 'books');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['books']->value) {
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['books']->value['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['books']->value['name'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['books']->value['publish'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['books']->value['price'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['books']->value['timeDate'];?>
</td>
          <td>
        <?php if ($_smarty_tpl->tpl_vars['books']->value['flag'] == 0) {?>
          <a href="" class="btn btn-danger">禁用</a>
        <?php } else { ?>
          <a href="" class="btn btn-success">启用</a>
        <?php }?>

        </td>
          <td>
            <a href="table.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['books']->value['id'];?>
" class="btn btn-primary">修改</a>
        </td>
        <td>
            <a class="btn btn-warning" href="table.php?do=del&id=<?php echo $_smarty_tpl->tpl_vars['books']->value['id'];?>
">删除</a>
        </td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

  </table> 
    </div>
  </div>
</body>
</html>
<?php }
}
