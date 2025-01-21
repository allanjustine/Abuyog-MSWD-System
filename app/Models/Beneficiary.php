<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'phone',
        'program_enrolled', // Program (Service)
        'barangay_id',      // Foreign key for barangay
        'latitude',
        'longitude',
    ];

    // Relationship: Beneficiary belongs to a Barangay
    public function barangay()
    {
        return $this->belongsTo(Barangay::class);
    }

    // Relationship: Beneficiary belongs to a Service (Program)
    public function service()
    {
        return $this->belongsTo(Service::class, 'program_enrolled', 'id'); // Specify foreign key explicitly
    }

    // Accessor for full name
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->middle_name} {$this->last_name}";
    }
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function receiveds()
    {
        return $this->hasMany(BeneficiaryReceived::class);
    }
}
