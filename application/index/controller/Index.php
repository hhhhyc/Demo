<?php
namespace app\index\controller;
class Index extends Base
{
    public function index()
    {
        //获取广告位相关的数据
        $slideshow = $this->getsild();  //print_r($slideshow);exit;
        //获取分类 数据 推荐数据
        $deal = model('Deal')->getDealByCategoryCityId($this->city->id);
//        print_r($deal);exit;
        //获取子类数据
        $tuijiancates =  model('Category')->getNormalRecommendCategoryByParentId(1,4);

        return $this->fetch('', [
            'slideshow' => $slideshow,
            'deal'=>$deal,
            'tuijiancates'=>$tuijiancates,
        ]);
    }

    public function getsild()
    {
        $sesildeArr =[];
        $sesilde =  model('Featured')->getslideshow();

        foreach ($sesilde as $sesildes) {
            $sesildeArr[$sesildes->type][]= [
                'image' => $sesildes->image,
            ];
        }
        return $sesildeArr;
    }
}
