<?php
/* Smarty version 3.1.31, created on 2017-11-22 05:59:13
  from "E:\XAMPP\htdocs\smartyTest\SmartyDom\table.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a150421e04a19_63909444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c1cc174a79be7ec166b5beb732bbcfc85a476b3' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\smartyTest\\SmartyDom\\table.php',
      1 => 1511326751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a150421e04a19_63909444 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>/*  加载Smarty类库文件    */
require 'libs/ORG/Smarty/Smarty.class.php';

$conn = mysqli_connect("localhost","root","") or die("error connecting");
mysqli_query($conn,"set names 'utf8'");

mysqli_select_db($conn,"bookInfo");

//模拟路由功能
	if(!$_GET){
		home($conn);
	}elseif($_GET['do'] == 'del'){
		del($conn);
	}elseif($_GET['do'] == 'edit'){
		edit();
	}

	function home($conn){
		$smarty = new Smarty;

		$sql = "select * from book";
		$rs = mysqli_query($conn,$sql);

		$book = array();
		while ($row = mysqli_fetch_array($rs)) {
			array_push($book,$row);
		}
		print_r($book);

		$smarty->assign("book",$book);
		$smarty->display("table.php");
	}<?php }
}
