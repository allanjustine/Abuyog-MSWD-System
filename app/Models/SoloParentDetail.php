<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoloParentDetail extends Model
{
    protected $guarded = [];

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }

    public function forSpdOrSpoUseOnly() {
        return $this->hasOne(ForSpdOrSpoUseOnly::class);
    }
}
