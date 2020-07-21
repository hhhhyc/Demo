<?php
namespace app\admin\controller;

use think\Controller;

class Featured extends Base{
    public function add(){
        //获取推荐位类别
        $type = config('featured.featured_type');
        //数据入库
        if(request()->isPost()){
            $data = input('post.');

            $id = model('Featured')->add($data);

            if($id){
                $this->success('添加成功');
            }
            else{
                $this->error('添加失败');
            }
        }
        return $this->fetch('',[
            'type'=>$type,
        ]);
    }
    public  function  index(){
        $data=input('post.');
        //print_r($data);
       $types = config('featured.featured_type');
       $type = input('get.type',1,'intval');
      // print_r($type);
       if(!empty($data)){
           $type = $data['type'] ;
       }
           $featured = model('Featured')->getFeaturlByType($type);
        return $this->fetch('',[
            'types'=>$types,
            'type'=>empty($data['type'])?'':$data['type'],
            'featured'=>$featured,
        ]);
    }

//    public function  status(){
//        //获取状态值
//       $data=input('get.');
//      $res = model('Featured')->save([
//          'status'=>$data['status']
//      ],
//          [
//              'id'=>$data['id']
//       ]);
//
//      if($res){
//          return $this->success('更新成功');
//      }
//      else{
//          return $this->error('更新失败');
//      }
//    }
}