<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/16
 * Time: 17:36
 */
require_once ('function.php');
require_once('config.php');

//$controllerAllow = array('test','dom','show');
//$methodAllow = array('test','dom');

$view = ORG('Smarty/','Smarty',$viewconfig);

//$controller = in_array($_GET['controller'],$controllerAllow)?daddslashes($_GET['controller']):'dom';
//$method = in_array($_GET['method'],$methodAllow)?daddslashes($_GET['method']):'dom';

$controller = $_GET['controller'];
$method = $_GET['method'];
C($controller,$method);