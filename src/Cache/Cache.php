<?php

namespace Xnhd\Core\Cache;

use Cache as LaravelCache;

class Cache implements CacheInterface
{
    protected $memoryCacheTimeout = 5 * 60; // 5min

    public function __construct($project)
    {
        $this->project = $project;
    }

    private function getMemoryCacheTimeout($timeout)
    {
        return $timeout > $this->memoryCacheTimeout ? $this->memoryCacheTimeout : $timeout;
    }

    // timeout (minutes) 7 days
    public function set($key, $value, $timeout = 7 * 24 * 3600)
    {
        $value = serialize($value);
        // LaravelCache::store("array")->put("$this->project:$key", $value, $this->getMemoryCacheTimeout($timeout));
        return LaravelCache::put("$this->project:$key", $value, $timeout);
    }

    public function get($key)
    {
        // $value = LaravelCache::store("array")->get("$this->project:$key");
        // if (!empty($value)) {
        //     return unserialize($value);
        // }
        $value = LaravelCache::get("$this->project:$key");
        // if (!empty($value)) {
        //     LaravelCache::store("array")->put("$this->project:$key", $value, $this->memoryCacheTimeout);
        // }
        return unserialize($value);
    }

    public function has($key)
    {
        // if (LaravelCache::store("array")->has("$this->project:$key")) {
        //     return true;
        // }
        return LaravelCache::has("$this->project:$key");
    }

    public function clear($key)
    {
        // LaravelCache::store("array")->forget("$this->project:$key");
        LaravelCache::forget("$this->project:$key");
    }

    // not safe
    public function flush()
    {
        // LaravelCache::store("array")->flush();
        LaravelCache::flush();
    }
}
