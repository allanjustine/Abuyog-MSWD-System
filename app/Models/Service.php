<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relationship to Beneficiaries (Service can have many Beneficiaries)
    public function beneficiaries()
    {
        return $this->hasMany(Beneficiary::class, 'program_enrolled')->chaperone(); // Program enrollment is the foreign key
    }
}
