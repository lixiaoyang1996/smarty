<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/21
 * Time: 18:07
 */

class bookController
{

    //显示bookInfo所有数据
    public function index()
    {
        $bookObj = M('book'); //使用M函数实例化它，并保存到$userObj
        $booksNum = $bookObj->count();//计算员工总数 //使用这个对象中的count方法
        // var_dump($booksNum);
        VIEW::assign(array('booksNum' => $booksNum));//使用封装好的VIEW::assign将$userNum注册到模板中
        VIEW::display('bookList.html');//将制作好的模板引入
    }

    public function bookAdd()
    {
        //判断是否有post数据
        if (empty($_POST)) { //没有post数据，就显示添加，修改的界面
            //读取旧数据，需要传递书籍id $_get['id'],也就是如果有$_get['id']说明是修改
            if (isset($_GET['id'])) {
                $data = M('book')->getBookInfo($_GET['id']);
            } else {
                $data = array();
            }
            VIEW::assign(array('data' => $data));
            VIEW::display('bookAdd.html');
        } else {//进入添加、修改的处理程序
//            print_r($_POST);
            $this->bookSubmit();
        }
    }

    public function delBook()
    {
        //    $bookObj = M('book');
        //    $result = $bookObj->delete();
        //    if($result==3){
        //    $this->showMessage('删除成功','bookList.php?controller=book');
        //    }
        $this->bookDel();
    }

    public function changeStat(){
        $Obj = M('book');
        $result = $Obj->changeStat();
        echo $result;
    }


    private function bookSubmit()
    {
        $result = M('book')->bookSubmit($_POST);
        if ($result == 0) {
            $this->showMessage('操作失败!', 'bookList.php?controller=book&method=bookAdd&id=' . $_POST['id']);
        }
        if ($result == 1) {
            $this->showMessage('添加成功!', 'bookList.php?controller=book');
        }
        if ($result == 2) {
            $this->showMessage('修改成功', 'bookList.php?controller=book');
        }
    }
    
    private function bookDel()
    {
        $result = M('book')->bookDel();
        if ($result == 3) {
            $this->showMessage('删除成功', 'bookList.php?controller=book');
        }
    }


    private function showMessage($info, $url)
    {
        echo "<script>alert('$info');window.location.href='$url'</script>";
        exit;
    }
}
