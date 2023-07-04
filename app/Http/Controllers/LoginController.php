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

    //Funcion para autentificar el usuario
    public function auth(Request $request){
        //Validaciones de formularios
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);

        // Condicion para saber si el user se pudo autenticar
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            // back() para volver a la pagina anterior, en este caso, con un mensaje
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }
        
        // Redirecciona
        return redirect()->route('post.index');
    }
}
