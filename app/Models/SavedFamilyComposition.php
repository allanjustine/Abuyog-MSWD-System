<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SavedFamilyComposition extends Model
{
    protected $guarded = [];

    protected $casts = [
        'is_saved' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function savedFamilyCompositionDetails()
    {
        return $this->hasMany(SavedFamilyCompositionDetail::class)->chaperone();
    }
}
