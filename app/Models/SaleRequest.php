<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'agent_id',
        'employee_id',
        'buyer_name',
        'address',
        'mobile',
        'nid_number',
        'proposed_price',
        'payment_type_id',
        'number_of_installment'
    ];

    // Relationships
    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id');
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class, 'agent_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function paymentType()
    {
        return $this->belongsTo(PaymentType::class, 'payment_type_id');
    }
}
