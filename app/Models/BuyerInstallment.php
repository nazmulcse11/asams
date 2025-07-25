<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BuyerInstallment extends Model
{
    protected $fillable = [
        'installment_id',
        'buyer_payment_id',
        'paid_amount',
    ];

    protected $casts = [
        'paid_amount' => 'decimal:2',
    ];

    public function installment(): BelongsTo
    {
        return $this->belongsTo(Installment::class);
    }

    public function buyerPayment(): BelongsTo
    {
        return $this->belongsTo(BuyerPayment::class);
    }
}
