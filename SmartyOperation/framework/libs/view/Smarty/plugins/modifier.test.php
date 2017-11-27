<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/16
 * Time: 10:34
 */
function smarty_modifier_test($utime,$format){
    return date($format,$utime);

}