<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class AddressType extends Model
{
    use SoftDeletes;

    /**
     * Get the address associated with the AddressType
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function address(): HasMany
    {
        return $this->hasMany(Address::class);
    }
}
