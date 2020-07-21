<?php
namespace app\admin\controller;

use think\Controller;

class Location extends Controller{
    /**
     * @return string
     * 管理员下管理商户的门店列表
     */

    public function  index(){

        $location = model('BisLocation')->getLocationByStatus($status=1);
        return $this->fetch('',[
            'location' =>$location,
        ]);

    }
    /**
     * @return string
     * 管理员下管理商户的门店申请
     */
    public function  apply(){
        $location = model('BisLocation')->getLocationByStatus($status=0);
        return $this->fetch('',[
            'location'=>$location,
        ]);
    }

    /**
     * 管理员下管理商户删除的门店
     */
    public function delist(){
        $location = model('BisLocation')->getLocationByStatus($status=-1);
        return $this->fetch('',[
           'location'=>$location,
        ]);
    }
    /**
     * 门店下架处理
     */
    public function del(){
        $data=input('get.');
        $res = model('BisLocation')->save(
            [
                'status'=>-1,
            ],
            [
                'id'=>$data['id'],
            ]
        );
        if($res){
            $this->success('success');
        }
        else{
            $this->error('false');
        }
    }

}