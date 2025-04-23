<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FamilyComposition extends Model
{
    protected $guarded = [];

    protected $casts = [
        'birthday' => 'date',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
