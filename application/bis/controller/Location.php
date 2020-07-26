<?php

namespace app\bis\controller;

use think\Controller;

class Location extends Base
{
    public function index()
    {
        //根据登录用户得到session中提取bis_id，进行查询
        $user = $this->getLoginUser();

        $location = model('Bislocation')->getLocationById($user->bis_id);

        return $this->fetch('', [
            'bislocation' => $location,
        ]);
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $bisid = $this->getLoginUser()->bis_id;

            $data['cat'] = '';
            if (!empty($data['se_category_id'])) {
                $data['cat'] = implode('|', $data['se_category_id']);
            }

            //获取经纬度
            $lnglat = \Map::getLngLat($data['address']);
            //print_r($lnglat);
            if (empty($lnglat) || $lnglat['status'] != 0) {
                $this->error('无法获取数据');
            }

            $locationData = [
                'bis_id' => $bisid,
                'name' => $data['name'],
                'logo' => $data['logo'],
                'tel' => $data['tel'],
                'contact' => $data['contact'],
                'category_id' => $data['category_id'],
                'category_path' => $data['category_id'] . ',' . $data['cat'],
                'city_id' => $data['city_id'],
                'city_path' => empty($data['se_city_id']) ? '' : $data['city_id'],
                'address' => $data['address'],
                'open_time' => $data['open_time'],
                'content' => empty($data['content']) ? '' : $data['content'],
                'is_main' => 0, //代表分店信息
                'xpoint' => empty($lnglat['result']['bislocation']['lng'] ? '' : $lnglat['result']['bislocation']['lng']),
                'ypoint' => empty($lnglat['result']['bislocation']['lat'] ? '' : $lnglat['result']['bislocation']['lat']),
            ];
            $locationId = model('Bislocation')->add($locationData);
            if ($locationId) {
                return $this->success('门店申请成功');
            } else {
                return $this->error('门店申请失败');
            }
        }
        //获取一级城市
        $citys = model('City')->getNormalCityByParentId();
        //获取一级栏目数据
        $category = model('Category')->getNormalCategoryByParentId();
        return $this->fetch('', [
            'citys' => $citys,
            'category' => $category,
        ]);
    }

    //改状态
    public function status()
    {
        $data=input('get.');
//        $validate=validate('Category');
//        if(!$validate->scene('status')->check($data)){
//            $this->error($validate->getError());
//        }
        $res=model('Bislocation')->save(
            [
                'status'=>$data['status'],
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