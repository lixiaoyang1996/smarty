<?php

class indexController
{
    function index()
    {
        VIEW::assign(array('title' => 'Smarty', 'author' => '是什么东西！'));
        VIEW::display('index.html');
    }
}