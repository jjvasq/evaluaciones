<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'descripcion'];
    //para indicarle a qué tabla refiere:
    protected $table = "categorias";

    public function items(){
        return $this->hasMany('App\Models\Item');
    }
}
