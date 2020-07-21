<?php
namespace  app\index\controller;
use think\Controller;
use wxpay\NativePay;
use wxpay\WxPayConfig;
use wxpay\WxPayApi;
use wxpay\WxPayNotify;
use wxpay\PayNotifyCallBack;
class Weixinpay extends Controller{
    public function notify(){
        //测试接收的数据
        $weixindata = file_get_contents("php://input");
        //FILE_APPEND 追加
        file_put_contents('/tmp/2.txt',$weixindata,FILE_APPEND);
    }
    public function vxpayQcode($id){
        $notify = new NativePay();
        $input = new WxPayUnifiedOrder();
        $input->SetBody("支付 0.01");
        $input->SetAttach("支付0.01");
        $input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis"));
        $input->SetTotalfee("1");//单位分
        $input->SetTimeStart(date("YmdHis"));
        $input->SetTimeExpire(date("YmdHis", time() + 600));
        $input->SetGoodsTag("QRCode");
        $input->SetNotifyUrl("/Index.php?s=Index/weixinpay/notify");//回调url
        $input->SetTradeType("NATIVE");
        $input->SetProductId($id);
        $result = $notify->GetPayUrl($input);
       if(empty($result["code_url"])){
           $url="";
       }else{
           $url=$result["code_url"];
       }
       return '<img alt="扫码支付" src="/weixin/example/qrcode.php?data=<?php echo urlencode($url);?>" style="width:300px;height:300px;"/>';
    }

}