<?php

namespace App\Http\Controllers;

use App\Models\Veterinaria;
use Illuminate\Http\Request;

class VeterinariasController extends Controller
{
    //Funcion para mostrar la vista de veterinarias
    public function index(){
        //Se obtienen las veterinarias que se encuentran en la página
        $veterinarias= Veterinaria::all();
        //Se retorna a la vista de veterinarias
        return view('veterinarias.veterinarias',['veterinarias'=>$veterinarias]);
    }
}
