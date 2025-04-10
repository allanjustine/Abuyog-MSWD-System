<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    protected $guarded = [];

    protected $casts = [
        'date_received' => 'datetime',
        'amount' => 'decimal:2', // Ensures amount is always formatted as a decimal with two places
    ];

    public function benefitReceiveds()
    {
        return $this->hasMany(BenefitReceived::class, 'assistance_id');
    }


}
