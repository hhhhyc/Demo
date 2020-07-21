<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function status($status){
    if($status==1){
        $str="<span class='label label-success radius'>正常</span>";
    }else if($status==0){
        $str="<span class='label label-danger radius'>待审</span>";
    }
    else{
        $str="<span class='label label-danger radius'>删除</span>";
    }
    return $str;
}

function is_main($is_main){
    if($is_main==1){
        $str="<span class='label label-success radius'>是</span>";
    }else if($is_main==0){
        $str="<span class='label label-danger radius'>否</span>";
    }
    return $str;
}


/**
 * @param $url
 * @param int $type 0 get 1 post
 * @param array $data
 * @return bool|string
 *
 */
function doCurl($url,$type=0,$data=[]){
    $ch=curl_init();//初始化

    //设置选项
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_HEADER,0);

    if($type==1){
        //post
        curl_setopt($ch,CURLOPT_PORT,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    }

    //执行并获取内容
    $output=curl_exec($ch);
    //释放curl句柄
    curl_close($ch);
    return $output;

}

function doregister($status){
    if($status==1){
        $str='您的申请已通过！';
    }
    else if($status==0){
        $str='待审核。审核通过后会发邮件通知，请留意';
    }else if($status == -1){
        $str='您的申请的资料不符合！已拒绝！';
    }
    else{
        $str='提交的申请已过期';
    }
    return $str;
}

/**
 * @param $obj
 *
 */
function pageinagtion($obj)
{

    if (!$obj) {
        return '';
    }
    return
        '<div class="cl pd-5 bg-1 bk-gray mt-20 tp5-o2o">'.
          $obj->render()
        .'</div>';
}

function getSeCityName($path){
    if(empty($path)){
        return $this->error('path为空');
    }
    if(preg_match('/,/',$path)){
        $citypath=explode(',',$path);
        $cityid=$citypath[1];
    }
    else{
        $cityid=$path;
    }

    $city=model('City')->get($cityid);
    return $city->name;
}

function location_ids($location_ids){
    if(!$location_ids){
        return 1 ;
    }

    if(preg_match('/,/',$location_ids)){
        $arr= explode(',',$location_ids);
        return count($arr);
    }
    else{
        return 1;
    }
}

//设置订单号
function setOrderSn(){
    list($t1,$t2) =explode(' ',microtime());
    $t3 = explode('.',$t1*10000);
    return $t2.$t3[0].(rand(10000,99999));
}
