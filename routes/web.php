<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home');
});

//Ruta para el dashboard
Route::get('/dashboard',[PostController::class,'index'])->name('post.index');


//Ruta para la vista login
Route::get('/login',[LoginController::class,'index'])->name('login');
//Ruta para la vista de registro
Route::get('/register',[RegisterController::class,'index'])->name('register');
//Ruta para la vista de registrar Usuarios Normales
Route::get('/registroUsuario',[RegisterController::class,'registrarUsuario'])->name('register.usuario');
//Ruta para la vista de registro de veterinaria
Route::get('/registroVeterinario',[RegisterController::class,'registrarVeterinario'])->name('register.veterinario');


Route::get('/veterinarias', function () {
    return view('veterinarias.veterinarias');
});


Route::get('/veterinaria', function () {
    return view('veterinarias.veterinaria');
});


Route::get('/mascotas', function () {
    return view('mascotas.mismascotas');
});

Route::get('/mascotas/create', [MascotaController::class, 'create'])->name('mascotas.create');
Route::post('/mascotas', [MascotaController::class,'store'])->name('mascotas.store');

