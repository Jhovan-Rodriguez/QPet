<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $fillable = [
        'raza',
        'name',
        'especie',
        'fecha_nacimiento',
        'sexo',
        'altura',
        'peso',
        'descripcion',
        'adopcion',
        'users_id'
    ];
}
