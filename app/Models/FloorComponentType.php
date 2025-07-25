<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FloorComponentType extends Model
{
    protected $fillable = [
        'name',
        'description',
        'icon',
    ];

    public function components()
    {
        return $this->hasMany(FloorComponent::class);
    }
}
