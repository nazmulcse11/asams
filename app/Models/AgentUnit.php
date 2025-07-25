<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class AgentUnit extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'agent_id',
        'shop_id',
        'commission',
        'security_money',
        'sale_price',
        'actual_sale_price',
        'status_id',
        'added_by',
        'approve_by',
        'booking_percent',
        'agree_booking_percent',
        'booking_amount',
        'offer_amount',
        'agree_booking_amount',
    ];

    protected $casts = [
        'security_deposit_paid' => 'boolean',
        'booking_percent' => 'decimal:2',
        'agree_booking_percent' => 'decimal:2',
        'booking_amount' => 'decimal:2',
        'agree_booking_amount' => 'decimal:2',
    ];

    protected $appends = ['status_name'];

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }

    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class, 'shop_id', 'id')->withDefault(fn() => (object) [
            'name' => 'N/A',
            'number' => 'N/A'
        ]);
    }

    public function status() : BelongsTo
    {
        return $this->belongsTo(Status::class, 'status_id')->withDefault(fn() => (object) ['name' => 'N/A']);
    }

    public function shopDeposit(): HasOne
    {
        return $this->hasOne(ShopDeposit::class, 'agent_unit_id');
    }

    public function installments(): HasMany
    {
        return $this->hasMany(Installment::class);
    }

    public function getStatusNameAttribute(): string
    {
        return $this->status->name;
    }
}
