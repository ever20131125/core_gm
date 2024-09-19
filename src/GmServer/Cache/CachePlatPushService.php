<?php

namespace Xnhd\Core\GmServer\Cache;

use Xnhd\Core\Cache\Cache;

class CachePlatPushService
{
    const CACHE_KEY_PLATPUSH = 'wdxsy:plat:push';

    public function __construct($project, $zone_id = '')
    {
        $this->cache = new Cache($project);
        $this->cacheKey = self::CACHE_KEY_PLATPUSH . ':'. $zone_id;
    }

    public function savePush(array $info, $forceUpdate = false)
    {
        $infos = [];
        if (!$forceUpdate) {
            if ($this->cache->has($this->cacheKey)) {
                $infos = $this->cache->get($this->cacheKey);
            }
            $infos[] = $info;
        } else {
            $infos = $info;
        }
        return $this->cache->set($this->cacheKey, $infos);
    }

    public function getPush()
    {
        return $this->cache->get($this->cacheKey);
    }
}
