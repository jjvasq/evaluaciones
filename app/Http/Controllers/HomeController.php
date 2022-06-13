<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Método Invoke, es cuando queremos que el controlador administre una única ruta.
    public function __invoke()
    {
        return view('welcome2');
    }
}
