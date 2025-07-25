<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PaymentType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    /**
     * Relationship with Installments
     */
    public function installments(): HasMany
    {
        return $this->hasMany(Installment::class);
    }
}
