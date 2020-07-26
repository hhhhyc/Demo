<?php

namespace app\common\model;

use think\Model;

class Featured extends Model
{

    public function getFeaturlByType($type)
    {
        /**
         *根据类型获取数据
         */
        $data = [
            'type' => $type,
            'status' => ['neq', -1],
        ];
        $order = [
            'id' => 'asc'
        ];
        return $this->where($data)->order($order)->paginate(2, false, [
            'query' => request()->param(),
            'path' => 'http://localhost/tp5/public/Index.php/admin/featured/Index',
        ]);
    }

    public function add($data)
    {
        $data['status'] = 0;
        $this->save($data);
        return $this->id;
    }

    public function getslideshow()
    {
        $data = [
            'status' => ['neq', -1],
        ];
        $order = [
            'id' => 'asc'
        ];

        return $this->where($data)->order($order)->select();
    }

    public  function getslideimgshow($ids){
        $data=[
            'id'=>['in',implode(',',$ids)],
            'status'=>['neq',-1],
        ];
        $order=[
            'listorder'=>'asc',
            'id'=>'asc'
        ];
        $res = $this->where($data)->order($order)->select();
        return $res;
    }
}