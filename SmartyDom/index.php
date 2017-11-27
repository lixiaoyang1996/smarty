<?php
/*  加载Smarty类库文件    */
require 'libs/ORG/Smarty/Smarty.class.php';
/*  实例化一个Smarty对象  */
$smarty = new Smarty;
/*  定义各个目录的路径    */
/*  定义模板目录存储位置    */
$smarty->template_dir = 'templates';
/*  定义编译目录存储位置    */
$smarty->compile_dir = 'templates_c';
/*  定义configs文件存储位置    */
$smarty->config_dir = 'config';
/*  定义模板缓存目录    */
$smarty->cache_dir = 'cache';
//smarty模板有高速缓存的功能，如果这里是true的话即打开caching，但是会造成网页不立即更新的问题
$smarty->caching = false;
$smarty->left_delimiter = "{"; //重新定义边界，因为默认边界“{}“符，在html页面中嵌入js脚本文件编写代码段时使用的就是”{}“符，自定义边界符还可以是<{ }>, {/ /} 等
$smarty->right_delimiter = "}";

$color = $_GET['bgcolor'];
$c = $_GET['c'];

$smarty->assign('c',$c); 
$smarty->assign('color',$color);
$smarty->assign("title","INDEX");
$smarty->assign("time",time());
$smarty->assign("hello","this is documemt");
$smarty->display("index.tpl");

