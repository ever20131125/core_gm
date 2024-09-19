<?php

namespace Xnhd\Core\Pay;

use AlipayTradeAppPayRequest;
use AopClient;
use App\Models\ServerTrait;
use Xnhd\Core\Game\CachePlatService;
use Xnhd\Core\Http\HttpUtil;
use Xnhd\Core\Http\IpTrait;
use Xnhd\Core\Pay\Order;
use Xnhd\Core\Account\AccountService;
use Xnhd\Core\Pay\Xianzai\SignaTure;

/*
 * interface of payapi.xnhd.com
 */

class Payapi
{
    const ERROR_CODE_0 = "向支付网关提交数据成功";
    const ERROR_CODE_1000 = "没有从POST获得数据，判断是否使用post方式";
    const ERROR_CODE_1002 = "接入方ID不存在";
    const ERROR_CODE_1003 = "接入方订单号不存在或超过60位";
    const ERROR_CODE_1004 = "亲，您输入的账号不存在，请确认后重新输入";
    const ERROR_CODE_1005 = "亲，您输入的账号不存在，请确认后重新输入";
    const ERROR_CODE_1006 = "安全校验失败";
    const ERROR_CODE_1007 = "支付中心拒绝该接入方使用支付通道";
    const ERROR_CODE_1008 = "充值渠道不存在，通道是传递过来的渠道名不正确";
    const ERROR_CODE_1009 = "充值渠道没有开放给当前接入方";
    const ERROR_CODE_1010 = "充值渠道号错误或不存在,通常是在db里不存在";
    const ERROR_CODE_1011 = "亲，充值渠道正在系统维护，请稍后再试";
    const ERROR_CODE_1012 = "亲，订单金额不能为零哦";
    const ERROR_CODE_1013 = "异步请求地址不存在";
    const ERROR_CODE_1014 = "支付中心充值订单创建失败";
    const ERROR_CODE_1015 = "亲，充值失败了";
    const ERROR_CODE_1016 = "亲，充值金额超过上限了";
    const ERROR_CODE_1062 = "接入方向支付网关重复提交已存在的订单";
    const ERROR_CODE_3201 = "亲，神州行充值卡有误，请确认后重新输入";
    const ERROR_CODE_3202 = "亲，神州行充值卡卡密有误，请确认后重新输入";
    const ERROR_CODE_3203 = "亲，选取神州行充值卡面额有误，请确认后重新选择";
    const ERROR_CODE_3204 = "亲，充值失败了";
    const ERROR_CODE_2901 = "亲，您选择的银行不在支持范围内哦";
    const ERROR_CODE_2902 = "接口验证失败";
    const ERROR_CODE_2903 = "亲，充值失败了";
    const ERROR_CODE_2904 = "亲，订单不存在";
    const ERROR_CODE_2905 = "返回支付金额有误";
    const ERROR_CODE_2906 = "非支付宝订单";
    const ERROR_CODE_2907 = "亲，订单正在处理中，请稍后刷新页面重试哦";
    const ERROR_CODE_2908 = "无效的订单状态。";
    const ERROR_CODE_1401 = "亲，密码错误次数超过5次，请3个小时后再试";
    const ERROR_CODE_1402 = "亲，您的51交友卡密码有误，请确认后重新输入";
    const ERROR_CODE_1407 = "支付成功发货失败，请检查接口";
    const ERROR_CODE_3301 = "亲，您输入的联通充值卡卡号格式有误";
    const ERROR_CODE_3302 = "亲，您输入的联通充值卡卡密有误";
    const ERROR_CODE_3303 = "亲，您选取的联通充值卡卡面额有误，请确认后重新选择";
    const ERROR_CODE_3304 = "亲，充值失败，与充值渠道提供商无法取得联系";
    const ERROR_CODE_2801 = "亲，天下通卡号格式有误";
    const ERROR_CODE_2802 = "亲，您输入的天下通卡密有误哦";
    const ERROR_CODE_2803 = "亲，您输入的天下通卡面值额有误，请确认后再试";
    const ERROR_CODE_2804 = "亲，天下通充值失败，与充值渠道提供商无法取得联系";
    const ERROR_CODE_2807 = "亲，订单正在处理中，请稍后刷新页面重试";
    const ERROR_CODE_401 = "亲，只能为自已充值";
    const ERROR_CODE_402 = "亲，当前51币余额为0，请去充值";
    const ERROR_CODE_403 = "当前51币余额不足以支付，请去充值";
    const ERROR_CODE_404 = "亲，51币支付失败";
    const ERROR_CODE_405 = "非pay51b订单或无效的订单";
    const ERROR_CODE_406 = "无效的订单状态";
    const ERROR_CODE_407 = "支付成功，发货失败";

