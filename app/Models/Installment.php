<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Installment extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_shop_id',
        'title',
        'due_date',
        'amount',
        'is_paid',
        'notes',
    ];

    protected $casts = [
        'due_date' => 'date',
        'amount' => 'decimal:2',
        'is_paid' => 'boolean',
    ];

    public function buyerShop(): BelongsTo
    {
        return $this->belongsTo(BuyerShop::class);
    }

    public function buyerInstallments(): HasMany
    {
        return $this->hasMany(BuyerInstallment::class);
    }

    public function totalPaid(): float
    {
        return $this->buyerInstallments()->sum('paid_amount');
    }

    public function dueAmount(): float
    {
        return $this->amount - $this->totalPaid();
    }

    public function isFullyPaid(): bool
    {
        return $this->dueAmount() <= 0;
    }

    public function scopeDue($query)
    {
        return $query->where('is_paid', false)->where('due_date', '<=', now());
    }
}
