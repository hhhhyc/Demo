<?php
namespace app\index\controller;
class Lists extends Base{
    public function index(){

        //获取一级栏目数据
        $firstCatIds=[];
        $data=[];
        $category = model('Category')->getNormalCategoryByParentId();
        foreach ($category as $categorys){
            $firstCatIds[]=$categorys->id;
        }
        //获取二级分类
        $id=input('id',0,'intval');
        //id=0 一级 1 二级
        //如果传递的id在给定的$firstCatIds数组里面
        if(in_array($id,$firstCatIds)){
            //一级
            $secategoryParentId=$id;
            $data['category_id']=$id;
        }elseif($id){
            //二级
            $secategory = model('Category')->get($id);
            if(!$secategory||$secategory->status!=1){
                $this->error('该分类下无数据');
            }
            $secategoryParentId=$secategory->parent_id;
            $data['se_category_id']=$id;
        }else{
            $secategoryParentId=0;
        }
        //获取父类下所有子数据
        $secategory=[];
        $orderflag='';
        if($secategoryParentId){
            $secategory=model('Category')->getNormalCategoryByParentId($secategoryParentId);
        }
        //排序
        $order_sales=input('order_sales','');
        $order_price=input('order_price','');
        $order_time=input('order_time','');
        $orders=[];
        if(!empty($order_sales)){
            $orderflag='order_sales';
            $orders['order_sales']=$order_sales;
        }elseif (!empty($order_price)){
            $orderflag='order_price';
            $orders['order_price']=$order_price;
        }elseif (!empty($order_time)){
            $orderflag='order_time';
            $orders['order_time']=$order_time;
        }else{
            $orderflag='';
        }

        //Base控制器里继承的数据
        $data['city_id']=$this->city->id;
        //根据条件查询数据
       $deals = model('deal')->getDealByConditions($data,$orders);
        $thisid=input('get.',0,'intval');
        $this->assign('thisid',$thisid);
        return $this->fetch('',[
            'category'=>$category,
            'secategory'=>$secategory,
            'id'=>$id,
            'secategoryParentId'=>$secategoryParentId,
            'orderflag'=>$orderflag,
            'deals'=>$deals,
        ]);
    }
}