<?php

namespace App\Repositories;

use App\Models\Country;
use App\Repositories\Contracts\CountryRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;

class CountryRepository implements CountryRepositoryInterface
{
    use BaseRepositoryTrait, OptionalRepositoryTrait;


    protected function getModel(): Model
    {
         return new Country();
    }
}
