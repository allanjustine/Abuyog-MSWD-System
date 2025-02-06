<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccomplishedBy extends Model
{
    protected $guarded = [];

    public function pwdDetail()
    {
        return $this->belongsTo(PwdDetail::class);
    }
}