    protected $gateway_url = 'http://payapi.xnhd.com/channel/gateway.php';
    protected $wxOrder_url = 'https://api.mch.weixin.qq.com/pay/unifiedorder';
    protected $aliOrder_url = 'https://openapi.alipay.com/gateway.do';


    //现在支付统一下单接口
    protected $xianzaiOrder_url = 'https://pay.ipaynow.cn';
    protected $front_notify_url = "http://newopenapi.xnhdgame.com/xzwap/xiniuhudong/frontNotify";
    protected $back_notify_url = "http://newopenapi.xnhdgame.com/xzwap/xiniuhudong/bNotify";

    use ServerTrait;
    use IpTrait;

    public function pay($publisher, $project, $action, $params)
    {
        $errno = -1;
        $errmsg = 'no action';

//        if (empty($params['account'])) {
//            $params['account'] = 'xnhdofficial';
//        }

        switch ($action) {
            case 'xianzai_submit':
                return $this->_xianzai_pay($publisher, $project, $params); // 现在支付
            case 'wxPay_submit':
                return $this->_wx_pay($publisher, $project, $params); // wenxi pay
            case 'alipay_submit':
                return $this->_ali_pay($publisher, $project, $params); // ali pay
            case 'aliwapSDK_submit':
                return $this->_general_sdk_pay($params); // ali sdk pay
            case 'cft_submit':
            case 'paytend_submit':
                return $this->_general_pay_submit($params); //原来阿里的支付渠道
            case 'sftnetbank_submit':
                // list($errno, $errmsg) = $this->__netbank_pay_submit($_POST); break; //原来网银的支付渠道
            case 'sftcard_submit':
            case 'sftmobliecard_submit':
            case 'sfttxcard_submit':
            case 'jwcard_submit':
            case 'sfttxtcard_submit':
                // list($errno, $errmsg) = $this->__szxpay_pay_submit($_POST); break; //原来神州行的支付渠道
            case 'card51_submit':
                // list($errno, $errmsg) = $this->__card51_pay_submit($_POST); //原来51卡的支付渠道

            default:
        }

        return [$errno, $errmsg];
    }

    /**
     * 现在支付默认output=0，直接调起不输出
     * @param $publisher
     * @param $project
     * @param $params
     * @return array
     */
    private function _xianzai_pay($publisher, $project, $params)
    {
        list($req_str, $payData) = $this->xianzaiPostData($project, $params);
        if (empty($req_str)) {
            $result = ['errno' => 1002, 'errmsg' => 'params missing'];
            return $result;
        }

        // 写入订单记录表sdo_order
        $account_data = [
            "pfId" => $params['pfId'],
            "pfName" => $params['pfName'],
            "openId" => $params['openId'],
            "zoneId" => $params['zoneId'],
        ];

        $pay_data = [
            'channelName' => $params['payType'],
            'orderNo' => $payData['mhtOrderNo'],
            'moneyType' => 1,//(人民币)
            'money' => sprintf('%.2f',$payData['mhtOrderAmt'] / 100),
            'pmId' => $payData['appId'],
            'extInfo' => $params['field']['extInfo'],
        ];

        if($params['type'] == 1) {
            $_res = $this->createOrder($publisher, $account_data, $pay_data);
            if($params['payType'] == 'weixin') {
                header("location:".$this->xianzaiOrder_url."?".$req_str);
                die();
            }else if($params['payType'] == 'zhifubao') {
                $res = HttpUtil::post($this->xianzaiOrder_url, $req_str, [], true);
                echo($res['msg']);
                die();
            }
        }else  if($params['type'] == 2) {
            //刚刚直接post的
            $res = HttpUtil::post($this->xianzaiOrder_url, $req_str, [], true);
            if ($res['success']) {
                if(!empty($res['msg'])) {
                    $arr = explode('&', $res['msg']);
                    $gettn = '';
                    foreach($arr as $v) {
                        $tn = explode('=', $v);
                        if($tn[0] == 'tn'){
                            $gettn = $tn[1];
                        }
                    }
                    $_res = $this->createOrder($publisher, $account_data, $pay_data);
                    return [0, $gettn];
                }
            }
        }
    }

