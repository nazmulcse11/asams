<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;

    /**
     * Fillable attributes for mass assignment.
     */
    protected $fillable = [
        'addressable_id',
        'addressable_type',
        'type_id',
        'address_line1',
        'address_line2',
        'city_id',
        'state_id',
        'country_id',
        'zip_code',
        'is_primary',
    ];

    /**
     * Casts for automatic data type conversion.
     */
    protected $casts = [
        'is_primary' => 'boolean',
    ];

    protected $appends = [
        'type_name',
        'full_address',
    ];

    /**
     * Get the parent addressable model (admin, employee, agent).
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function addressable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Get the address type.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(AddressType::class, "type_id")->withDefault(function (){
            return (object) ['name' => 'N/A'];
        });
    }

    public function getTypeNameAttribute(): string
    {
        return $this->type->name;
    }

    /**
     * City relation.
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    /**
     * State relation.
     */
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    /**
     * Country relation.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    /**
     * Accessor for full formatted address.
     */
    public function getFullAddressAttribute(): string
    {
        $parts = array_filter([
            $this->address_line1,
            $this->address_line2,
            optional($this->city)->name,
            optional($this->state)->name,
            $this->zip_code,
            optional($this->country)->name,
        ]);

        return implode(', ', $parts);
    }
}
