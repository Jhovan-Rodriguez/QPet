@extends('layouts.authLayout')

@section('titulo')
    QPet
@endsection

@section('content_right')
<div class="text w-100">
    <h2>¿Aún no tienes cuenta?</h2>
    <p>No pierdas la oportunidad y crea una cuenta para disfrutar de todos los servicios</p>
    <a href="#" class="btn btn-white btn-outline-white">Crear Cuenta</a>
</div>
@endsection

@section('content_left_form')
<div class="d-flex">
    <div class="w-100">
        <h3 class="mb-4 titulo text-center font-weight-bold ">¡Bienvenido otra vez!</h3>
    </div>
</div>
<form action="#" class="signin-form">
    <div class="form-group mb-3">
        <label class="label" for="name">Nombre de usuario</label>
        <input type="text" class="form-control" placeholder="Nombre de usuario" required>
    </div>
    <div class="form-group mb-3">
        <label class="label" for="password">Contraseña</label>
        <input type="password" class="form-control" placeholder="Contraseña" required>
    </div>
    <div class="form-group">
        <button type="submit" class="form-control btn btn-primary submit px-3">Iniciar sesión</button>
    </div>
    <div class="form-group d-md-flex">
        <div class="w-50 text-left">
            <label class="checkbox-wrap checkbox-primary mb-0">Mantener sesión
                <input type="checkbox" checked>
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="w-50 text-md-right">
            <a href="#">¿Olvidaste tu contraseña?</a>
        </div>
    </div>
</form>
@endsection