<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;

    protected $table = "periodos";

    public function sectores(){
        return $this->belongsToMany('App\Models\Sector');
    }

    public function evaluaciones(){
        return $this->hasMany('App\Models\Evaluacione');
    }
}
