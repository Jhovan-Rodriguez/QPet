<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    //Funcion para retornar la vista de registro
    public function index(){
        return view('auth.register');
    }

    //Funcion para mostrar la vista registrara Usuario normal
    public function registrarUsuario(){
        return view('auth.registerUsuarios');
    }   

    //Funcion para mostrar la vista de registrar veterinario
    public function registrarVeterinario(){
        return view('auth.registerVeterinarios');
    }
}
