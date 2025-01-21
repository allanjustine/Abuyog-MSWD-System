<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    protected $table = 'barangays'; // Table name
    protected $fillable = ['name', 'latitude', 'longitude']; // Fillable fields

    // Relationship: A barangay has many beneficiaries
    public function beneficiaries()
    {
        return $this->hasMany(Beneficiary::class);
    }
}
