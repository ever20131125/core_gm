<?php
namespace Xnhd\Core\Tencentyun;

use App\Http\Utils\HttpUtil;

class Porn
{

    public static function sign($secretId, $secretKey, $appid, $bucket, $timeout, $url) {

        if (empty($secretId) || empty($secretKey) || empty($appid)) {
            return false;
        }

        $now = time();
        if (empty($timeout)) {
            $expired = 0;
        } else {
            $expired = $now + $timeout;
        }

        $plainText = 'a='.$appid.'&b='.$bucket.'&k='.$secretId.'&t='.$now.'&e='.$expired.'&l='.urlencode($url);
        $bin = hash_hmac("SHA1", $plainText, $secretKey, true);
        $bin = $bin.$plainText;
        $sign = base64_encode($bin);
        return $sign;
    }

    public static function detect($secretId, $secretKey, $appid, $bucket, $timeout, $url) {
        $serviceUrl = 'http://service.image.myqcloud.com/v1/detection/porn_detect';
        $sign = self::sign($secretId, $secretKey, $appid, $bucket, $timeout, $url);
        $params = ['appid'=>$appid, 'bucket'=>$bucket, 'url'=>$url];
        $headers = [
            'Authorization: '.$sign,
            'Host: service.image.myqcloud.com',
            'Content-Type: application/json',
        ];
        $res = HttpUtil::post($serviceUrl, $params, $headers);
        // success connect
        if ($res['success']) {
           $msg = json_decode($res['msg'], true);
           return array(
               'success' => $msg['code'] == 0 && $msg['data']['result'] == 0,
               'msg' => $msg['message'],
           );
        }
        return $res;
    }
}
