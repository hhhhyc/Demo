<?php

namespace app\index\controller;

use think\Controller;

class User extends Controller
{
    public function login()
    {
        $user=session('user','','user');
        if($user&&$user->id){
            $this->redirect(url('Index/Index'));
        }
        return $this->fetch();
    }

    public function register()
    {

        if (request()->isPost()) {

            $data = input('post.');

            if (!captcha_check($data['verifycode'])) {
                $this->error('验证码错误');
            }
            //数据校验
            $validate = validate('User');
            if (!$validate->scene('add')->check($data)) {
                $this->error($validate->getError());
            }

            if($data['password']!=$data['repassword']){
                $this->error('两次输入的密码不正确');
            }
            //数据加密
            $data['code'] = mt_rand(100,10000);
            $data['password']=md5($data['password'].$data['code']);

            try{
                $res = model('User')->add($data);
                if($res){
                    $this->success('注册成功',url('user/login'),true);
                }
                else{
                    $this->error('注册失败！');
                }
            }catch (\Exception $e){
                $this->error($e->getMessage());
            }
        } else {
            return $this->fetch();
        }
    }

    public function logincheck(){
        if(!request()->isPost()){
            $this->error('false');
        }
        $data=input('post.');
        try {
            $res = model('User')->getUserByUsername($data['username']);
        }catch (\Exception $e){
            $this->error($e->getMessage());
        }
        if(!$res||$res->status!=1){
            $this->error('用户不存在');
        }
        //判断密码
        if(md5($data['password'].$res->code)!=$res->password){
            $this->error('密码错误');
        }

        //登录记录登录时间
        model('User')->updateById(['last_login_time'=>time()], $res->id);

        //把用户信息记录到session
        session('user',$res,'user');
        $this->success('登录成功',url('Index/Index'));
    }

    public function loginout(){
        //清除session 退出登录
        session(null,'user');
        $this->redirect(url('user/login'));
    }
}
