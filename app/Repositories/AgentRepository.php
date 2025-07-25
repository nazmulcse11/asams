<?php

namespace App\Repositories;

use App\Filters\AgentFilter;
use App\Models\Agent;
use App\Repositories\Contracts\AgentRepositoryInterface;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\CacheableRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Propaganistas\LaravelPhone\PhoneNumber;

class AgentRepository implements AgentRepositoryInterface
{
    use BaseRepositoryTrait, OptionalRepositoryTrait;

    protected AgentFilter $filter;

    public function __construct(AgentFilter $filter)
    {
        $this->filter = $filter;
    }

    public function getModel(): Model
    {
        return new Agent();
    }
}
