<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: wufl
 * @Date: 2021-01-18 16:51:35
 * @LastEditors: Please set LastEditors
 * @LastEditTime: 2021-12-31 11:00:50
 */

namespace Xnhd\Core\Cache;

trait CacheTrait
{
    /**
     * 默认缓存一个月
     */
    protected function getCacheFirst($key, $func, $funcParams = [], $timeout = 30 * 24 * 3600)
    {
        // get from cache
        if (empty($this->forceUpdate) && $this->cache->has($key)) {
            $res = $this->cache->get($key);
            if (!empty($res)) {
                return $res;
            }
        }

        // get from db
        $value = call_user_func_array($func, $funcParams);
        // store into cache
        $this->cache->set($key, $value, $timeout);

        // return
        return $value;
    }
}
