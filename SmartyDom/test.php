<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/17
 * Time: 9:38
 */
require_once ("libs/Controller/testController.class.php");
require_once ("libs/Model/testModel.class.php");
require_once ("libs/View/testView.class.php");

$testController = new testController();
$testController->show();