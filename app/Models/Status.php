<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';

    public function type()
    {
        return $this->belongsTo(StatusType::class, 'type_id', 'id');
    }
}
