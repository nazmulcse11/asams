<?php

namespace App\Repositories\Traits;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

trait OptionalRepositoryTrait
{
    use CacheableRepositoryTrait;

    /**
     * Get the model instance.
     *
     * @return Model
     */
    abstract protected function getModel(): Model;

    /**
     * Get the total count of records.
     *
     * @param  array  $conditions
     * @return int
     */
    public function count(array $conditions = []): int
    {
        return   $this
            ->getModel()
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
            ->count();
    }

    /**
     * Load relationships with the model.
     *
     * @param  array  $relationships
     * @return Collection
     */
    public function withRelationships(array $relationships): Collection
    {
        return $this->getModel()->with($relationships)->latest()->get()->map(fn ($item) => (object) $item->toArray());
    }

    /**
     * Find records by specific conditions.
     *
     * @param  array  $conditions
     * @return Collection
     */
    public function findBy(array $conditions): Collection
    {
        return $this->getModel()->where($conditions)->get()->map(fn ($item) => (object) $item->toArray());
    }

    /**
     * Get the latest record.
     *
     * @return Model|null
     */
    public function latest(): ?Model
    {
        return $this->getModel()->latest()->first();
    }

    /**
     * Get the first record.
     *
     * @return object|null
     */
    public function first(): ?Model
    {
        return $this->getModel()->first();
    }

    /**
     * Check if a record exists based on conditions.
     *
     * @param  array  $conditions
     * @return bool
     */
    public function exists(array $conditions): bool
    {
        return $this->getModel()->where($conditions)->exists();
    }

    /**
     * Find records by conditions and load specified relationships.
     *
     * @param array $conditions
     * @param array $relationships
     * @return Collection
     */
    public function findByWithRelationships(array $conditions, array $relationships): Collection
    {
        return $this->getModel()->with($relationships)
            ->where($conditions)
            ->latest()
            ->get();
    }


    /**
     * Find records by specific conditions.
     *
     * @param  array  $select
     * @param  array  $conditions
     * @param  array  $with
     * @return Collection
     */
    public function findByCriteria(array $select = ["*"], array $conditions = [], array $with = []): \Illuminate\Support\Collection
    {
        return $this->getModel()->select($select)->where($conditions)->with($with)->get();
    }
}
