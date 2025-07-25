<?php

namespace App\Repositories\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

trait BulkDeletesRepositoryTrait
{
    use CacheableRepositoryTrait;

    /**
     * Get the model instance.
     *
     * @return Model
     */
    abstract protected function getModel(): Model;

    /**
     * Delete multiple records by their IDs.
     *
     * @param array $ids
     * @return bool
     */
    public function deleteBulk(array $ids): bool
    {
        $model = $this->getModel();
        $deleted = false;

        foreach (array_chunk($ids, 1000) as $chunk) {
            $deleted = (bool) $model->whereIn('id', $chunk)->delete();
        }

        return $deleted;
    }

}
