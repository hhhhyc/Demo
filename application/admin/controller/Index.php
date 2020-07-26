<?php
namespace app\admin\controller;

use Map;
use think\Controller;

class Index extends Controller{
    public function  index(){
        return $this->fetch();
    }

    public function welcome(){
//        \phpmailer\Email::send('934695258@qq.com','tp5-email','success!');
//        return'发送成功';
//        return "欢迎来到首页";
    }
    public function  test(){
      print_r(\Map::getLngLat('北京沙河地铁'));
    }
    public function map(){
        return  \Map::staticimage('高埗交警大队');
    }
}