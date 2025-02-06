<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PwdDetail extends Model
{
    protected $guarded = [];

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }

    public function accomplishedBies() {
        return $this->hasMany(AccomplishedBy::class);
    }
}
