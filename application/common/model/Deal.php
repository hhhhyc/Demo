<?php

namespace  app\common\model;

use think\Model;

class Deal extends Model{
    public function add($data){
        $data['status']=0;
        $this->save($data);
        return $this->id;
    }
    public function getDealByBisId($bisid){
        $data=[
            'bis_id'=>$bisid,
            'status'=>0,
        ];
        $order=[
          'id'=>'desc',
        ];
        return $this->where($data)->order($order)->select();
    }
    public function  getNormalDeals($sdata){
        $order=['id'=>'desc'];
        $res =  $this->where($sdata)->order($order)->limit(20)->select();
        return $res;
    }

    /**
     * 根据分类 以及 城市来获取 商品数据
     * @param $id 分类ID
     * @param $cityId  城市
     */
    public function getDealByCategoryCityId($cityId){
        $data=[
          'city_id'=>$cityId,
          'status'=>1
        ];
        $order=[
          'listorder'=>'asc',
          'id'=>'asc'
        ];

        $res = $this->where($data)->order($order)->limit(10)->select();
        return $res;
    }
    public function getDealByConditions($data,$orders){
        if(!empty($orders['order_sales'])){
            $order=[
              'buy_count'=>'desc'
            ];
        }
        elseif(!empty($orders['order_price'])){
            $order= [
                'current_price'=>'desc'
            ];
        }
        elseif(!empty($orders['order_time'])){
            $order= [
                'create_time'=>'asc'
            ];
        }else {
            $order = [
                'id'=>'desc'
            ];
        }

        $datas[]='end_time>'.time();
        //find_in_set(传递的值,数据库中的字段)
        if(!empty($data['se_category_id'])){
            $datas[]="find_in_set(".$data['se_category_id'].",se_category_id)";
        }
        if(!empty($data['category_id'])){
            $datas[]='category_id='.$data['category_id'];
        }
        if(!empty($data['city_id'])){
            $datas[]='city_id='.$data['city_id'];
        }
        $datas[]='status=1';
        $result = $this->where(implode(' AND ',$datas))->order($order)->paginate(1,false,[
            'path'=>'http://localhost/tp5/public/Index.php?s=Index/lists/Index.html',
            'query'=>request()->param(),
        ]);
//        echo $this->getLastSql();exit;
        return $result ;
    }
}