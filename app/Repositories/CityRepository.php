<?php

namespace App\Repositories;

use App\Models\City;
use App\Repositories\Contracts\CityRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;

class CityRepository implements CityRepositoryInterface
{
    use BaseRepositoryTrait, OptionalRepositoryTrait;

    protected function getModel(): Model
    {
         return new City();
    }
}
