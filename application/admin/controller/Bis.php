<?php
namespace app\admin\controller;

use think\Controller;
use think\Url;

class Bis extends Controller{
    /**
     *入驻申请列表
     * @return mixed
     */
    public function apply(){
        $bis = model("Bis")->getBisByStatus();
        return $this->fetch('',
            [
            'bis'=>$bis,
        ]);
    }

    public function  detail(){
        $bisid=input('get.id');
        if(empty($bisid)){
            return $this->error('ID错误');
        }
        $bisinfo = model('Bis')->get(['id'=>$bisid]);
        $locationinfo = model('Bislocation')->get(['bis_id'=>$bisid,'is_main'=>1]);
        $accountinfo = model('BisAccount')->get(['bis_id'=>$bisid,'is_main'=>1]);
        //获取一级城市
        $citys=model('City')->getNormalCityByParentId();
        //获取一级栏目数据
        $category=model('Category')->getNormalCategoryByParentId();
        return $this->fetch('',[
            'citys'=>$citys,
            'category'=>$category,
            'bisinfo'=>$bisinfo,
            'locationinfo'=>$locationinfo,
            'accountinfo'=>$accountinfo,
        ]);

    }

    /**
     *通过申请的用户
     */
    public function index(){
        $bis=model('Bis')->getBisinfo();
        return $this->fetch('',['bis'=>$bis]);
    }

    /**
     *
     * 未通过申请的用户
     */
    public function dellist(){
        $bis=model('Bis')->getBisdeinfo();
        return $this->fetch('',[
            'bis'=>$bis,
        ]);
    }
    //改状态
    public function status()
    {

        $data=input('get.');
//        $validate=validate('Category');
//        if(!$validate->scene('status')->check($data)){
//            $this->error($validate->getError());
//        }

        $res=model('Bis')->save(
            [
                'status'=>$data['status'],
            ],
            [
                'id'=>$data['id'],
            ]
        );
        $data['email']=model('Bis')->where('id',$data['id'])->value('email');
        $data['id']=model('Bis')->where('id',$data['id'])->value('id');
        $location = model('Bislocation')->save(['status'=>$data['status']],['bis_id'=>$data['id']],['is_main'=>1]);
        $account = model('BisAccount')->save(['status'=>$data['status']],['bis_id'=>$data['id']],['is_main'=>1]);
        if($res&&$location&&$account){
            $url=request()->domain().url('bis/register/waiting',['id'=>$data['id']]);
            $title='入驻申请审核结果';
            $content='平台审核结果已公布，可以通过链接<a href="'.$url.'" target="_blank">查看链接</a>查看审核结果';
            \phpmailer\Email::send($data['email'],$title,$content);
            $this->success('状态更新成功');
        }
        else{
            return $this->error('false');
        }
    }
}