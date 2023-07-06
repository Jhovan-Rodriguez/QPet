@extends('layouts.appLayout')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/styleAsociados.css') }}">
@endsection

@section('titulo')
    Asociados
@endsection

@section('contenido')
    <div class="row">
        <div class="col-12">
            <div class="container-banner">
                <img src="{{ asset('img/dashboard/Banner.png') }}" alt="" class="banner">
            </div>
        </div>
    </div>
    <br>

    <p class="h3 text-center">
        Confía en nuestros calificados Cuidadores y dale a tu Mascota <br> las mejores atenciones
    </p>
    <br>
    
    <h1 class="fw-bolder">
        Actividades
    </h1>
    <p class="h3">
        Selecciona la actividad que quieras solicitar
    </p>

    <div class="row justify-content-between">
        <div class="col-md-2 col-lg-2"></div>

        <div class="col-md-2 col-lg-2">
            <div style="position: relative; display:inline-block;">
                <img src="{{ asset('img/asociados/paseo.png') }}" class="img-fluid img-paseo" alt="Paseo">
                <div class="card paseo">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="d-flex justify-content-center flex-wrap">
                                <h2 class="mb-2">Paseo</h2>
                            </div>
                        </div>
                        <div class="d-grid gap">
                            <a href="{{route('solicitar')}}" class="btn btn-primary d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l14 0"></path>
                                    <path d="M13 18l6 -6"></path>
                                    <path d="M13 6l6 6"></path>
                                </svg>
                                <span class="ms-2">Continuar</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-2 col-lg-2"></div>
        
        <div class="col-md-2 col-lg-2">
            <div style="position: relative; display:inline-block; margin-top:20px; margin-left:20px;">
                <img src="{{ asset('img/asociados/bano.png') }}" class="img-fluid img-bano" alt="Baño">
                <div class="card bano">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="d-flex justify-content-center flex-wrap">
                                <h2 class="mb-2">Baño</h2>
                            </div>
                        </div>
                        <div class="d-grid gap">
                            <a href="{{route('solicitar')}}" class="btn btn-primary d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l14 0"></path>
                                    <path d="M13 18l6 -6"></path>
                                    <path d="M13 6l6 6"></path>
                                </svg>
                                <span class="ms-2">Continuar</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-2 col-lg-2"></div>
    </div>
@endsection