    /**
     * 整理微信订单数据
     * @param $project
     * @param $params
     * @return array|bool
     */
    protected function xianzaiPostData($project, $params)
    {
        $appId = $key = $payChannelType = $consumerCreateIp = '';
        switch($params['payType']) {
            case 'weixin':
                $appId = config("app.payapi.$project.xianzai.appId");
                $key = config("app.payapi.$project.xianzai.key");
                $payChannelType = 13;
//                $consumerCreateIp =  $this->getUserIp(); //需上传用户真实ip，局域网测试是获取的是内网ip
                $consumerCreateIp =  $this->getIp(); //需上传用户真实ip
                if($params['type'] == 1) {
                    $outputType = '0';//IOS微信直接调起
                }else  if($params['type'] == 2) {
                    $outputType = '2';//安卓微信底层直接调起
                }
                break;
            case 'zhifubao':
                $appId = config("app.payapi.$project.xianzai.appId");
                $key = config("app.payapi.$project.xianzai.key");
                $payChannelType = 12;
                if($params['type'] == 1) {
                    $outputType = '0';//IOS直接调起
                }else  if($params['type'] == 2) {
                    $outputType = '1';//安卓返回
                }
                break;
            case 'yinlian':
//                $appId = Config::$ylAppId;
//                $key = Config::$ylKey;
                $payChannelType = 20;
                break;
        }
        $field = $params['field'];//??
        $pay_data = [
            'appId' => $appId,
            'deviceType' => '0601',
            'frontNotifyUrl' => $this->front_notify_url,
            'funcode' => 'WP001',
            'mhtCharset' => 'UTF-8',
            'mhtCurrencyType' => '156',
            'mhtOrderAmt' => $field['money'],
            'mhtOrderDetail' => $field['orderMark'],
            'mhtOrderName' => $field['orderName'],
            'mhtOrderNo' => date("YmdHis").rand(10000,99999),
            'mhtOrderStartTime' => date("YmdHis"),
            'mhtOrderTimeOut' => '3600',
            'mhtOrderType' => '01',
            'mhtReserved' => 'wdqc2',
            'mhtSignType' => 'MD5',
            'notifyUrl' => $this->back_notify_url,
            'outputType' => $outputType,
//            'mhtLimitPay' => $mhtLimitPay,
//            'payAccNo' => $payAccNo,
//            'mhtGoodsTag' => $mhtGoodsTag,
            'payChannelType' => $payChannelType,
            'consumerCreateIp' => $consumerCreateIp,
            'version' => "1.0.0",
//            'consumerId' => $consumerId,
        ];

        $signser = new SignaTure();
        $str = $signser->getToStr($pay_data, $key);

        return [$str, $pay_data];
    }

    //获取真实IP，可以根据实际情况自行获取
    public function getUserIp() {
        $info = file_get_contents('http://myip.ipip.net');
        $ipstr = explode('：',$info);
        $ip = explode(' ', $ipstr[1]);
        return $ip[0];
    }

