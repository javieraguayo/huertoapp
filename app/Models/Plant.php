<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;

    public function vegetables()
    {
        return $this->hasMany('App\Models\Vegetable');
    }
}
