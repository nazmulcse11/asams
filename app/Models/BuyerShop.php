<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BuyerShop extends Model
{
    protected $fillable = [
        'buyer_id',
        'shop_id',
        'sell_amount',
        'booking_money',
        'management_fee',
        'booking_date',
        'payment_type_id',
        'agent_id',
        'agent_shop_id',
        'status_id',
        'notes',
    ];

    protected $casts = [
        'sell_amount' => 'decimal:2',
        'booking_money' => 'decimal:2',
        'management_fee' => 'decimal:2',
        'booking_date' => 'date',
    ];

    public function buyer(): BelongsTo
    {
        return $this->belongsTo(Buyer::class);
    }

    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }

    public function agentShop(): BelongsTo
    {
        return $this->belongsTo(AgentShop::class);
    }

    public function paymentType(): BelongsTo
    {
        return $this->belongsTo(PaymentType::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    public function installments(): HasMany
    {
        return $this->hasMany(Installment::class);
    }

    public function buyerPayments(): HasMany
    {
        return $this->hasMany(BuyerPayment::class, 'buyer_shop_id');
    }

    /**
     * Total payment amount received for this buyer_shop
     */
    public function getTotalPaidAmount(): float
    {
        return $this->buyerPayments()->sum('payment_amount');
    }

    /**
     * Total installment amount planned
     */
    public function getTotalInstallmentAmount(): float
    {
        return $this->installments()->sum('installment_amount');
    }

    /**
     * Total due amount (planned installment - actual payment)
     */
    public function getTotalDueAmount(): float
    {
        return $this->getTotalInstallmentAmount() - $this->getTotalPaidAmount();
    }

    /**
     * Get only due installments
     */
    public function getDueInstallments()
    {
        return $this->installments()
            ->whereRaw('(installment_amount - (SELECT COALESCE(SUM(payment_amount), 0) FROM buyer_installments WHERE installment_id = installments.id)) > 0')
            ->get();
    }

    /**
     * Check if the buyer has paid full
     */
    public function isFullyPaid(): bool
    {
        return $this->getTotalDueAmount() <= 0;
    }
}
