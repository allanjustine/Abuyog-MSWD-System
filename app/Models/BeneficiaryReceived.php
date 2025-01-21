<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BeneficiaryReceived extends Model
{
    protected $guarded = [];

    protected $casts = [
        'date_received' => 'datetime',
        'date_expired' => 'datetime'
    ];

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
