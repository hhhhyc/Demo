<?php
namespace app\api\controller;

use think\Controller;

class City extends  Controller{
    public function getNormalCityByParentId(){
        $id=input('post.id');
        if(!$id){
            $this->error('ID不合法');
        }
        //通过ID获取二级城市
        $citys=model('City')->getNormalCityByParentId($id);

        if(!$citys){
            return show(0,'error');
        }
        return show(1,'success',$citys);
    }
}