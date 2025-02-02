<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'date_of_birth'         =>          'date',
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

    public function benefitsReceived()
    {
        return $this->hasMany(BenefitReceived::class, 'beneficiary_id')->chaperone();
    }
    public function familyCompositions()
    {
        return $this->hasMany(FamilyComposition::class)->chaperone();
    }
    public function aicsDetails()
    {
        return $this->hasMany(AicsDetail::class)->chaperone();
    }
    public function soloParentDetails()
    {
        return $this->hasMany(SoloParentDetail::class)->chaperone();
    }
    public function contactEmergencies()
    {
        return $this->hasMany(ContactEmergency::class)->chaperone();
    }
    public function familyBackgrounds()
    {
        return $this->hasMany(FamilyBackground::class)->chaperone();
    }
    public function pwdDetails()
    {
        return $this->hasMany(PwdDetail::class)->chaperone();
    }
}
