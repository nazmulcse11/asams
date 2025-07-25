<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PaymentMode extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    // Relationship with BuyerPayments
    public function buyerPayments(): HasMany
    {
        return $this->hasMany(BuyerPayment::class);
    }
}
