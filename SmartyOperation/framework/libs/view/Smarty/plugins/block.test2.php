<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/16
 * Time: 10:41
 */
function smarty_block_test2($params,$content){
    $replace = $params['replace'];
    $maxnum = $params['maxnum'];
    if($replace=='true'){
        $content = str_replace('，',',',$content);
        $content =str_replace('。','.',$content);
    }
    $content = substr($content,0,$maxnum);
    return $content;
}