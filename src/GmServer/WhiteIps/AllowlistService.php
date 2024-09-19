<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: wufl
 * @Date: 2021-04-25 11:51:02
 * @LastEditors: Please set LastEditors
 * @LastEditTime: 2022-01-05 18:07:41
 */

namespace Xnhd\Core\GmServer\WhiteIps;

use Xnhd\Core\Service\BaseService;

class AllowlistService extends BaseService
{
    public function __construct($project = '')
    {
        parent::__construct(new Allowlist(), $project . '_gm_basic');
    }

    public function getInfo()
    {
        return  $this->model->select(
            'id',
            'name', 
            'allowlist_id',
            'zoneList',
            'allow_ip_lower',
            'allow_ip_upper',
            'allow_device_ids',
            'ext_json'
        )->where('status', 1)->orderBy('created_at', 'desc')->get();
    }

    public function getAllInfo()
    {
        return  $this->model->select(
            'id',
            'name', 
            'allowlist_id',
            'zoneList',
            'allow_ip_lower',
            'allow_ip_upper',
            'allow_device_ids',
            'status',
            'ext_json'
        )->orderBy('created_at', 'desc')->get();
    }

    public function checkById(int $id)
    {
        return $this->model->find($id);
    }

    public function in_ips($ip, $ips)
    {
        $ip = ip2long($ip);
        $ips['lower'] = ip2long($ips['lower']);
        $ips['upper'] = ip2long($ips['upper']);
        if ($ip >= $ips['lower'] && $ip <= $ips['upper']) {
            return true;
        }
        return false;
    }

    public function addAll(array $data)
    {
        return $this->model->insert($data); 
    }
}
