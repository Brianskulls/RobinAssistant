<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function activity()
    {
        return $this->hasOne(Activity::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
