<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Irrigation extends Model
{
    use HasFactory;
    
    public function plants()
    {
        return $this->hasMany('App\Models\Plant');
    }
}
