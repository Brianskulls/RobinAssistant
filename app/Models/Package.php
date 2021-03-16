<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'packages';

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function organisations()
    {
        return $this->hasMany(Organisation::class);
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
