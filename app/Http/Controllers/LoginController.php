<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    //Función que devuelve la vista del login
    public function index(){
        //Se retorna la vista del login
        return view('auth.login');
    }
}
