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
}
