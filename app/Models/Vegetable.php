<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vegetable extends Model
{
    use HasFactory;

    public function illuminations()
    {
        return $this->hasMany('App\Models\Illumination');
    }

    public function harvests()
    {
        return $this->hasMany('App\Models\Harvest');
    }

    public function sowing_type()
    {
        return $this->hasMany('App\Models\Sowing_type');
    }
}
