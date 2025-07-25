<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ShopFor extends Model
{
    protected $fillable = ['name'];

    public function shops(): HasMany
    {
        return $this->hasMany(Shop::class);
    }
}
