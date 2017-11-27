<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/21
 * Time: 19:57
 */
class bookModel
{

    public $_table = 'book';

    function count()
    {
        $sql = " select * from {$this->_table}";
        return DB::findAll($sql);
    }

    function getBookInfo($id)
    {
        if (empty($id)) {
            return array();
        } else {
            $id = (int)$_REQUEST['id'];
            $id = intval($id);
            $sql = " select * from {$this->_table} WHERE id=" . $id;
            return DB::findOne($sql);
        }
    }

    function changeStat()
    {
        $id = $_REQUEST['id'];

        $sql = "select flag from {$this->_table} where id=" . $id;
        $result = DB::findOne($sql);
        if ($result['flag'] == 0) {
            $sql = "update {$this->_table} set flag=1 WHERE id=" . $id;
            DB::query($sql);
            return 1;
        } elseif ($result['flag'] == 1) {
            $sql = "update {$this->_table} set flag=0 WHERE id=" . $id;
            DB::query($sql);
            return 0;
        }


    }

    public function bookSubmit($data)
    {
        extract($data);
        if (empty($name) || empty($publish)) {
            return 0;
        }
        $id = daddslashes($id);
        $name = daddslashes($name);
        $publish = daddslashes($publish);
        $price = daddslashes($price);
        $timeDate = daddslashes($timeDate);

        $data = array(//在修改或添加时这段代码共用，主要用if语句判断
            'name' => $name,
            'publish' => $publish,
            'price' => $price,
            'timeDate' => $timeDate
        );
        if ($_POST['id'] != '') {
            DB::update($this->_table, $data, 'id=' . $id);
            return 2;
        } else {
            DB::insert($this->_table, $data);
            return 1;
        }

    }

    public function bookDel()
    {
        $id = (int)$_REQUEST['id'];
        DB::del($this->_table, 'id=' . $id);
        return 3;
    }
}