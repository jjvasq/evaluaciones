<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    use HasFactory;

    protected $table = "puestos";

    public function usuarios(){
        return $this->hasMany('App\Models\User');
    }

    public function tipoFicha(){
        return $this->hasOne('App\Models\TipoFicha');
    }
}
