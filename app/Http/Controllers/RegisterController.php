<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    //Funcion para crear un usuario normal
    public function create(Request $request){
        
        //Validaciones de formularios
        $this->validate($request,[
            'username'=>'required',
            'nombre'=>'required',
            'apellido_m'=>'required',
            'apellido_p'=>'required',
            'telefono'=>'required',
            'email'=>'required',
            'genero'=>'required',
            'fecha_nac'=>'required',
            'password'=>'required|confirmed',
        ]);

        //Se crean los usuarios 
        User::create([
            'username'=>$request->username,
            'name'=>$request->nombre,
            'email'=>$request->email,
            'apellido_p'=>$request->apellido_p,
            'apellido_m'=>$request->apellido_m,
            'telefono'=>$request->telefono,
            'genero'=>$request->genero,
            'fecha_nac'=>$request->fecha_nac,
            'password'=>$request->password,
            'tipo_usuario'=>1
        ]); 

        // Otra forma de autenticar
        auth()->attempt($request->only('email', 'password'));

        // Redirecciona
        return redirect()->route('login');
    }
}
