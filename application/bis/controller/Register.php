<?php
namespace app\bis\controller;

use think\Controller;


class Register extends Controller{
    public function  index(){
        //获取一级城市
        $citys=model('City')->getNormalCityByParentId();
        //获取一级栏目数据
        $category=model('Category')->getNormalCategoryByParentId();
        return $this->fetch('',[
            'citys'=>$citys,
            'category'=>$category,
        ]);
    }
    public function add(){
        if(!request()->isPost()){
            $this->error('请求类型错误');
        }

        //获取表单数据
        //tp自带的htmlentities方法过滤数据
        $data=input('post.','','htmlentities');
         //校验数据
        $validate=validate('Bis');
        if(!$validate->scene('add')->check($data)){
          //  $this->error($validate->getError());
        }

        //获取经纬度
        $lnglat=\Map::getLngLat($data['address']);
       // print_r($lnglat);
        if(empty($lnglat)||$lnglat['status']!=0){
            $this->error('无法获取数据');
        }

        //判断提交的用户是否存在
        $acconutResult=Model('BisAccount')->get(['username'=>$data['username']]);
        if($acconutResult){
            $this->error('该用户已存在');
        }

        //商户信息入库
        $bisdata=[
            //防XSS htmlentities
            'name'=>htmlentities($data['name']),
            'city_id'=>$data['city_id'],
            'city_path'=>empty($data['se_city_id'])?$data['city_id']:$data['city_id'].','.$data['se_city_id'],
            'logo'=>$data['logo'],
            'licence_logo'=>$data['licence_logo'],
            //'description'=>empty($data['description'])?'':$data['description'],
            'bank_info'=>$data['bank_info'],
            'bank_user'=>$data['bank_user'],
            'bank_name'=>$data['bank_name'],
            'faren'=>$data['faren'],
            'faren_tel'=>$data['faren_tel'],
            'email'=>$data['email'],
        ];

        $bisid = model('Bis')->add($bisdata);

        $data['cat']='';
        if(!empty($data['se_category_id'])){
            $data['cat']=implode('|',$data['se_category_id']);
        }

        //总店的相关信息校验
        $locationData=[
            'bis_id'=>$bisid,
            'name'=>$data['name'],
            'logo'=>$data['logo'],
            'tel'=>$data['tel'],
            'contact'=>$data['contact'],
            'category_id'=>$data['category_id'],
            //'description'=>empty($data['description'])?'':$data['description'],
            'category_path'=>$data['category_id'].','.$data['cat'],
            'city_id'=>$data['city_id'],
            'city_path'=>empty($data['se_city_id'])?'':$data['city_id'],
            'address'=>$data['address'  ],
             'open_time'=>$data['open_time'],
            'content'=>empty($data['content'])?'':$data['content'],
            'is_main'=>1, //代表总店信息
            'xpoint'=>empty($lnglat['result']['bislocation']['lng']?'':$lnglat['result']['bislocation']['lng']),
            'ypoint'=>empty($lnglat['result']['bislocation']['lat']?'':$lnglat['result']['bislocation']['lat']),
        ];
        $locationId = model('Bislocation')->add($locationData);

        //自动生成密码加严
        $data['code']=mt_rand(100,10000);
        //账户相关信息校验
        $accounData=[
          'bis_id'=>$bisid,
            'username'=>$data['username'],
            'code'=>$data['code'],
            'password'=>md5($data['password'].$data['code']),
            'is_main'=>1,//代表总管理员
        ];

        $acconutId = model('BisAccount')->add($accounData );
        if(!$acconutId){
            $this->error('false');
        }

        //发送邮件
        $url=request()->domain().url('register/waiting',['id'=>$bisid]);
        $title='入驻申请';
        $content='申请等待平台审核，可以通过链接<a href="'.$url.'" target="_blank">查看链接</a>查看审核状态';
        \phpmailer\Email::send($data['email'],$title,$content);

        $this->success('success',url('register/waiting',['id'=>$bisid]));
    }

    public  function  waiting($id){
        if(empty($id)){
            $this->error('false');
        }
        $detail = model('Bis')->get($id);

        return $this->fetch('',['detail'=>$detail]);
    }
}