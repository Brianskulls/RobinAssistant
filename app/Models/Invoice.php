<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function organisation()
    {
        return $this->belongsTo(Organisation::class);
    }

    public function package()
    {
        return $this->belongsTo(Organisation::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }
}
