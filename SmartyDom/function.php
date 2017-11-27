<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/16
 * Time: 10:56
 */
function C($name, $method){//$name 控制器的名字  $method 执行的方法
    require_once("libs/Controller/'.$name.'Controller.class.php");
//    $testController = new testController();
//    $testController->show();

//    $controller = $name.'controller';
//    $obj = new $controller();
//    $obj->$method();

    eval('$obj = new '.$name.'Controller();$obj->'.$method.'();');
}
C('test','show');

function M($name){
    require_once("libs/Model/'.$name.'Model.class.php");
    //$testModel = new testModel();

//    $model = $name.'Model';
//    $obj = new $model();

    eval('$obj = new '.$name.'Model();');
    return $obj;
}

function V($name){
    require_once("libs/View/'.$name.'View.class.php");
    //$testView = new testView();

//    $view = $name.'View';
//    $obj = new $view();
    eval('$obj = new '.$name.'View();');
    return $obj;
}

function ORG($path,$name,$params=array()){
    //path 是路径 name是第三方类名 params是该类初始化的时候需要指定、赋值的属性，格式化为array(属性名=>属性值)
    require_once ('libs/ORG/'.$path.$name.'.class.php');
    $obj = new $name();
    if(!empty($params)){
        foreach ($params as $key=>$value){
            $obj->$key = $value;
        }
    }
    return $obj;
}
function daddslashes($str){//过滤非法参数
    return (!get_magic_quotes_gpc())?addslashes($str):$str;
}