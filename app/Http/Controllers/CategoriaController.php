<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //convenciones de nombres en las funciones.
    public function index(){
        return "Bienvenido a la página principal.";
    }

    public function create(){
        return "Acá se crea";
    }

    public function show(){
        return "acá se muestra";
    }
}


