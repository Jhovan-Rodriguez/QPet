@extends('layouts.authLayout')

@section('titulo')
    QPet
@endsection

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/styleRegister.css') }}">
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
                <h2>¿Qué tipo de usuario va a registrar?</h2>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="text-center cont-usuario">
                        <a href="{{ route('register.usuario') }}">
                            <img class="img-usuario" src="{{ asset('img/tipo_usuario/usuario.png') }}" alt="...">
                            <h6>Usuario</h6>
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-center cont-usuario">
                        <a href="{{ route('register.veterinario') }}">
                            <img class="img-usuario" src="{{ asset('img/tipo_usuario/veterinario.png') }}" alt="...">
                            <h6>Veterinario</h6>
                        </a>
                    </div>
                </div>
            </div>
            <br>
            <div class="row" style="margin:40px">
                <h6 style="text-align: center">¿Ya tienes cuenta?</h6>
                <div class="container-register">
                    <a class="sign-in" href="{{ route('login') }}">
                        Iniciar sesión
                        <div class="arrow-wrapper">
                            <div class="arrow"></div>
                        </div>
                    </a>
                </div>

            </div>
        </div>

    </div>
@endsection
