<?php
namespace app\index\controller;
use think\Url;

class Order extends Base{
    public function index(){
        $user=$this->getLoginUser();
        if(!$user){
            $this->error('请先登陆','user/login');
        }
        $id=input('get.id',0,'intval');
        if(!$id){
            $this->error('参数不合法');
        }
        $dealcount=input('get.deal_count',1,'intval');
        $dealprice=input('get.deal_price',1,'intval');

//        print_r($dealprice);exit;
        $deal= model('Deal')->find($id);
        if(!$deal||$deal->status!=1){
            $this->error('商品信息不存在！或已下架');
        }
        if(empty($_SERVER['HTTP_REFERER'])){
            $this->error('请求不合法 ');
        }
//        print_r($_SERVER['HTTP_REFERER']);exit;
        $orderSn =setOrderSn();
        //数据入库
        $data=[
          'out_trade_no'=>$orderSn,
            'user_id'=>$user->id,
            'username'=>$user->username,
            'deal_id'=>$id,
            'deal_count'=>$dealcount,
            'pay_price'=>$dealprice,
            //获取前一页面的url
            'referer'=>$_SERVER['HTTP_REFERER'],
        ];
        try{
            $orderid=model('Order')->add($data);
        }catch (\Exception $e){
            $this->error('订单处理失败');
        }
        $this->redirect(url('pay/Index',['id'=>$orderid]));
        //print_r($data);
    }
    public function confirm(){
        if(!$this->getLoginUser()){
            $this->error('请先登陆','user/login');
        }
        $id=input('get.id','0','intval');
        $count =input('get.count',1,'intval');
        $deal= model('Deal')->find($id);
        if(!$deal||$deal->status!=1){
            $this->error('商品信息不存在！或已下架');
        }
        $deal=$deal->toArray();
        return $this->fetch('',[
            'deal'=>$deal,
            'count'=>$count,
        ]);
    }
}