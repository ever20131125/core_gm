<?php

namespace Xnhd\Core\GmServer\Cache;

use Xnhd\Core\Cache\Cache;

class CacheMarqueeService
{
    const CACHE_KEY_NOTICE = 'wdxsy:marquee';

    public function __construct($project)
    {
        $this->cache = new Cache($project);
        $this->cacheKey = self::CACHE_KEY_NOTICE;
    }

    public function saveNotice(array $noticeInfo, $forceUpdate = false)
    {
        $noticeInfos = [];
        if (!$forceUpdate) {
            if ($this->cache->has($this->cacheKey)) {
                $noticeInfos = $this->cache->get($this->cacheKey);
            }
            $noticeInfos[] = $noticeInfo;
        } else {
            $noticeInfos = $noticeInfo;
        }
        return $this->cache->set($this->cacheKey, $noticeInfos);
    }

    public function getNotice()
    {
        return $this->cache->get($this->cacheKey);
    }
}
