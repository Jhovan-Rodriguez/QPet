<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    //Funcion para retornar la vista del dashboard
    public function index(){
        return view('dashboard');
    }
}
