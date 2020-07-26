<?php

namespace app\common\model;
use think\Model;

class Category extends Model
{
   public function add($data)
   {
       $data['status']=1;
       //$data['create_time']=time();
       return $this->save($data);
   }

   public function getNormalFirstCategory(){
       //添加分类
       $data=[
         'parent_id'=>0,
       ];
       $order=[
           'id'=>'desc',
       ];
       return $this->where($data)->order($order)->select();
   }

   public function getFirstCategorys($parentid=0){
       //获取一级栏目
       $data=[
         'parent_id'=>$parentid,
       ];

       $order=[
           'listorder'=>'desc',
           'id'=>'desc',
       ];
       $result=$this->where($data)->order($order)->paginate(2,false,[
           'query' => request()->param(),
           'path' =>'http://localhost/tp5/public/Index.php/admin/category/Index',
       ]);
       //echo $this->getLastSql();
       return $result;
   }

    public function getNormalCategoryByParentId($parentid=0){
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

    public function getNormalSeCategoryByParentId(){
        //添加分类
        $data=[
            'status'=>1,
        ];
        $order=[
            'id'=>'desc',
        ];
        return $this->where($data)->order($order)->select();
    }

    public function getNormalRecommendCategoryByParentId($id=0,$limit=5){
       $data=[
           'parent_id'=>$id,
           'status'=>1,
       ];
       $order=[
         'listorder'=>'asc',
         'id'=>'asc'
       ];
       $res =  $this->where($data)->order($order);
       if($limit){
           $res = $res->limit($limit);
       }
       return $res->select();
    }
    public  function getCategoryByParentId($ids){
        $data=[
            'parent_id'=>['in',implode(',',$ids)],
            'status'=>1,
        ];
        $order=[
            'listorder'=>'asc',
            'id'=>'asc'
        ];
        $res = $this->where($data)->order($order)->select();
        return $res;
    }
}