<?php

namespace app\common\model;

use think\Model;
class Bis extends Model {
    public function add($data){
        $data['status']=0;
        $this->save($data);
        return $this->id;
    }
    /**
     * 通过状态获取商家数据
     * @param $status
     *
     */
    public function  getBisByStatus($status=0){
        $order=[
          'id'=>'dec',
        ];
        $data=[
            'status'=>$status,
        ];
      $res = $this->where($data)->order($order)->paginate(2,false,
          [
              'query'=>request()->param(),
              'path' =>'http://localhost/tp5/public/Index.php/admin/bis/apply',
          ]);

       return $res;
    }

    public function getBisinfo($status=1){
        $order=[
          'id'=>'dec' ,
        ];
        $data=[
            'status'=>$status,
        ];
        $res = $this->where($data)->order($order)->paginate(5,false,[
           'query'=>request()->param(),
            'path'=>'http://localhost/tp5/public/Index.php/admin/bis/Index',
        ]);
        return $res;
    }

    public function getBisdeinfo($status=-1){
        $order=[
            'id'=>'dec' ,
        ];
        $data=[
            'status'=>$status,
        ];
        $res = $this->where($data)->order($order)->paginate(5,false,[
            'query'=>request()->param(),
            'path'=>'http://localhost/tp5/public/Index.php/admin/bis/Index',
        ]);
        return $res;
    }
}