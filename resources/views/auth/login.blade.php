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
                <h2>¡Bienvenido otra vez!</h2>
            </div>
            <div class="container">
                <form action="">
                    <div class="row">
                        <div class="card">
                            <div class="inputBox">
                                <input type="text" required="required" placeholder="Ingrese su username">
                                <span>Username</span>
                            </div>
    
                            <div class="inputBox">
                                <input type="password" required="required" placeholder="Ingrese su contraseña">
                                <span>Contraseña</span>
                            </div>
    
                            <button class="button">
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
                                <span class="lable">Iniciar sesión</span>
                            </button>
                        </div>
                    </div>

                </form>

            </div>
            <div class="row">
                    <h6 class="text-center">¿Aún no eres parte de nosotros?</h6>
                    <div class="text-center container-register">
                        <a class="sign-in" href="{{ route('register') }}">
                            Registrate
                            <div class="arrow-wrapper">
                                <div class="arrow"></div>
    
                            </div>
                        </a>
                    </div>

            </div>
        </div>

    </div>
@endsection


@section('content_left_form')
@endsection
