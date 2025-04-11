<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SavedFamilyCompositionDetail extends Model
{
    protected $guarded = [];

    public function savedFamilyComposition()
    {
        return $this->belongsTo(SavedFamilyComposition::class);
    }
}
