<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserSelectedProperty extends Model
{
    protected $fillable = [
        'user_property_link_id',
    ];

    protected $casts = [
        'user_property_link_id' => 'integer',
    ];

    protected $appends = ['property'];

    protected $with = ['link'];

    public function link(): BelongsTo
    {
        return $this->belongsTo(UserPropertyLink::class, 'user_property_link_id');
    }

    public function getPropertyAttribute(): ?Property
    {
        return $this->link?->property;
    }
}
