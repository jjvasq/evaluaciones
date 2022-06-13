<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = "items";

    protected $fillable = ['name', 'nroitem', 'descripcion', 'estado'];

    //Relación 1 a muchos.
    public function elecciones(){
        return $this->hasMany('App\Models\Eleccion');
    }

    public function fichas(){
        return $this->belongsToMany('App\Models\Ficha');
    }

    public function tipos(){
        return $this->belongsToMany('App\Models\Tipo');
    }

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }
}
