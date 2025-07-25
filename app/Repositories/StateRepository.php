<?php

namespace App\Repositories;

use App\Models\State;
use App\Repositories\Contracts\StateRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;

class StateRepository implements StateRepositoryInterface
{
    use BaseRepositoryTrait, OptionalRepositoryTrait;

    protected function getModel(): Model
    {
         return new State();
    }
}