    /**
     * 记录订单
     * @param $publisher
     * @param $accParams
     * @param $payParams
     * @return bool
     */
    public function createOrder($publisher, $accParams, $payParams)
    {
        $accountId = $this->transAccount($publisher, $accParams['pfId'], $accParams['openId']);

        $order = new Order();
        $order->publisher = $publisher;
        $order->pfId = $accParams['pfId'];
        $order->pf = $accParams['pfName']; //!empty($params['pf']) ? $params['pf'] : 'web';
        $order->orderNo = $payParams['orderNo'];
        $order->orderTime = date('Y-m-d H:i:s', time());
        $order->orderStatus = 1;
        $order->accountId = $accountId;
        $order->openId = $accParams['openId'];
        $order->zoneId = $accParams['zoneId'];
        $order->moneyType = $payParams['moneyType'];
        $order->money = $payParams['money'];
        $order->gameMoney = $payParams['money'];
        $order->pmId = $payParams['pmId'];
        $order->channelName = $payParams['channelName'];
        $order->extInfo = $payParams['extInfo'];

        return $this->saveOrder($order);
    }


    /**
     * 现在支付成功更新订单信息
     * @param $publisher
     * @param $_data
     * @return array
     */
    public function nowPaySuccess($publisher, $_data)
    {
        // get order
        $pmId = $_data['appId'];
        $order = Order::where('publisher', $publisher)->where('pmId', $pmId)->where('orderNo', $_data['mhtOrderNo'])->first();

        if (empty($order->id)) {
            return [3, 'order not exists'];
        }

        // already delivered
        if ($order->deliverStatus == 2) {
            return [4, 'item already delivered'];
        }

        // pay status
        switch ($_data['transStatus']) {
            case 'A001':
                $payStatus = 2;
                break; //支付成功
            case 'A002':
            case 'A003':
            case 'A005':
                $payStatus = 3;
                break; //支付失败
            default:
                $payStatus = 1;        //等待支付'A004'
        }

        // update order
        $order->outOrderNo = $_data['nowPayOrderNo'];
        $order->payStatus = $payStatus;
        $order->payCode = $_data['transStatus'];
        $order->payTime = date('Y-m-d H:i:s', strtotime($_data['payTime']));

        // pay failed
        if ($payStatus != 2) {
            $res = $this->saveOrder($order);
            if ($res) {
                return [5, 'pay failed'];
            } else {
                return [6, 'save order failed'];
            }
        }

        // pay success
        return [0, $order];
    }

    /**
     * 支付成功更新订单信息
     * @param $publisher
     * @param $_data
     * @return array
     */
    public function paySuccess($publisher, $_data)
    {
        $project = config('app.project');
        // check params
        $keys = ['orderNo', 'outOrderNo', 'payTime', 'payCode', 'sign', 'result', 'openId', 'channel', 'money'];
        foreach ($keys as $_k) {
            if (!isset($_data[$_k]))
                return [1, "param [$_k] missing"];
        }

        // 根据渠道区分paykey
        if($_data['channel'] == 10) {
            $payapi_cfg = config("app.payapi.$project.xianzai");
        }

        // check sign
        $sign = $this->_createSign($_data, $payapi_cfg['key']);
        if ($sign != $_data['sign']) {
            return [2, 'sign error'];
        }

        // get order
        $pmId = $payapi_cfg['appId'];
        $order = Order::where('publisher', $publisher)->where('pmId', $pmId)->where('orderNo', $_data['orderNo'])->first();

        if (empty($order->id)) {
            return [3, 'order not exists'];
        }

        // already delivered
        if ($order->deliverStatus == 2) {
            return [4, 'item already delivered'];
        }

        // pay status
        switch ($_data['result']) {
            case 'Y':
                $payStatus = 2;
                break; //支付成功
            case 'N':
            case 'F':
                $payStatus = 3;
                break; //支付失败
            default:
                $payStatus = 1;        //等待支付
        }

        // update order
        $order->outOrderNo = $_data['outOrderNo'];
        $order->payStatus = $payStatus;
        $order->payTime = date('Y-m-d H:i:s', $_data['payTime']);
        $order->payCode = $_data['payCode'];
        $order->gameMoney = $_data['money'];

        // pay failed
        if ($payStatus != 2) {
            $res = $this->saveOrder($order);
            if ($res) {
                return [5, 'pay failed'];
            } else {
                return [6, 'save order failed'];
            }
        }

        // pay success
        return [0, $order];
    }

