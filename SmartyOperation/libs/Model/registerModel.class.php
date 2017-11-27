<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/27
 * Time: 9:11
 */
class registerModel{

    function register(){
        $userName = $_REQUEST['userName'];
        $pwd = $_REQUEST['pwd'];


        $sql="select * from admin where userName='{$userName}'";
        $result = DB::query($sql);

        if(mysql_num_rows($result)!=0){
            return 0;
        }else{
            $sql="insert into admin(userName,pwd) values('{$userName}','{$pwd}')";
            DB::query($sql);
            return 1;
        }
    }
}