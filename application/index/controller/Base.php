<?php

namespace app\index\controller;

use think\Controller;

class Base extends Controller
{
    public $city = '';
    public $account = '';

    public function _initialize()
    {

//        $isLogin = $this->isLogin();
//        if (!$isLogin) {
//            return $this->success('请先登录', url('user/login'));
//        }
        $cats = $this->getRecommendCats();
//        print_r($cats);exit;
        //城市数据
        $citys = model('City')->getNormalCitys();
        $city = model('City')->getNormalCityByParentId();
        $this->assign('cityss',$city);
        //用户数据

        $this->getCitys($citys);
        //变量名值
        $this->assign('citys', $citys);
        $this->assign('city', $this->city);
        $this->assign('user', $this->getLoginUser());
        //获取首页分类数据
        $this->assign('cats',$cats);
        //分配CSS
        $this->assign('controller',strtolower(request()->controller()));

        $this->assign('title','o2o团购');
    }

    public function isLogin()
    {
        //获取session值
        $user = $this->getLoginUser();
        if ($user && $user->id) {
            return true;
        } else {
            return false;
        }
    }

    public function getLoginUser()
    {
        $account = session('user', '', 'user');
        return $account;
    }


    public function getCitys($citys)
    {
        foreach ($citys as $city) {
            $city = $city->toArray();
//            print_r($city);
            if ($city['is_default'] == 1) {
                $defaultuname = $city['uname'];
                break;
            }
        }
        $defaultuname = $defaultuname ? $defaultuname : 'nanchang';
        if (session('cityuname', '', 'city') && !input('get.city')) {
            $cityuname = session('cityuname', '', 'city');
        } else {
            $cityuname = input('get.city', $defaultuname, 'trim');
            session('cityuname', $cityuname, 'city');
        }
        $this->city = model('City')->where(['uname' => $cityuname])->find();
    }


    //推荐位分类数据
    public function getRecommendCats()
    {
        $parentid = $seCatsArr = $recomCats=[];
        $cats = model('Category')->getNormalRecommendCategoryByParentId(0, 5);
        foreach ($cats as $cat) {
            $parentid[] = $cat->id;
        }
        //获取二级分类数据
        $seCats = model('Category')->getCategoryByParentId($parentid);

        foreach ($seCats as $seCat) {
            $seCatsArr[$seCat->parent_id][]= [
                'id' => $seCat->id,
                'name' => $seCat->name,
            ];
        }
        //一级分类数据
        foreach ($cats as $cat){
            //$recomCats代表一级与二级数据 []第一个代表一级分类的name，第二个代表此一级分类下的所有二级分类数据
            $recomCats[$cat->id]=[$cat->name,empty($seCatsArr[$cat->id])?[]:$seCatsArr[$cat->id]];
        }
        return $recomCats;
    }
}