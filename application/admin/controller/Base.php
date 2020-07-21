<?php
namespace  app\admin\controller;
use think\Controller;
class Base extends  Controller{

    public function  status(){
        //获取状态值
        $data=input('get.');
        if(empty($data['id'])){
            $this->error('id不合法 ');
        }
        if(!is_numeric($data['status'])){
            $this->error('status不合法');
        }
        //获取控制器
        $model = request()->controller();
//        echo $model ;
//        exit;
        $res =model($model)->save([
            'status'=>$data['status']
        ],
            [
                'id'=>$data['id']
            ]);

        if($res){
            return $this->success('更新成功');
        }
        else{
            return $this->error('更新失败');
        }
    }


    /**
     * @param $id
     * @param $listorder
     * 排序
     */
    public function listorder($id,$listorder){
        $data=input('post.');
        if(empty($data['id'])){
            $this->error('id不合法 ');
        }
        if(!is_numeric($data['listorder'])){
            $this->error('status不合法');
        }
        $model = request()->controller();
        $res=model($model)->save(
            [
                'listorder'=>$listorder,
            ],
            [
                'id'=>$id,
            ]
        );
        if($res){
            $this->result($_SERVER['HTTP_REFERER'],1,"success");
        }
        else{
            $this->result($_SERVER['HTTP_REFERER'],0,"false");
        }
    }

    //查看

    /**
     * @param int $id
     * @return string
     * @throws \think\exception\DbException
     * 查看信息
     */
    public function edit($id=0){
        if(intval($id)<1){
            $this->error('参数不合法');
        }
        $type = config('featured.featured_type');
        $model=request()->controller();
        $category=model($model)->get($id);
//        print_r($category);exit;
       // $categorys=model($model)->getNormalFirstCategory();
        return $this->fetch(
            '',[
            //'categorys'=>$categorys,
            'category'=>$category,
            'type'=>$type,
        ]);

    }

    //编辑更新

    /**
     * @param $data
     * 数据编辑
     */
    public function update($data){
        $data=input('post.');
        $model  = request()->controller();
        $res= model($model)->save($data,['id'=>intval($data['id'])]);
        if($res){
            $this->success('success');
        }else{
            $this->error('false');
        }
    }

}