<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BenefitReceived extends Model
{
    use HasFactory;

    protected $table = 'benefits_received'; 
    protected $fillable = [
        'beneficiary_id', 
        'name_of_assistance', 
        'type_of_assistance', 
        'amount', 
        'date_received',
        'status',
        'not_received_reason',
    ];

    public function beneficiary()
{
    return $this->belongsTo(Beneficiary::class, 'beneficiary_id');
}

}
