<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusType extends Model
{
    public function statuses()
    {
        return $this->hasMany(Status::class);
    }
}
