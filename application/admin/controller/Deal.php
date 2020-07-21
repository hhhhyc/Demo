<?php
namespace app\admin\controller;

use think\Controller;

class Deal extends Base{

    public function index(){
        $data=input('post.');
//     print_r($data);exit;
        $sdata=[];
        if(!empty($data['start_time'])&&!empty(['end_time'])){
            $sdata['create_time'] = [
                ['gt',strtotime($data['start_time'])],
                ['lt',strtotime($data['end_time'])],
            ];
        }
        if(!empty($data['category_id'])){
            $sdata['category_id'] = $data['category_id'];
        }
        if(!empty($data['city_id'])){
            $sdata['city_id'] =$data['city_id'];
        }

        if(!empty($data['name'])){
            $sdata['name']=['like','%'.$data['name'].'%'];
        }
//        print_r($sdata);exit;
        $deal = model('Deal')->getNormalDeals($sdata);


        //查询一级
        $category = model('Category')->getNormalFirstCategory();

        $categorysArrs = $citysArrs =[];

        foreach($category as $categorys){
            $categorysArrs[$categorys->id] = $categorys->name;
        }

        //查询二级城市
        $city = model('City')->getNormalCitys();

        foreach($city as $citys){
            $citysArrs[$citys->id] = $citys->name;
        }

        return $this->fetch('',[
            'category'=>$category,
            'city'=>$city,
            'deal'=>$deal,
            'category_id'=>empty($data['category_id'])?'':$data['category_id'],
            'city_id'=>empty($data['city_id'])?'':$data['city_id'],
            'name'=>empty($data['name'])?'':$data['name'],
            'start_time'=>empty($data['start_time'])?'':$data['start_time'],
            'end_time'=>empty($data['end_time'])?'':$data['end_time'],
            'categorysArrs'=>$categorysArrs,
            'citysArrs'=>$citysArrs,
        ]);
    }
}