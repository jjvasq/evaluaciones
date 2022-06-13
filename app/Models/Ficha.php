<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;

    protected $table = "fichas";

    public function tipo(){
        return $this->belongsTo('App\Models\Tipo');
    }

    public function evaluacion(){
        return $this->hasOne('App\Models\Evaluacione');
    }

    public function items(){
        return $this->belongsToMany('App\Models\Item');
    }
}
