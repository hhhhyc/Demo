<?php
namespace app\index\controller;

use think\Controller;

class Detail extends Base {

    public function index($id){
        if(!intval($id)){
            $this->error('id不合法');
        }
        //根据ID查询商品数据
        $deal = model('Deal')->get($id);
        $category = model('Category')->get($deal->category_id);
        $location = model('BisLocation')->getNormalLocationInId($deal->location_ids);
        global $timedata;
        $flag=0;
        $time=time();
        if($deal->start_time>$time){
            $flag=1;
        }
        if(!$deal||$deal['status']==-1){
            $this->error('商品信息不存在');
        }
        return $this->fetch('',[
            'deal'=>$deal,
            'title'=>$deal['name'],
            'category'=>$category,
            'location'=>$location,
            'timedata'=>$timedata,
            'overplus'=>$deal->total_count-$deal->buy_count,
            'flag'=>$flag,
            'mapstr'=>$location[0]['xpoint'].','.$location[0]['ypoint'],
        ]);
    }

    public function time($id){
        if(!intval($id)){
            $this->error('id不合法');
        }
        $deal = model('Deal')->get($id);

        $time=time();
        if($deal->start_time>$time){
             $timedata='';
            $dtime = $deal->start_time-$time;
            $d = floor($dtime/(3600*24));
            if($d){
                $timedata .=$d.'天';
            }
            $h=floor($dtime%(3600*24)/3600);
            if($h){
                $timedata .=$h.'小时';
            }
            $m=floor($dtime%(3600*24)%3600/60);
            if($h){
                $timedata .=$m.'分钟';
            }
            $s=floor($dtime%(3600*24)%3600%60%60);
            if($h){
                $timedata .=$s.'秒';
            }
            echo $timedata;
        }
    }
}