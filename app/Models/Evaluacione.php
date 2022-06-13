<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacione extends Model
{
    use HasFactory;

    public function ficha(){
        return $this->belongsTo('App\Models\Ficha');
    }

    public function periodo(){
        return $this->belongsTo('App\Models\Periodo');
    }

    public function evaluador(){
        return $this->belongsTo('App\Models\User', 'user_id_evaluador', 'id');
    }

    public function evaluado(){
        return $this->belongsTo('App\Models\User', 'user_id_evaluado', 'id');
    }
}
