<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\JsonResponse;
use Xnhd\Core\Api\CodeResponse;

class ApiBaseController extends BaseController
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
}
