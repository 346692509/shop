<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
class Index
{
    public function index()
    {
        return $this->fetch('index');
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
