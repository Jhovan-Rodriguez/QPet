<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function create(){
        return view('mascotas.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:30',
            'raza' => 'required|max:30',
            'especie' => 'required',
            'fecha_nacimiento' => 'required',
            'sexo' => 'required',
            'altura' => 'required',
            'peso' => 'required',
            'descripcion' => 'required'
        ]);

        Mascota::create([
            'name' => $request->name,
            'raza' => $request->raza,
            'especie' => $request->especie,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'sexo' => $request->sexo,
            'altura' => $request->altura,
            'peso' => $request->peso,
            'descripcion' => $request->descripcion,
            'adopcion' => 0,
            'users_id' => 1,
        ]);


    }
}
