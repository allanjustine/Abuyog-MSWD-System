<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id', // Ensure this is in your database table
        'first_name',
        'middle_name',
        'last_name',
        'address',
        'status',
    ];

    /**
     * Define the relationship between Reports and Service.
     */
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
