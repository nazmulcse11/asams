<?php

namespace App\Models;

use App\Traits\AutoLogsActivity;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Shop extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia, AutoLogsActivity;

    protected $fillable = [
        'block_id',
        'floor_id',
        'status_id',
        'uuid',
        'number',
        'description',
        'area',
        'length',
        'width',
        'total_area',
        'length_half_corridor',
        'width_full_shop',
        'floor_position',
        'min_sale_price',
        'booking_percent',
        'commission_percent',
    ];

    protected $casts = [
        'floor_position' => 'array',
        'min_sale_price' => 'decimal:2',
        'booking_percent' => 'decimal:2',
    ];

    protected $appends = [
        'picture',
    ];

    public function registerMediaCollections(?Media $media = null): void
    {
        $this
            ->addMediaConversion("picture")
            ->fit(Fit::Contain, 100, 100)
            ->nonQueued();
    }

    public function getPictureAttribute(): ?array
    {
        return $this->getMedia('picture')->map(function ($media) {
            return $media->getUrl();
        })->toArray();
    }

    public function floor(): BelongsTo
    {
        return $this->belongsTo(Floor::class);
    }

    public function block(): BelongsTo
    {
        return $this->belongsTo(Block::class);
    }

    public function features(): HasMany
    {
        return $this->hasMany(ShopFeature::class);
    }

    public function agentShops(): HasMany
    {
        return $this->hasMany(AgentShop::class);
    }

    public function agentShop()
    {
        return $this->agentShops()
            ->where('status_id', getStatusId('Agent Shop', 'Approved'))
            ->first();
    }

    public function pendingReserves(): Collection
    {
        return $this->agentShops()
            ->where('status_id', getStatusId('Agent Shop', 'Pending'))
            ->get();
    }

    public function verifiedReserves(): Collection
    {
        return $this->agentShops()
            ->where('status_id', getStatusId('Agent Shop', 'Verified'))
            ->get();
    }

    public function approvedReserves(): Collection
    {
        return $this->agentShops()
            ->where('status_id', getStatusId('Agent Shop', 'Approved'))
            ->get();
    }

    public function buyerShops(): HasMany
    {
        return $this->hasMany(BuyerShop::class);
    }

    public function buyerShop()
    {
        return $this->buyerShops()
            ->where('status_id', getStatusId('Buyer Shop', 'Approved'))
            ->first();
    }

    public function for(): BelongsTo
    {
        return $this->belongsTo(ShopFor::class);
    }

    public function buyer(): HasOneThrough
    {
        return $this->hasOneThrough(
            Buyer::class,
            BuyerShop::class,
            'shop_id',  // FK on BuyerShop
            'id',       // FK on Buyer
            'id',       // Local key on Shop
            'buyer_id'  // Local key on BuyerShop
        );
    }

    public function pendingRequests()
    {
        return $this->buyerShops()
            ->where('status_id', getStatusId('Buyer Shop', 'Pending'))
            ->get();
    }

    public function verifyedRequests()
    {
        return $this->buyerShops()
            ->where('status_id', getStatusId('Buyer Shop', 'Verified'))
            ->get();
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
