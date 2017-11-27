<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/24
 * Time: 9:38
 */
class adminModel{
    public $_table = 'admin';

    function loginCheck(){
        $userName = $_POST['userName'];
        $pwd = $_POST['pwd'];

        $sql = "select * from {$this->_table} where userName = '{$userName}'&& pwd = '{$pwd}'";
        return DB::findOne($sql);
    }
}