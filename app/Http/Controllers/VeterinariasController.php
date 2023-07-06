<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeterinariasController extends Controller
{
    //Funcion para mostrar la vista de veterinarias
    public function index(){
        return view('veterinarias.veterinarias');
    }
}
