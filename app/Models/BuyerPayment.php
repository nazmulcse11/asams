<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class BuyerPayment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'buyer_shop_id',
        'amount',
        'payment_type_id',
        'payment_mode_id',
        'payment_date',
        'notes',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'payment_date' => 'date',
    ];

    public function buyerShop(): BelongsTo
    {
        return $this->belongsTo(BuyerShop::class);
    }

    public function paymentMode(): BelongsTo
    {
        return $this->belongsTo(PaymentMode::class);
    }

    public function paymentType(): BelongsTo
    {
        return $this->belongsTo(PaymentType::class);
    }

    public function buyerInstallments(): HasMany
    {
        return $this->hasMany(BuyerInstallment::class);
    }
}