    /**
     * 微信统一下单
     * @param $publisher
     * @param $project
     * @param $params
     * @return array
     */
    private function _wx_pay($publisher, $project, $params)
    {
        $pay_data = $this->wxPostData($project, $params['extInfo']);
        if (empty($pay_data)) {
            $result = ['errno' => 1002, 'errmsg' => 'wx params missing'];
            return $result;
        }

        $res = HttpUtil::post($this->wxOrder_url, $pay_data);
        // success connect
        if ($res['success']) {
            $msg = json_decode($res['msg'], true);
            if ($msg['return_code'] == 'FAIL') {
                $result = ['errno' => 1003, 'errmsg' => 'wx network error'];
                return $result;
            }

            $account_data = [
                "pfId" => $params['pfid'],
                "pfName" => $params['pfName'],
                "openId" => $params['openId'],
                "zoneId" => $params['zoneId'],
            ];

            if ($msg['result_code'] == 'SUCCESS') {
                //写入订单记录表sdo_order
                $pay_data['pay_way'] = 'wx';
                $_res = $this->createOrder($publisher, $account_data, $pay_data);
                if (empty($_res)) {
                    $result = ['errno' => 1004, 'errmsg' => 'order save error'];
                    return $result;
                }
                $data = [
                    'partnerid' => $msg['mch_id'],
                    'noncestr' => $msg['nonce_str'],
                    'prepay_id' => $msg['prepay_id'],
                    'timestamp' => time(),
                    'sign' => $msg['sign'],
                ];
                $result = ['errno' => 0, 'errmsg' => 'success', 'data' => $data];
                return $result;
            }

            $result = ['errno' => 5000, 'errmsg' => $msg['err_code']];
            return $result;
        }
        $result = ['errno' => 2000, 'errmsg' => 'connect error'];
        return $result;
    }

    /**
     * 整理微信订单数据
     * @param $project
     * @param $params
     * @return array|bool
     */
    protected function wxPostData($project, $params)
    {
        $pay_data = [
            'appid' => config("app.payapi.weixin.$project.appid"),
            'mch_id' => config("app.payapi.weixin.$project.mch_id"),
        ];
        $keys = ['device_info', 'nonce_str', 'sign', 'sign_type', 'body', 'detail', 'attach', 'out_trade_no', 'fee_type', 'total_fee', 'spbill_create_ip', 'time_start', 'time_expire', 'goods_tag', 'notify_url', 'trade_type', 'limit_pay', 'scene_info'];
        foreach ($keys as $key) {
            //check wxpay params
            if (empty($params[$key])) {
                return false;
            }
            $pay_data[$key] = $params[$key];
        }
        return $pay_data;
    }

    /**
     * 支付宝下单
     * @param $publisher
     * @param $project
     * @param $params
     * @return array
     */
    private function _ali_pay($publisher, $project, $params)
    {
        $data = $this->aliPayOrder($project, $params['extInfo']);

        $account_data = [
            "pfId" => $params['pfid'],
            "pfName" => $params['pfName'],
            "openId" => $params['openId'],
            "zoneId" => $params['zoneId'],
        ];
        $pay_data = [
            'fee_type' => $params['payment_type'],
            'total_fee' => $params['total_fee'],
            'mch_id' => config("app.payapi.$project.ali.mch_id"),
            'out_trade_no' => $params['out_trade_no'],
            'pay_way' => 'ali',
        ];
        $_res = $this->createOrder($publisher, $account_data, $pay_data);
        if (empty($_res)) {
            $result = ['errno' => 1004, 'errmsg' => 'order save error'];
            return $result;
        }
        $result = ['errno' => 0, 'errmsg' => 'success', 'data' => $data];
        return $result;
    }

