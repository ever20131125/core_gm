<?php
namespace Xnhd\Core\Tencentyun;

class Auth
{

    const AUTH_URL_FORMAT_ERROR = -1;
    const AUTH_SECRET_ID_KEY_ERROR = -2;

    public static function appSign($secretId, $secretKey, $appid, $bucket, $timeout, $userid = '0', $fileid = '') {

        if (empty($secretId) || empty($secretKey) || empty($appid)) {
            return self::AUTH_SECRET_ID_KEY_ERROR;
        }

        $puserid = '0';
        if (!empty($userid)) {
            if (strlen($userid) > 64) {
                return self::AUTH_URL_FORMAT_ERROR;
            }
            $puserid = $userid;
        }

        $now = time();
        $rdm = rand();
        if (empty($timeout)) {
            $expired = 0;
        } else {
            $expired = $now + $timeout;
        }

        $plainText = 'a='.$appid.'&b='.$bucket.'&k='.$secretId.'&e='.$expired.'&t='.$now.'&r='.$rdm.'&u='.$puserid.'&f='.$fileid;
        $bin = hash_hmac("SHA1", $plainText, $secretKey, true);
        $bin = $bin.$plainText;
        $sign = base64_encode($bin);
        return $sign;
    }

}
