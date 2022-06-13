<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    protected $table = "sectores";

    public function usuarios(){
        return $this->hasMany('App\Models\User');
    }

    public function periodos(){
        return $this->belongsToMany('App\Models\Periodo');
    }
}
