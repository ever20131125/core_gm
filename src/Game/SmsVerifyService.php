<?php
/**
 * Created by PhpStorm.
 * User: wufl
 * Date: 2016/11/2
 * Time: 10:57
 */

namespace Xnhd\Core\Game;


use Xnhd\Core\Http\HttpUtil;

class SmsVerifyService
{
    public function __construct($project) {
        $this->project = $project;
    }

    public function getSmsVerifyInfo($photoNum, $date) {
        $res = [];
        $params =[
            'method' => config('app.sms.method.query'),
            'app_key' => config('app.sms.app_key'),
            'timestamp' => date('Y-m-d H:i:s'),
            'format' => config('app.sms.format.json'),
            'v' => config('app.sms.v'),
            'partner_id' => config('app.sms.partner_id'),
            'sign_method' => 'md5',
            'rec_num' => $photoNum,
            'query_date' => date('Ymd', strtotime($date)),
            'current_page' => 1,
            'page_size' => 10,
        ];
        ksort($params);
        $src = '';
        foreach ($params as $key => $value) {
            $src .= $key.$value;
        }
        $secret = config('app.sms.app_secret');
        $sign = strtoupper(md5($secret.$src.$secret));
        $params['sign'] = $sign;

        $url = 'http://gw.api.taobao.com/router/rest';
        $http = new HttpUtil();
        $sms = $http->get($url, $params);
        $msgInfos = json_decode($sms['msg'], true);

        if(!empty($msgInfos['alibaba_aliqin_fc_sms_num_query_response']['values'])) {
            foreach ($msgInfos['alibaba_aliqin_fc_sms_num_query_response']['values']['fc_partner_sms_detail_dto'] as $value) {
                $msgInfo['num'] = $value['rec_num'];
                $msgInfo['code'] = $value['result_code'];
                $msgInfo['content'] = $value['sms_content'];
                $msgInfo['recTime'] = $value['sms_receiver_time'];
                $msgInfo['sendTime'] = $value['sms_send_time'];
                $msgInfo['status'] = $value['sms_status'];
                $res[] = $msgInfo;
            }
        }
        return $res;
    }
}