    /**
     * PHP服务端SDK生成APP支付订单信息
     * @param $project
     * @param $params
     * @return string
     */
    protected function aliPayOrder($project, $params)
    {
        $aop = new AopClient();
        $aop->gatewayUrl = $this->aliOrder_url;
        $aop->appId = config("app.payapi.$project.ali.appid");
        $aop->rsaPrivateKey = config("app.payapi.$project.ali.rsaPrivateKey");
        $aop->format = "json";
        $aop->charset = $params['_input_charset'];
        $aop->signType = $params['signType'];
        $aop->alipayrsaPublicKey = config("app.payapi.$project.ali.alipayrsaPublicKey");

        //实例化具体API对应的request类,类名称和接口名称对应,当前调用接口名称：alipay.trade.app.pay
        //SDK已经封装掉了公共参数，这里只需要传入业务参数
        $bizcontent = [
            "body" => $params['body'],
            "subject" => $params['subject'],
            "out_trade_no" => $params['out_trade_no'],
            "timeout_express" => $params['it_b_pay'],
            "total_amount" => $params['total_fee'],
            "product_code" => "QUICK_MSECURITY_PAY",
        ];
        $bizcontent = json_encode($bizcontent);
        $request = new AlipayTradeAppPayRequest();
        $request->setNotifyUrl($params['notify_url']);
        $request->setBizContent($bizcontent);
        //这里和普通的接口调用不同，使用的是sdkExecute
        $response = $aop->sdkExecute($request);
        return $response;//就是orderString 可以直接给客户端请求，无需再做处理。
    }

    private function _general_sdk_pay($_DATA, $url = '')
    {
        list($errno, $errmsg) = $this->_genPostData($_DATA);

        if ($errno != 0) {
            return array($errno, $errmsg);
        }

        $pay_data = $errmsg;
        $gateway_url = !empty($url) ? $url : $this->gateway_url;
        $res = HttpUtil::post($gateway_url, $pay_data);
        // success connect
        if ($res['success']) {
            $msg = json_decode($res['msg'], true);
            // return auth result
            return array($msg['error_code'], $msg['params']);
        }

        // network error
        return array(1, $res['msg']);
    }

    /**
     * alipay支付宝，财付通，
     * 通用充值处理，没有额外参数
     * 基础参数：project,account,receiver_account,channel_name,order_amount,zone_id
     */
    private function _general_pay_submit($_DATA)
    {
        list($errno, $errmsg) = $this->_genPostData($_DATA);

        if ($errno != 0) {
            return array($errno, $errmsg);
        }

        $pay_data = $errmsg;
        $formId = 'orderFrm';
        $content = $this->_makePayHtml($pay_data, $this->gateway_url, $formId);
        $content .= '<script type="text/javascript">$("#' . $formId . '").submit();</script>';

        return array(0, $content);
    }

    protected function _genPostData($_DATA)
    {
        // validate post values
        $validKeys = array('action', 'project', 'channel_name', 'order_amount');
        foreach ($validKeys as $k) {
            if (empty($_DATA[$k]))
                return array(1, 'param [' . $k . '] is missing.');
        }
        if (empty($_DATA['account']) && empty($_DATA['openid']))
            return array(1, 'param [account or openid] is missing.');
        if (empty($_DATA['receiver_account']) && empty($_DATA['receiver_openid']))
            return array(1, 'param [receiver_account or receiver_openid] is missing.');

        $action = $_DATA['action'];
        $project = $_DATA['project'];
        $payapi_cfg = config('app.payapi.' . $project);

        $param = $_DATA;
        $param['pm_id'] = $payapi_cfg['pm_id'];
        $param['order_id'] = $this->makeOrderID();        //生成订单号
        $param['user_ip'] = HttpUtil::getIp(true);        //用户ip
        $param['payer'] = !empty($param['openid']) ? $param['openid'] : $this->getUin($param['account']);        //充值人uin
        $param['receiver'] = !empty($param['receiver_openid']) ? $param['receiver_openid'] : $this->getUin($param['receiver_account']);        //受益人uin
        $param['money_type'] = 1;        //人民币
        $param['money'] = $param['order_amount'] * 10;
        $param['bank_id'] = 0;        //若为网银充值则填写银行id，否则填0

        if (empty($param['receiver']))
            return array(2, 'receiver uin error');

        //写入订单记录表xx5_pay.pay_log
        if (!$this->_createOrder($param))
            return array(3, 'create order failed');

        //通过post把充值数据提交给51pay接口，排除多余参数
        $payDataKeys = ['pm_id', 'order_id', 'user_ip', 'payer', 'receiver', 'money', 'channel_name', 'order_amount'];
        $pay_data = [];
        foreach ($payDataKeys as $_k) {
            $pay_data[$_k] = $param[$_k];
        }

        $pay_data['sign'] = $this->_createSign($pay_data, $payapi_cfg['key']);        //签名

        return array(0, $pay_data);
    }

