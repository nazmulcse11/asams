<?php

namespace App\Models;

use App\Traits\AutoLogsActivity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AgentPayment extends Model
{
    use SoftDeletes, AutoLogsActivity;

    protected $fillable = [
        'agent_id',
        'shop_id',
        'agent_shop_id',
        'amount',
        'date',
        'payment_mode_id',
        'reference',
        'document_path',
        'notes',
        'employee_notes',
        'admin_notes',
        'status_id',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];

    protected static function booted()
    {
        static::creating(function ($payment) {
            if (empty($payment->public_id)) {
                $payment->public_id = 'TXN-' . uuid();
            }
        });
    }

    // Relationships
    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function agentShop()
    {
        return $this->belongsTo(AgentShop::class);
    }

    public function paymentMode()
    {
        return $this->belongsTo(PaymentMode::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
