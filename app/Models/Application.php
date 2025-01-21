<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    // In Application.php (Model)
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
    
}
