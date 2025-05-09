<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BenefitReceived extends Model
{
    use HasFactory;

    protected $table = 'benefits_received';
    protected $guarded = [];

    protected $casts = [
        'date_received' => 'datetime',
        'amount' => 'decimal:2', // Ensures amount is always formatted as a decimal with two places
    ];
    

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class, 'beneficiary_id');
    }

    public function assistance()
    {
        return $this->belongsTo(Assistance::class);
    }
}
