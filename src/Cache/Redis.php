<?php

namespace Xnhd\Core\Cache;

use Illuminate\Support\Facades\Redis as LaravelRedis;

class Redis implements CacheInterface {
    public function __construct($project) {
        $this->project = $project;
        $this->redis = LaravelRedis::connection();
    }

    public function set($key, $value) {
        $value = json_encode($value);
        return $this->redis->set("$this->project:$key", $value);
    }

    public function get($key) {
        $value = $this->redis->get("$this->project:$key");
        return json_decode($value);
    }

    public function has($key) {
        return $this->redis->exists("$this->project:$key");
    }

    public function clear($key) {
        // @todo
    }

    // not safe
    public function flush() {
        // @todo
    }
}
