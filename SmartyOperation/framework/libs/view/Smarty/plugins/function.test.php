<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/16
 * Time: 10:26
 */

function smarty_function_test($params){
    //array('参数1'=>'参数值','参数2'=>'参数值')
    //$参数1 = $params['参数1'];
    //$参数2 = $params['参数2'];

    $width = $params['width'];
    $height = $params['height'];
    $area = $width*$height;
    return $area;
}