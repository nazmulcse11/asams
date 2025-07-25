<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BuyerType extends Model
{
    protected $fillable = [
        'name',
    ];

    public function buyers(): HasMany
    {
        return $this->hasMany(Buyer::class);
    }
}
