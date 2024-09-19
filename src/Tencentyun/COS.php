<?php
namespace Xnhd\Core\Tencentyun;

use Xnhd\Core\Http\HttpUtil;

class COS
{
    const API_FILE_END_POINT_V1 = 'http://web.file.myqcloud.com/files/v1/';

    public static function generateResUrl($appId, $bucket, $filePath) {
        return self::API_FILE_END_POINT_V1 . $appId . '/' . $bucket . '/' . $filePath;
    }

    public static function stat($appId, $bucket, $fileid, $sign) {
        $serviceUrl = self::generateResUrl($appId, $bucket, ltrim($fileid, '/'));
        $data = [
            'op' => 'stat',
        ];

        $headers = [
            'Authorization: '.$sign,
        ];

        $res = HttpUtil::get($serviceUrl, $data, $headers);
        // success connect
        if ($res['success']) {
           $msg = json_decode($res['msg'], true);
           return array(
               'success' => $msg['code'] == 0,
               'msg' => $msg['data'],
           );
        }
        return $res;
    }

    public static function delete($appId, $bucket, $fileid, $sign) {
        $serviceUrl = self::generateResUrl($appId, $bucket, $fileid);
        $data = [
            'op' => 'delete',
        ];
        $headers = [
            'Authorization: '.$sign,
        ];
        $res = HttpUtil::post($serviceUrl, $data, $headers);
        // success connect
        if ($res['success']) {
           $msg = json_decode($res['msg'], true);
           return array(
               'success' => $msg['code'] == 0,
               'msg' => $msg['message'],
           );
        }
        return $res;
    }
    /**
     * 上传文件
     * @param  string  $filePath     本地文件路径
     * @param  string  $bucket       空间名
     * @param  integer $userid       用户自定义分类
     * @param  string  $magicContext 自定义回调参数
     * @param  array   $params       参数数组
     * @return [type]                [description]
     */
    public static function upload($url, $sign, $filePath) {
        if (!file_exists($filePath)) {
            return false;
        }

        if (function_exists('curl_file_create')) {
            $fileContent = curl_file_create(realpath($filePath));
        } else {
            $fileContent = '@'.$filePath;
        }

        return self::upload_impl($url, $sign, $fileContent);
    }

    /**
     * Upload a file via in-memory binary data
     * The only difference with upload() is that 1st parameter is binary string of an image
     */
    public static function upload_binary($url, $sign, $fileContent) {
        return self::upload_impl($url, $sign, $fileContent);
    }

    /**
     * filetype: 0 -- filename, 1 -- in-memory binary file
     */
    public static function upload_impl($url, $sign, $fileContent) {
        $data = [
            'op' => 'upload',
            'filecontent' => $fileContent,
        ];

        $headers = [
            'Authorization: '.$sign,
        ];

        // upload file if not exists
        $res = HttpUtil::post($url, $data, $headers);
        if ($res['success']) {
            $msg = json_decode($res['msg'], true);
            if (in_array($msg['code'], [0, -4018])) {
                return $msg['data']['access_url'];
            }
        }
        return false;
    }
}
