<?php
/**
 * Created by PhpStorm.
 * User: wufl
 * Date: 2018/4/13
 * Time: 11:41
 */

namespace Xnhd\Core\Pay\Xianzai;
/**
 *
 * 签名接口
 * 用于对支付信息进行重组和签名
 *
 */

class SignaTure
{
    /**
     * 根据不同功能码去除sign参数
     * @param $arr
     * @return array
     */
   protected function getData($arr) {
        $result  = array();
        $funcode = $arr['funcode'];
        foreach($arr as $key => $value) {
            if (($funcode=='WP001')&&!($key=='mhtSignature'||$key=='signature')){
                $result[$key]=$value;
                continue;
            }
            if(($funcode=='N001'||$funcode=='N002')&&!($key=='signature')){
                $result[$key]=$value;
                continue;
            }
            if (($funcode=='MQ002')&&!($key=='mhtSignature'||$key=='signature')) {
                $result[$key]=$value;
                continue;
            }
        }
        return $result;
    }

    /**
     * 获取签名
     * @param $data
     * @param $key
     * @return string
     */
    protected function createSignaTure($data, $key) {
        ksort($data);
        $str = '';
        foreach($data as $k => $v) {
            if($v != '') {
                $str .= $k.'='.$v.'&';
            }
        }
        $str .= strtolower(md5($key));
        return(strtolower(md5($str)));
    }

    /**
     * 获取请求字符串
     * @param $arr
     * @param $key
     * @return string
     */
    public function getToStr($arr, $key) {
        $data = $this -> getData($arr);
        $sign = $this -> createSignaTure($data, $key);
        $str = '';
        foreach($data as $k => $v) {
            if($v != '') {
                $str .= $k.'='.urlencode($v).'&';
            }
        }
        $str .= 'mhtSignature='.$sign;
//        file_put_contents('../baowen.log', $str."\r\n");
        return $str;
    }

    /**
     * 异步通知验签
     * @param $str
     * @param $appkey
     * @return bool
     */
    public function verification($str, $appkey)
    {
        if($str != '') {
            $arr = explode('&', $str);
            $nowArr = array();
            foreach($arr as $v) {
                $kv = explode('=', $v);
                $nowArr[$kv[0]] = $kv[1];
            }
            ksort($nowArr);

            $newstr = '';
            foreach($nowArr as $key => $value) {
                if($value == '' || $key == 'signature') {
                    continue;
                }
                $newstr .= $key.'='.urldecode($value).'&';
            }
            $newstr .= md5($appkey);

            if( $nowArr['signature'] == md5($newstr) ) {
                return $nowArr;
            } else {
                return false;
            }
        }
    }
}