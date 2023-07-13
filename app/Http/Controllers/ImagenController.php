<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImagenController extends Controller
{
    /**
     * Almacena una imagen en el servidor.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Obtener la imagen enviada en la solicitud
        $imagen = $request->file('file');

        // Generar un nombre único para la imagen utilizando UUID y su extensión original
        $nombreImagen = Str::uuid() . "." . $imagen->extension();

        // Crear una instancia de la clase Image con la imagen cargada
        $imagenServidor = Image::make($imagen);

        // Ajustar el tamaño de la imagen a 1000x1000 píxeles
        $imagenServidor->fit(1000, 1000);

        // Definir la ruta de almacenamiento de la imagen en el servidor
        $imagenPath = public_path('uploads') . '/' . $nombreImagen;

        // Guardar la imagen en el servidor
        $imagenServidor->save($imagenPath);

        // Devolver una respuesta JSON con el nombre de la imagen almacenada
        return response()->json(['imagen' => $nombreImagen]);
    }
}
