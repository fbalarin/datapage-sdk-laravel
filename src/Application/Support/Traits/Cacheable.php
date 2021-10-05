<?php

namespace Datapage\DatapageSDK\Support\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;

trait Cacheable
{
    public $cacheOnly = [];

    public function isCacheAllowed($callerFunction)
    {
        return Config::get('datapage_sdk.cache_sdk_calls') && $this->methodAllowsCache($callerFunction);
    }

    public function methodAllowsCache($callerFunction)
    {
        $methods = collect(get_class_methods($this));

        $allowed = $methods->filter(function($item) {
            return collect($this->cacheOnly)->contains($item);
        });

        return $allowed->contains($callerFunction);
    }

    public function putOnCache($key, array $data)
    {
        Cache::put($key, serialize($data), Carbon::now()->addMinutes(30));
    }

    public function forgetCache($key) {
        Cache::forget($key);
    }

    public function hasCache($key)
    {
        if(Cache::has($key)) {
            return json_encode(unserialize(Cache::get($key)));
        }
    }

    public function buildCacheKey($class, $method, $url)
    {
        $query = preg_replace('/.*\/api/','',  $url);
        $class = array_last(explode('\\', $class));

        return "$class:$method#api$query";
    }
}
