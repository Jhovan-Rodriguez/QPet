<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
class MascotaController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::where('users_id',auth()->user()->id)->get();

        return view('mascotas.index',[
            'mascotas' => $mascotas
        ]);
    }
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
            'descripcion' => 'required',
            'image' => 'required',
        ]);

        Mascota::create([
            'image' => $request->image,
            'name' => $request->name,
            'raza' => $request->raza,
            'especie' => $request->especie,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'sexo' => $request->sexo,
            'altura' => $request->altura,
            'peso' => $request->peso,
            'descripcion' => $request->descripcion,
            'adopcion' => 0,
            'users_id' => auth()->user()->id,
            
        ]);
        return redirect()->route('mascotas.index');
    }

    public function edit(Mascota $mascota)
    {
        return view('mascotas.edit', [
            'mascota' => $mascota
        ]);
    }

    public function update(Request $request, Mascota $mascota)
    {
        $this->validate($request,[
            'name' => 'required|max:30',
            'raza' => 'required|max:30',
            'especie' => 'required',
            'fecha_nacimiento' => 'required',
            'sexo' => 'required',
            'altura' => 'required',
            'peso' => 'required',
            'descripcion' => 'required',
            'image' => 'required',
        ]);

        $mascota->name = $request->name;
        $mascota->raza = $request->raza;
        $mascota->especie = $request->especie;
        $mascota->fecha_nacimiento = $request->fecha_nacimiento;
        $mascota->sexo = $request->sexo;
        $mascota->altura = $request->altura;
        $mascota->peso = $request->peso;
        $mascota->descripcion = $request->descripcion;
        $mascota->image = $request->image;
        $mascota->save();

        return redirect()->route('mascotas.index');
    }

    public function destroy(Mascota $mascota)
    {
        // Elimina el mascota
        $mascota->delete();

        // Elimina la imagen asociada al mascota
        $imagen_path = public_path('uploads/' . $mascota->image);

        if(File::exists($imagen_path)){
            unlink($imagen_path);
        }

        return redirect()->route('mascotas.index');
    } 
}
