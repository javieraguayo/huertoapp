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

    public function sowing_types()
    {
        return $this->hasMany('App\Models\Sowing_type');
    }

    public function months()
    {
        return $this->belongsToMany('App\Models\Month');
    }
}
