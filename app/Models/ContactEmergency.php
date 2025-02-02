<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactEmergency extends Model
{
    protected $guarded = [];

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }
}
