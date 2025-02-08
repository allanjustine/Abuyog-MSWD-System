<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ForSpdOrSpoUseOnly extends Model
{
    protected $guarded = [];

    public function soloParentDetail()
    {
        return $this->belongsTo(SoloParentDetail::class);
    }
}
