<?php

namespace Madinastores\MadinastoresMicroserviceUtils\Redis;

use Illuminate\Support\Facades\Redis;

class RedisUtil
{
    // Set a value in Redis
    public static function set(string $key, $value, $timeout = 3600)
    {
        return Redis::setex($key, $timeout, $value);
    }

    // Get a value from Redis
    public static function get(string $key)
    {
        return Redis::get($key);
    }

    // Publish a message to a channel (for pub/sub)
    public static function publish(string $channel, $message)
    {
        return Redis::publish($channel, json_encode($message));
    }

    // Subscribe to a channel (for pub/sub)
    public static function subscribe(array $channels, callable $callback)
    {
        Redis::subscribe($channels, $callback);
    }

    // Delete a key from Redis
    public static function delete(string $key)
    {
        return Redis::del($key);
    }
}
