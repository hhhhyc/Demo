<?php
namespace app\common\model;

use think\Model;

class City extends Model{
    public function getNormalCityByParentId($parentid=0){
        //添加分类
        $data=[
            'status'=>1,
            'parent_id'=>$parentid,
        ];
        $order=[
            'id'=>'desc',
        ];
        return $this->where($data)->order($order)->select();
    }
    public function getNormalCitys(){
        $data=[
          'status'=>1,
          'parent_id'=>['gt',0],//大于0
        ];

        return $this->where($data)->order('id','desc')->select();
    }
}