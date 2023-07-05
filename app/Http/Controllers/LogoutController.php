<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //Funcion para cerrar sesión en el sistema
    public function store(){
        // Para cerrar sesión
        auth()->logout();
        // Redirecciona
        return redirect()->route('login');
    }
}
