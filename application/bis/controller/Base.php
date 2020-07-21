<?php

namespace app\bis\controller;

use think\Controller;

class Base extends Controller
{
    //判断用户是否登录
    public function _initialize()
    {
        $isLogin = $this->isLogin();
        if (!$isLogin) {
//         return $this->redirect('login/Index');
            return $this -> success('请先登录',url('login/Index'));
        }

    }
    public function isLogin()
    {
        //获取session值
        $user = $this->getLoginUser();
        if ($user && $user->id) {
            return true;
        }
        else {
            return false;
        }
    }
    public function getLoginUser()
    {
        $account = session('bisAccount', '', 'bis');
        return $account;
    }
}