    public function getUin($user)
    {
        $url = 'http://passport.xx5.com/rest.php';

        $res = HttpUtil::get($url, [
            'a' => 'account',
            'action' => 'getUin',
            'user' => $user,
        ]);

        // success connect
        if ($res['success']) {
            $msg = json_decode($res['msg'], true);
            // return auth result
            return $msg['errno'] == 0 ? $msg['errmsg'] : 0;
        }

        // network error
        return -1;
    }

    private function _createOrder($params)
    {
        $accountService = new AccountService();
        $pfId = !empty($params['pfId']) ? $params['pfId'] : 7;
        $payer = $accountService->getAccount('xnhd', $pfId, $params['payer']);
        $receiver = $accountService->getAccount('xnhd', $pfId, $params['receiver']);

        $order = new Order();
        $order->publisher = 'xnhd';
        $order->pfId = $pfId;
        $order->pf = !empty($params['pf']) ? $params['pf'] : 'web';
        $order->orderNo = $params['order_id'];
        $order->orderTime = date('Y-m-d H:i:s', time());
        $order->accountId = !empty($payer->id) ? $payer->id : '';
        $order->openId = $params['payer'];
        $order->zoneId = !empty($params['zoneId']) ? $params['zoneId'] : '';
        $order->money = $params['order_amount'];
        $order->moneyType = $params['money_type'];
        $order->pmId = $params['pm_id'];
        $order->channelName = $params['channel_name'];
        $order->bankId = $params['bank_id'];

        if (!empty($params['extInfo'])) {
            $order->extInfo = $params['extInfo'];
        }

        return $this->saveOrder($order);
    }

    public function saveOrder($order)
    {
        $i = 0;
        do {
            $res = $order->save();
        } while (!$res && $i++ < 5);
        return $res ? $order->id : false;
    }

    private function _createSign($request, $signKey, $signName = 'sign')
    {
        ksort($request);
        reset($request);
        $verify = '';
        while (list($key, $value) = each($request)) {
            //去除签名字段和空字段
            if ($key == $signName || $value === "") continue;
            $verify .= $key . "=" . $value . "&";
        }
        $str = $verify . "key=$signKey";
        return md5($str);
    }

    private function _makePayHtml($param, $gateway_url, $formID, $field = '')
    {
        $str = '<form action="' . $gateway_url . '" method="POST" id="' . $formID . '" target="_self">';

        foreach ($param as $key => $value) {
            if (!empty($field) && in_array($key, $field)) {
                $str .= '<input type="hidden" name="' . $key . '" value="' . $value . '" />';
            } else {
                $str .= '<input type="hidden" name="' . $key . '" value="' . urlencode($value) . '" />';
            }
        }
        $str .= '<input type="submit" name="sub' . $formID . '"  />';
        $str .= '</form>';

        return $str;
    }

    private function makeOrderID()
    {
        return time() . rand(10000, 99999);
    }

    public static function errMsg($payCode)
    {
        return constant("self::ERROR_CODE_$payCode");
    }


}

