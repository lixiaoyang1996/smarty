<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/27
 * Time: 9:09
 */


class registerController{
    function index(){
        VIEW::display("register.html");
    }
    function register(){
       $this->register1();
    }

    private  function register1(){
        $Obj = M('register');
        $result = $Obj->register();

        if($result==0){
        $this->showMessage('用户已存在','bookList.php?controller=register&method=index');
        }elseif ($result==1){
        $this->showMessage("注册成功",'bookList.php?controller=book');
        }
    }
    private function showMessage($info, $url)
    {
        echo "<script>alert('$info');window.location.href='$url'</script>";
        exit;
    }
}