<?php
namespace app\admin\controller;
use think\Controller;
class Category extends  Base{
    private  $obj;
    public function _initialize()
    {
       $this->obj=model('Category');
    }
    public function  index(){
        //获取子栏目
        $parentid=input('get.parent_id',0,'intval');
        $category=  $this->obj->getFirstCategorys($parentid);
        return $this->fetch('',[
            'category'=>$category,
        ]);
    }
    public function  add(){
        $categorys=model("Category")->getNormalFirstCategory();
        return $this->fetch(
            '',[
              'categorys'=>$categorys,
            ]);
    }
    public function save(){
        //3个POST提交方法
        //print_r($_POST);
        //print_r(input("post."));
        //print_r(request()->post());
        /**
         * 做严格判断
         */
        if(!request()->isPost()){
            $this->error("请求失败");
        }
        $data=input('post.');
        $validate=validate('Category');
        if(!$validate->scene('add')->check($data)){
            $this->error($validate->getError());
        }

        if(!empty($data['id'])){
            return$this->update($data);
        }


        //把数据提交给model层
       $res = $this->obj->add($data);
        if($res){
            $this->success('success' );
        }
        else{
            $this->error('false');
        }
    }

    //查看该栏目的信息
    public function edit($id=0){
        if(intval($id)<1){
            $this->error('参数不合法');
        }
        //get 根据id进行数据查询
        $category=model("Category")->get($id);
//        print_r($category);exit;
        $categorys=model("Category")->getNormalFirstCategory();
        return $this->fetch(
            '',[
            'categorys'=>$categorys,
            'category'=>$category,
        ]);
    }

//    public function update($data){
//        $res= model('Category')->save($data,['id'=>intval($data['id'])]);
//        if($res){
//            $this->success('success');
//        }else{
//            $this->error('false');
//        }
//    }

//    public function listorder($id,$listorder){
//      $res=model("Category")->save(
//          [
//              'listorder'=>$listorder,
//          ],
//          [
//              'id'=>$id,
//          ]
//      );
//      if($res){
//          $this->result($_SERVER['HTTP_REFERER'],1,"success");
//      }
//      else{
//          $this->result($_SERVER['HTTP_REFERER'],0,"false");
//      }
//    }

    //改状态
//    public function status()
//    {
//
//        $data=input('get.');
//        $validate=validate('Category');
//        if(!$validate->scene('status')->check($data)){
//            $this->error($validate->getError());
//        }
//
//        $res=model('Category')->save(
//            [
//               'status'=>$data['status'],
//            ],
//            [
//                'id'=>$data['id'],
//            ]
//        );
//        if($res){
//            $this->success('success');
//        }
//        else{
//            $this->error('false');
//        }
//    }
}