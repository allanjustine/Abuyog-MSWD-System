<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    // In Application.php (Model)

    protected $guarded = [];

    protected $casts = [
        'approved_at'       =>      'datetime',
        'custome_fields'    =>      'array'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function approvedBy()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
