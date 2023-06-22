<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('auth.login');
});

//Ruta para la vista login
Route::get('/login',[LoginController::class,'index'])->name('login');
//Ruta para la vista de registro
Route::get('/register',[RegisterController::class,'index'])->name('register');

Route::get('/veterinarias', function () {
    return view('veterinarias.veterinarias');
});


Route::get('/veterinaria', function () {
    return view('veterinarias.veterinaria');
});


Route::get('/mascotas', function () {
    return view('mascotas.mismascotas');
});

