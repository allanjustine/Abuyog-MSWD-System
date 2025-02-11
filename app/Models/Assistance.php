<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    protected $guarded = [];

    protected $casts = [
        'date_received' => 'date',
    ];
    public function benefitReceiveds() {
        return $this->hasMany(BenefitReceived::class);
    }
}
