<?php

namespace App\Repositories\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

trait SoftDeletesRepositoryTrait
{
    use CacheableRepositoryTrait;

    /**
     * Get the model instance.
     *
     * @return Model
     */
    abstract protected function getModel(): Model;

    /**
     * Restore a soft-deleted record.
     *
     * @param mixed $id
     * @return bool
     */
    public function restore(mixed $id): bool
    {
        return $this->getModel()->onlyTrashed()->where('id', $id)->restore();
    }

    /**
     * Permanently delete a soft-deleted record.
     *
     * @param mixed $id
     * @return bool
     */
    public function forceDelete(mixed $id): bool
    {
        return $this->getModel()->onlyTrashed()->where('id', $id)->forceDelete();
    }

    /**
     * Restore multiple soft-deleted records.
     *
     * @param array $ids
     * @return bool
     */
    public function restoreBulk(array $ids): bool
    {
        $model = $this->getModel();
        $restored = false;

        foreach (array_chunk($ids, 1000) as $chunk) {
            $restored = (bool) $model->onlyTrashed()->whereIn('id', $chunk)->restore();
        }

        return $restored;
    }

    /**
     * Permanently delete multiple soft-deleted records.
     *
     * @param array $ids
     * @return bool
     */
    public function forceDeleteBulk(array $ids): bool
    {
        $model = $this->getModel();
        $deleted = false;

        foreach (array_chunk($ids, 1000) as $chunk) {
            $deleted = (bool) $model->onlyTrashed()->whereIn('id', $chunk)->forceDelete();
        }

        return $deleted;
    }
}
