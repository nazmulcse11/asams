<?php

namespace App\Repositories;

use App\Models\Floor;
use App\Repositories\Contracts\FloorRepositoryInterface;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\CacheableRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class FloorRepository implements Contracts\FloorRepositoryInterface
{
    use BaseRepositoryTrait,OptionalRepositoryTrait, CacheableRepositoryTrait;

    protected function getModel(): Model
    {
        return new Floor();
    }

    public function getDataTableData(Request $request): LengthAwarePaginator
    {
        // TODO: Implement getDataTableData() method.
    }
}
