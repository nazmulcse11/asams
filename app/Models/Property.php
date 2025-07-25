<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Property extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'property_setup_id',
        'address_id',
        'name',
        'latitude',
        'longitude',
        'contact_person',
        'contact_designation',
        'contact_email',
        'contact_number',
        'total_area',
        'floor_size',
        'length',
        'wide',
        'property_type_id',
        'video',
    ];

    protected $appends = [
        'picture',
        'total_count',
    ];

    protected $casts = [
        "total_count" => "object",
    ];

    /**
     * Register the media collections.
     *
     * @param  \Spatie\MediaLibrary\MediaCollections\Models\Media|null  $media
     * @return void
     */
    public function registerMediaCollections(?Media $media = null): void
    {
        $this
            ->addMediaConversion("picture")
            ->fit(Fit::Contain, 470, 265)
            ->nonQueued();
    }

    public function getPictureAttribute(): ?array
    {
        return $this->getMedia('picture')->map(function ($media) {
            return $media->getUrl();
        })->toArray();
    }

    public function setup(): BelongsTo
    {
        return $this->belongsTo(PropertySetup::class, 'property_setup_id');
    }

    public function propertyType(): BelongsTo
    {
        return $this->belongsTo(PropertyType::class);
    }

    public function addresses(): MorphMany
    {
        return $this->morphMany(Address::class, 'addressable');
    }

    public function floors(): HasMany
    {
        return $this->hasMany(Floor::class);
    }

    public function shops()
    {
        return $this->hasManyThrough(
            Shop::class,
            Floor::class,
            'property_id',
            'floor_id',
            'id',
            'id'
        );
    }

    public function agentLinks(): HasMany
    {
        return $this->hasMany(UserPropertyLink::class, 'property_id')
            ->where('user_type', Agent::class);
    }

    public function admins(): HasManyThrough
    {
        return $this->hasManyThrough(
            User::class,
            UserPropertyLink::class,
            'property_id', // Foreign key on UserPropertyLink
            'id',          // Local key on Agent
            'id',          // Local key on Property
            'user_id'      // Foreign key on UserPropertyLink
        )->where('user_property_links.user_type', User::class);
    }

    public function employees(): HasManyThrough
    {
        return $this->hasManyThrough(
            Employee::class,
            UserPropertyLink::class,
            'property_id', // Foreign key on UserPropertyLink
            'id',          // Local key on Agent
            'id',          // Local key on Property
            'user_id'      // Foreign key on UserPropertyLink
        )->where('user_property_links.user_type', Employee::class);
    }

    public function agents(): HasManyThrough
    {
        return $this->hasManyThrough(
            Agent::class,
            UserPropertyLink::class,
            'property_id', // Foreign key on UserPropertyLink
            'id',          // Local key on Agent
            'id',          // Local key on Property
            'user_id'      // Foreign key on UserPropertyLink
        )->where('user_property_links.user_type', Agent::class);
    }

    public function buyers()
    {
        return $this->hasManyThrough(
            Buyer::class,
            UserPropertyLink::class,
            'property_id', // user_property_links.property_id
            'agent_id',    // buyers.agent_id
            'id',          // properties.id
            'user_id'      // user_property_links.user_id (Agent ID)
        )->where('user_property_links.user_type', Agent::class);
    }

    public function getTotalCountAttribute(): object
    {
        return arrayToObject([
            'floor' => $this->floors()->count(),
            'block' => $this->floors->flatMap->blocks->count(),
            'shop' => $this->floors->flatMap->blocks->flatMap->shops->count(),
        ]);
    }
}
