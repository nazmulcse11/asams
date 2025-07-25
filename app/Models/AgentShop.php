<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class AgentShop extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'agent_id',
        'shop_id',
        'reserve_type_id',
        'status_id',
        'duration',
        'sale_price',
        'security_deposit',
        'commission_type',
        'commission',
        'note',
    ];

    protected $casts = [
        'agent_id'           => 'integer',
        'shop_id'            => 'integer',
        'reserve_type_id'    => 'integer',
        'status_id'          => 'integer',
        'sale_price'         => 'float',
        'security_deposit'   => 'float',
        'commission'         => 'float',
    ];

    // Relationships

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }

    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }

    public function payment(): HasOne
    {
        return $this->hasOne(AgentPayment::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
