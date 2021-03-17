<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function step()
    {
        return $this->belongsTo(Step::class);
    }
}
