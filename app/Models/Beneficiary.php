<?php

namespace App\Models;

use App\Models\BenefitReceived;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'date_of_birth'         =>          'date',
        'appearance_date'       =>          'date',
        'approved_at'           =>          'date',
        'is_deceased'           =>          'boolean',
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

    public function benefitReceiveds()
    {
        return $this->hasMany(BenefitReceived::class, 'beneficiary_id');
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

    public function acceptedBy()
    {
        return $this->belongsTo(User::class, 'accepted_by');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function approvedBy()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    public function expiredBeneficiary()
    {
        return ($this->program_enrolled === 3 && $this->created_at->lt(now()->subYears(5))) || ($this->program_enrolled === 2 && $this->created_at->lt(now()->subYears(1)));
    }
}
