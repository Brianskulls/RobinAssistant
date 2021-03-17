<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

    //Use these constants as options for the panic button of a patient
    const PANIC_TYPE_SMS = 'sms';
    const PANIC_TYPE_CALL = 'call';
    const PANIC_TYPE_EMAIL = 'email';

    //Use these constants as options for the relation of a patient
    const RELATION_PROFESSIONAL = 'professional';
    const RELATION_PERSONAL = 'personal';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
