<?php

namespace App\Repositories\Traits;

use Illuminate\Support\Facades\Cache;

trait CacheableRepositoryTrait
{
    /**
     * Generate a cache key based on repository class.
     *
     * @param string $suffix
     * @return string
     */
    protected function getCacheKey(string $suffix): string
    {
        return get_class($this) . "_$suffix";
    }

    /**
     * Retrieve from cache or execute query and store result.
     *
     * @param string $key
     * @param int $ttl in seconds
     * @param callable $callback
     * @return mixed
     */
    protected function remember(string $key, int $ttl, callable $callback): mixed
    {
        return Cache::remember($this->getCacheKey($key), $ttl, $callback);
    }

    /**
     * Clear repository-related cache.
     *
     * This method will forget all cache related to the all records, paginated records
     * with 15 and 30 items per page.
     */
    protected function clearCache(): void
    {
        Cache::forget($this->getCacheKey('all'));
        Cache::forget($this->getCacheKey('paginate_15'));
        Cache::forget($this->getCacheKey('paginate_30'));
    }
}
