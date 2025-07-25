<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RfidSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'pc_name',
        'uid',
        'status',
        'connected_at',
        'disconnected_at',
    ];

    protected $casts = [
        'connected_at' => 'datetime',
        'disconnected_at' => 'datetime',
    ];

    // 🔍 Custom Scope: RfidSession::active()
    public function scopeActive($query)
    {
        return $query->where('status', 'connected');
    }
}
