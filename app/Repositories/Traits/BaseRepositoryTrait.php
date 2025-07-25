<?php

namespace App\Repositories\Traits;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Collection as SupportCollection;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

trait BaseRepositoryTrait
{
    use CacheableRepositoryTrait;

    /**
     * Get the model instance.
     *
     * @return Model
     */
    abstract protected function getModel(): Model;

    /**
     * Get all records.
     *
     * @param  array  $select
     * @param  array  $conditions
     * @param  array  $with
     * @param  string  $orderBy
     * @param  string  $orderDirection
     * @param  int  $limit
     * @param  int  $page
     * @param  bool  $useChunking
     * @param  bool  $usePagination
     * @return SupportCollection|Collection|LengthAwarePaginator|Paginator|null
     */
    public function all(
        array $select = ["*"],
        array $conditions = [],
        array $with = [],
        string $orderBy = 'created_at',
        string $orderDirection = 'desc',
        int $limit = 1000,
        int $page = 1,
        bool $useChunking = false,
        bool $usePagination = false
    ): SupportCollection|Collection|LengthAwarePaginator|Paginator|null
    {

        $query = $this
            ->getModel()
            ->select($select)
            ->with($with)
            ->when(!empty($conditions), function ($query) use ($conditions) {
                foreach ($conditions as $field => $value) {
                    if (is_array($value) && count($value) === 2) {
                        // Example: ['price' => ['>', 100]] → WHERE price > 100
                        $query->where($field, $value[0], $value[1]);
                    } else {
                        // Default: WHERE field = value
                        $query->where($field, '=', $value);
                    }
                }
            })
            ->orderBy($orderBy, $orderDirection);

        if ($useChunking) {
            return $query->chunk($limit, function ($records) {
                return $records;
            });
        }

        if ($usePagination) {
            return $query->paginate($limit);
        }

        return $query
            ->offset(($page - 1) * $limit)
            ->limit($limit)
            ->get();
    }

    /**
     * Paginate records.
     *
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function paginate(int $perPage = 15): LengthAwarePaginator
    {
        return $this->getModel()->latest()->paginate($perPage)->through(fn ($item) => (object) $item->toArray());
    }

    /**
     * Find a record by its ID.
     *
     * @param  mixed  $id
     * @param  array  $with
     * @return Model|null
     */
    public function findById(mixed $id, array $with = []): ?Model
    {
        return $this->getModel()->with($with)->find($id);
    }

    /**
     * Create a new record.
     *
     * @param  array  $attributes
     * @return Model|null
     */
    public function create(array $attributes): ?Model
    {
        return $this->getModel()->create($attributes);
    }

    /**
     * Update an existing record by its ID.
     *
     * @param  mixed  $id
     * @param  array  $attributes
     * @return Model
     */
    public function update(mixed $id, array $attributes): Model
    {
        $record = $this->getModel()->find($id);
        $record->update($attributes);
        return $record;
    }

    /**
     * Delete a record by its ID.
     *
     * @param mixed $id
     * @return bool
     */
    public function delete(mixed $id): bool
    {
        return (bool) $this->getModel()->where('id', $id)->delete();
    }
}
