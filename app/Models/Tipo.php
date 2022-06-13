<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    public function items(){
        return $this->belongsToMany('App\Models\Item');
    }

    public function fichas(){
        return $this->hasMany('App\Models\Ficha');
    }
}
