<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Veterinaria;
use Illuminate\Http\Request;

class RegisterVeterinariasController extends Controller
{
    //Funcion para registrar las veterinarias a la base de datos 
    public function store(Request $request){
        //Se validan los formularios del registro
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
            'nombre_vet'=>'required',
            'colonia' => 'required',
            'calle' => 'required',
            'cp'=>'required|max:6',
            'num_exterior' =>'required',
            'estado' => 'required',
            'ciudad' => 'required',
            'tel_vet' => 'required',
            'email_vet'=>'required'
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
            'tipo_usuario'=>2
        ]); 
        //Se crea la veterinaria
        Veterinaria::create([
            'nombre'=>$request->nombre_vet,
            'colonia'=>$request->colonia,
            'calle'=>$request->calle,
            'cp'=>$request->cp,
            'num_ext'=>$request->num_exterior,
            'estado'=>$request->estado,
            'ciudad'=>$request->ciudad,
            'telefono'=>$request->tel_vet,
            'email'=>$request->email_vet
        ]);

        // Otra forma de autenticar
        auth()->attempt($request->only('email', 'password'));

        // Redirecciona
        return redirect()->route('login');

    }
}
