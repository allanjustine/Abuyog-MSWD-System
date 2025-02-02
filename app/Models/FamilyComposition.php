<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FamilyComposition extends Model
{
    protected $guarded = [];

    protected $casts = [
        'birthday' => 'date',
    ];

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }
}
