<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShopDeposit extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'shop_id',
        'agent_id',
        'agent_unit_id',
        'amount',
        'added_date',
        'added_by',
    ];

    /**
     * Get the property associated with the deposit.
     */
    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }

    /**
     * Get the agent associated with the deposit.
     */
    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }

    public function agentUnit(): BelongsTo
    {
        return $this->belongsTo(AgentUnit::class);
    }

    /**
     * Get the user who added the deposit.
     */
    public function addedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'added_by');
    }
}
