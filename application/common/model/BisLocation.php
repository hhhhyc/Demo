<?php

namespace app\common\model;


use think\Model;

class BisLocation extends Model{
    public function add($data){
        $data['status']= 0;
        $this->save($data);
        return $this->id;
    }

    //根据登录商户的bisid查询当前商户模块下的门店
    public function getLocationById($bisid){
        $data=[
            'bis_id'=>$bisid,
        ];
        $order=[
            'id'=>'desc',
        ];
        return $this->where($data)->order($order)->select();
    }

    //根据状态查询管理员模块下的门店
    public function  getLocationByStatus($status=1){
        $data=[
            'status'=>$status,
        ];
        $order=[
          'id'=>'desc',
        ];
        return $this->where($data)->order($order)->paginate(10,false,[
            'query'=>request()->param(),
            'path'=>'http://localhost/tp5/public/Index.php?s=admin/location/apply',
        ]);
    }

    //商户模块下的团购添加下的门店选择
    public function getLocationByBisId($bisid){
        $data=[
            'bis_id'=>$bisid,
            'status'=>1,
        ];
        return $this->where($data)->order('id','desc')->select();
    }

    public function getNormalLocationInId($ids){
        $data=[
            'id'=>['in',$ids],
            'status'=>'1',
        ];
        return $this->where($data)->select();
    }
}