<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FloorComponent extends Model
{
    protected $fillable = [
        'floor_id',
        'floor_component_type_id',
        'x_position',
        'y_position',
        'width',
        'height',
    ];

    public function type(): BelongsTo
    {
        return $this->belongsTo(FloorComponentType::class, 'floor_component_type_id');
    }

    public function floor(): BelongsTo
    {
        return $this->belongsTo(Floor::class);
    }
}
