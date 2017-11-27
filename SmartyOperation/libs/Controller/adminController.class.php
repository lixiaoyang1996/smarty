<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/24
 * Time: 9:33
 */
class adminController{

    function index(){
        if(isset($_SESSION['flag'])){
            header('location:bookList.php?controller=book');
        }else{
            VIEW::display("login.html");
        }
    }
    function login(){
        $Obj = M('admin');
        $result = $Obj->loginCheck();
        if($result){
           $this->showMessage('登陆成功','bookList.php?controller=book');
        }else{
            $this->showMessage('登录失败','bookList.php?controller=admin');
        }
    }
    private function showMessage($info, $url)
    {
        echo "<script>alert('$info');window.location.href='$url'</script>";
        exit;
    }
}