<?php
namespace app\common\model;
use think\Model;

class Order extends Model{
    public function add($data){
        $data['status']=1;
        $this->save($data);
        return $this->id;
    }
}