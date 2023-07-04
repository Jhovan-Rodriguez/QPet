@extends('layouts.authLayout')

@section('titulo')
    QPet
@endsection

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/styleRegisterUsuarios.css') }}">
@endsection

@section('contenido')
    <div class="wrapper">
        <div class="image-holder"
            style="background: url({{ asset('img/bg.png') }}) no-repeat fixed; background-size: contain; overflow: hidden;">
            <!-- <img src="{{ asset('img/background.jpg') }}" alt=""> -->
        </div>
        <div class="content-inner">
            <div class="text-center logo">
                <img class="logoQPet" src="{{ asset('img/logos/QPet-Logo.png') }}" alt="Logo QPet">
            </div>
            <div class="form-header">
                <h2>Crea una cuenta</h2>
            </div>
            <form action="{{route('usuario.create')}}" method="POST" class="row g-4" style="width:auto;">
                @csrf
                <div class="col-md-6">
                    <div class="inputBox">
                        <input name="username" type="text"  placeholder="Username">
                        <span>Username</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="inputBox">
                        <input name="nombre" type="text"  placeholder="Nombre">
                        <span>Nombre</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="inputBox">
                        <input name="apellido_p" type="text"  placeholder="Apellido paterno">
                        <span>Apellido Paterno</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="inputBox">
                        <input name="apellido_m" type="text" placeholder="Apellido materno">
                        <span>Apellido materno</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="inputBox">
                        <select name="genero">
                            <option selected>Seleccione</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                            <option value="3">No espefique</option>
                          </select>
                        <span>Genero</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="inputBox">
                        <input name="fecha_nac" type="date" placeholder="Apellido materno">
                        <span>Fecha de nacimiento</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="inputBox">
                        <input name="telefono" type="tel"  placeholder="Teléfono">
                        <span>Teléfono</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="inputBox">
                        <input name="email" type="email" placeholder="Email">
                        <span>Email</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="inputBox">
                        <input name="password" type="password" placeholder="Contraseña">
                        <span>Contraseña</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="inputBox">
                        <input name="password_confirmation" type="password" placeholder="Confirma contraseña">
                        <span>Confirma Contraseña</span>
                    </div>
                </div>
                <div class="card" style="min-height: 0px">
                    <button type="submit" class="button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dog svg-icon"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M11 5h2"></path>
                            <path d="M19 12c-.667 5.333 -2.333 8 -5 8h-4c-2.667 0 -4.333 -2.667 -5 -8"></path>
                            <path d="M11 16c0 .667 .333 1 1 1s1 -.333 1 -1h-2z"></path>
                            <path d="M12 18v2"></path>
                            <path d="M10 11v.01"></path>
                            <path d="M14 11v.01"></path>
                            <path
                                d="M5 4l6 .97l-6.238 6.688a1.021 1.021 0 0 1 -1.41 .111a.953 .953 0 0 1 -.327 -.954l1.975 -6.815z">
                            </path>
                            <path
                                d="M19 4l-6 .97l6.238 6.688c.358 .408 .989 .458 1.41 .111a.953 .953 0 0 0 .327 -.954l-1.975 -6.815z">
                            </path>
                        </svg>
                        <span class="lable">Registrar</span>
                    </button>
                </div>
            </form>
        </div>

    </div>
@endsection
