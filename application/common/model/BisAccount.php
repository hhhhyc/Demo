<?php
namespace  app\common\model;
use think\Model;

class BisAccount extends Model{
    public function add($data){
        $data['status']= 0;
        $this->save($data);
        return $this->id;
    }
    public function updateById($data,$id){
        //allowfield进行数据过滤
        return $this->allowField(true)->save($data,['id'=>$id]);
    }
}