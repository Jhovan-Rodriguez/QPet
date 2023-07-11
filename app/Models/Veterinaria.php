<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinaria extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombre',
        'calle',
        'colonia',
        'num_ext',
        'email',
        'cp',
        'telefono',
        'ciudad',
        'estado'
    ];
}
