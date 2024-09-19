<?php

namespace Xnhd\Core\Cache;

interface CacheInterface {

    public function set($key, $value);

    public function get($key);

    public function clear($key);

    public function flush(); // not safe

    public function has($key);
}
