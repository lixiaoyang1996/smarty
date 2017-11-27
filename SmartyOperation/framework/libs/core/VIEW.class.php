<?php

class VIEW {

    public static $view;

    public static function init($viewtype,$config){//视图引擎的初始化
        self::$view = new $viewtype;
        foreach($config as $key=>$value){
            self::$view -> $key = $value;
        }

    }

    public static function assign($data){
        foreach($data as $key=>$value){
            self::$view->assign($key, $value);
        }
    }

    public static function display($template){
        self::$view->display($template);
    }
}