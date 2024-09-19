<?php

namespace Xnhd\Core\Http;

use Xnhd\Core\Api\CodeResponse;

trait HttpTrait
{
    protected function codeReturn(array $codeResponse, $data = null, $info = '')
    {
        list($errno, $errmsg) = $codeResponse;
        if (!is_null($data)) {
            if (is_array($data)) {
                $data = array_filter($data, function ($item) {
                    return $item !== null;
                });
            }
            $ret = $data;
        } else {
            $ret = ['result' => $errno, 'msg' => $info ?: $errmsg];
        }
        return response()->json($ret, 200, [], JSON_UNESCAPED_UNICODE);
    }


    protected function success($data = null)
    {
        return $this->codeReturn(CodeResponse::SUCCESS, $data);
    }

    protected function fail(array $codeResponse = CodeResponse::UNKNOWN_ERROR, $info = '')
    {
        return $this->codeReturn($codeResponse, null, $info);
    }

    /**
     * 401
     * @return JsonResponse
     */
    protected function badArgument()
    {
        return $this->fail(CodeResponse::PARAM_ILLEGAL);
    }

    /**
     * 402
     * @return JsonResponse
     */
    protected function badArgumentValue()
    {
        return $this->fail(CodeResponse::PARAM_VALUE_ILLEGAL);
    }


    protected function failOrSuccess(
        $isSuccess,
        array $codeResponse = CodeResponse::UNKNOWN_ERROR,
        $data = null,
        $info = ''
    ) {
        if ($isSuccess) {
            return $this->success($data);
        }
        return $this->fail($codeResponse, $info);
    }

    protected function getSignBySHA512withRSA($data, $private_key)
    {
        ksort($data);
        $str = "";
        foreach ($data as $k => $v) {
            if (!empty($v)) {
                $str .= $k . "=" . $v . "&";
            }
        }
        $newstr = substr($str, 0, strlen($str) - 1);

        $pkeyid = openssl_get_privatekey($private_key);
        openssl_sign($newstr, $sign, ($pkeyid), OPENSSL_ALGO_SHA512); //OPENSSL_ALGO_SHA512
        openssl_free_key($pkeyid);
        $sign = (base64_encode($sign)); //exit($sign);
        return $sign;
    }

    protected function checkSignBySHA512withRSA($data, $public_key, $sign)
    {
        $public_key_res = openssl_get_publickey($public_key);
        return openssl_verify($data, base64_decode($sign), $public_key_res, OPENSSL_ALGO_SHA512);
    }
}
