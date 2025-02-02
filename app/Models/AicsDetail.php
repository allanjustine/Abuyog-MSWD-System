<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AicsDetail extends Model
{
    protected $guarded = [];

    protected $casts = [
        'date_applied' => 'datetime',
    ];

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }
}
