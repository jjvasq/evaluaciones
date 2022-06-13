<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleccion extends Model
{
    use HasFactory;

    protected $table = "elecciones";

    //Relación 1 a muchos inversa
    public function item(){
        return $this->belongsTo('App\Models\Item');
    }
}
