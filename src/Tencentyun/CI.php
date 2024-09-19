<?php
namespace Xnhd\Core\Tencentyun;

use Xnhd\Core\Http\HttpUtil;

class CI
{
    const API_IMAGE_END_POINT_V2 = 'http://web.image.myqcloud.com/photos/v2/';
    // 30 days
    const EXPIRED_SECONDS = 2592000;

    // errors
    const IMAGE_FILE_NOT_EXISTS = -1;
    const IMAGE_NETWORK_ERROR = -2;
    const IMAGE_PARAMS_ERROR = -3;

    public static function generateResUrl($appId, $bucket, $userid=0, $fileid='', $oper = '') {
        $base = self::API_IMAGE_END_POINT_V2 . $appId . '/' . $bucket . '/' . $userid;
        if ($fileid) {
            $fileid = urlencode($fileid);
            if ($oper) {
                return $base . '/' . $fileid . '/' . $oper;
            } else {
                return $base . '/' . $fileid;
            }
        } else {
            return $base;
        }
    }

    public static function addUploadRecord($userid, $roleid, $fileid) {
        $res = Record::where('userid', $userid)->where('roleid', $roleid)->where('fileid', $fileid)->first();
        if (empty($res)) {
            $record = new Record();
            $record->userid = $userid;
            $record->fileid = $fileid;
            $record->roleid = $roleid;
            return $record->save();
        }
        return -1;
    }

    public static function deleteUploadRecord($userid, $roleid, $fileid) {
        return Record::where('userid', $userid)->where('roleid', $roleid)->where('fileid', $fileid)->delete() ? true : false;
    }

    public static function stat($appId, $bucket, $accountid, $fileid) {
        $serviceUrl = self::generateResUrl($appId, $bucket, $accountid, $fileid);
        $params = [];
        $headers = [
            'Host: web.image.myqcloud.com',
            'Content-Type: application/json',
        ];
        $res = HttpUtil::get($serviceUrl, $params, $headers);
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

    public static function delete($appId, $bucket, $accountid, $fileid, $sign) {
        $serviceUrl = self::generateResUrl($appId, $bucket, $accountid, $fileid).'/del';
        $params = [];
        $headers = [
            'Authorization: '.$sign,
            'Host: web.image.myqcloud.com',
            'Content-Type: application/json',
        ];
        $res = HttpUtil::post($serviceUrl, $params, $headers);
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
    public static function upload($url, $sign, $filePath, $magicContext = '') {
        if (!file_exists($filePath)) {
            return false;
        }

        if (function_exists('curl_file_create')) {
            $fileContent = curl_file_create(realpath($filePath));
        } else {
            $fileContent = '@'.$filePath;
        }

        return self::upload_impl($url, $sign, $fileContent, $magicContext);
    }

    /**
     * Upload a file via in-memory binary data
     * The only difference with upload() is that 1st parameter is binary string of an image
     */
    public static function upload_binary($url, $sign, $fileContent, $magicContext = '') {
        return self::upload_impl($url, $sign, $fileContent, $magicContext);
    }

    /**
     * filetype: 0 -- filename, 1 -- in-memory binary file
     */
    public static function upload_impl($url, $sign, $fileContent, $magicContext) {
        $data = [
            'FileContent' => $fileContent,
        ];

        if ($magicContext) {
            $data['MagicContext'] = $magicContext;
        }

        // check file exists or not
        $headers = [
            'Host: web.image.myqcloud.com',
        ];
        $res = HttpUtil::get($url, [], $headers);
        if ($res['success']) {
            $msg = json_decode($res['msg'], true);
            if ($msg['code'] == 0) {
                // file exists
                return $msg['data']['file_url'];
            }
        }

        // upload file if not exists
        $headers = [
            'Authorization: '.$sign,
            'Host: web.image.myqcloud.com',
            'Content-Type: multipart/form-data',
        ];
        $res = HttpUtil::post($url, $data, $headers);
        if ($res['success']) {
            $msg = json_decode($res['msg'], true);
            if ($msg['code'] == 0) {
                // upload success
                return $msg['data']['download_url'];
            }
        }
        return false;
    }
}
