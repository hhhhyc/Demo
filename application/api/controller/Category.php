<?php

namespace  app\api\controller;

use think\Controller;

class Category extends Controller{
    public function getCategoryByParentId(){
        $id=input('post.id',0,'intval');
        if(!$id){
            $this->error('false');
        }
        $category=model('Category')->getNormalCategoryByParentId($id);
        if(!$category){
            return show(0,'error');
        }
        return show(1,'success',$category);
    }

}