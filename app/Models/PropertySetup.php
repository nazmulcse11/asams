<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PropertySetup extends Model
{
    use HasFactory;

    protected $fillable = [
        'enable_area',
        'enable_block',
        'enable_unit',
        'enable_address_info',
        'enable_contact_info',
        'enable_gmaps',
        'img_video',
        'property_type',
    ];

    protected $casts = [
        'enable_area'          => 'boolean',
        'enable_block'         => 'boolean',
        'enable_unit'          => 'boolean',
        'enable_address_info'  => 'boolean',
        'enable_contact_info'  => 'boolean',
        'enable_gmaps'         => 'boolean',
        'img_video'            => 'boolean',
        'property_type'        => 'boolean',
    ];

    // Relation: One PropertySetup has one Property
    public function property(): HasOne
    {
        return $this->hasOne(Property::class);
    }
}
