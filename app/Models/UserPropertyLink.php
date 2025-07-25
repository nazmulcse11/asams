<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class UserPropertyLink extends Model
{
    protected $fillable = [
        'user_id',
        'user_type',
        'property_id',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'property_id' => 'integer',
    ];

    public function user(): MorphTo
    {
        return $this->morphTo();
    }

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }

    public function selected(): HasOne
    {
        return $this->hasOne(UserSelectedProperty::class);
    }

    public function isSelected(): bool
    {
        return $this->selected()->exists();
    }
}
