<?php
namespace app\bis\controller;
use think\Controller;
class Login extends Controller
{
    /**
     * 登录
     * @return string|void
     * @throws \think\exception\DbException
     */
    public function index()
    {
        if (request()->isPost()) {
            //获取输入的数据
            $data = input('post.');
            //根据用户名作为查询条件进行查询
            $ret = model('BisAccount')->get(['username' => $data['username']]);
            if (!$ret || $ret->status != 1) {
                $this->error('该用户不存在或者未授权');
            }
            if($ret->password !=md5($data['password'].$ret->code)){
                $this->error('密码错误');
            }
            model('BisAccount')->updateById(['last_login_time'=>time()],$ret->id);
            //保存用户信息
            //变量名 变量 作用域
            session('bisAccount',$ret,'bis');
            return $this->success('登录成功',url('Index/Index'));
        }
        else{
            //获取session
            $account=session('bisAccount','','bis');
            if($account && $account->id){
                return $this->redirect(url('Index/Index'));
            }
            return $this->fetch();
        }
    }
    /**
     * 退出登录
     */
    public function  logout(){
        //清楚session 清除作用域bis
        session(null,'bis');
        //退出
        $this->redirect('login/Index');
    }
}
