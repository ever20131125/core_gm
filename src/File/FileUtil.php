<?php

namespace Xnhd\Core\File;

use Xnhd\Core\Tencentyun\Auth;
use Xnhd\Core\Tencentyun\COS;
use Session;

class FileUtil {

    public static function upImages($project = null) {
        if (empty($_FILES)) {
            return null;
        }
        $fileNames = $_FILES['file']['name'];
        $fileTypes = $_FILES['file']['type'];
        $fileErrors = $_FILES['file']['error'];
        $fileTmps = $_FILES['file']['tmp_name'];

        // check file error
        foreach ($fileErrors as $fileError) {
            if ($fileError != 0) {
                return false;
            }
        }
        foreach ($fileErrors as $fileError) {
            if ($fileError != 0) {
                return false;
            }
        }

        foreach($fileNames as $i => $fn) {
            if($fileErrors[$i] == 0) {
                $fileContent = file_get_contents($fileTmps[$i]);
            }
            $fileName = $fn;
            $fileType = $fileTypes[$i];
        }

        return self::saveFile($fileType, $fileName, $fileContent, $project);
    }

    public static function upImage($project = null) {
        if (empty($_FILES)) {
            return null;
        }
        $fileName = $_FILES['file']['name'];
        $fileType = $_FILES['file']['type'];
        $fileError = $_FILES['file']['error'];
        $fileTmp = $_FILES['file']['tmp_name'];
        $fileContent = file_get_contents($fileTmp);
        // check file error
        if($fileError != 0) {
            return false;
        }

        // save file
        return self::saveFile($fileType, $fileName, $fileContent, $project);
    }

    public static function ensureDir($dir) {
        if(!is_dir($dir)){
            mkdir($dir, 0755, true);
        }
    }

    protected static function saveFile($fileType, $fileName, $fileContent, $project = null) {
        
        if(config('app.env') == 'production') {
            return self::saveYunFile($fileType, $fileName, $fileContent, $project);
        }else{
            return self::saveLocal($fileType, $fileName, $fileContent);
        }
    }

    protected static function saveLocal($fileType, $fileName, $fileContent) {
        $subDir = '/upload';
        if (stripos($fileType, 'image/') === 0) {
            $subDir = '/upload/images/'.date('Y-m-d');
        }elseif (stripos($fileType , 'video/') == 0) {
            $subDir = '/upload/videos/'.date('Y-m-d');
        }
        $fileDir = app()->basePath().$subDir;
        self::ensureDir($fileDir);
        if(file_put_contents($fileDir.'/'.$fileName, $fileContent)) {
            return $subDir.'/'.$fileName;
        }
        return false;
    }

    protected static function saveYunFile($fileType, $fileName, $fileContent, $project = null, $appIdIndex = 0, $forceUpdate = false) {
        if (empty($project)) {
            $project = Session::get('project.code');
        }
        if (empty($project)) {
            return false;
        }

        $config = config('app.tencentyun.'.$project);
        $secretId = $config['secretId'];
        $secretKey = $config['secretKey'];
        $appIds = array_keys($config['buckets']['cos']);
        $appId = $appIds[$appIdIndex];
        $bucket = $config['buckets']['cos'][$appId];
        $timeout = 60 * 5;

        if(stripos($fileType, 'image/') == 0) {
            $fileName = 'images/'.date('Y-m-d').'/'.$fileName;
        }elseif (stripos($fileType, 'video/') == 0) {
            $fileName = 'videos/'.date('Y-m-d').'/'.$fileName;
        }elseif (stripos($fileType, 'other/') == 0) {
            $fileName = 'others/'.date('Y-m-d').'/'.$fileName;
        }

        $sign = Auth::appSign($secretId, $secretKey, $appId, $bucket, $timeout);
        $url = COS::generateResUrl($appId, $bucket, $fileName);
        return COS::upload_binary($url, $sign, $fileContent, $forceUpdate);
    }
}


