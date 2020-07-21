<?php

namespace app\common\model;
use think\Model;

class User extends Model{
    public function add($data=[]){
        if(!is_array($data)){
            exception('传递数据类型不符合');
        }
        $data['status']=1;
       return $this->data($data)->allowField(true)->save();
    }
    public function getUserByUsername($username){
        if(!$username){
            exception('用户名不正确');
        }
        $data=['username'=>$username];
        return $this->where($data)->find();
    }
    public function updateById($data,$id){
        return $this->allowField(true)->save($data,['id'=>$id]);
    }
}