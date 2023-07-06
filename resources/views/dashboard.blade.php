@extends('layouts.appLayout')

@section('estilos')
    <link rel="stylesheet" href="{{asset('css/styleDashboard.css')}}">
@endsection

@section('titulo')
    Dashboard
@endsection

@section('contenido')
    <div class="row">
        <div class="col-12">
            <div class="container-banner">
                <img src="{{asset('img/dashboard/Banner.png')}}" alt="" class="banner">
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <div style="position: relative; display:inline-block;">
                <img src="{{asset('img/dashboard/mis-mascotas.png')}}" class="img-fluid img-mascotas" alt="Mis mascotas">
                <div class="card mis-mascotas">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="d-flex justify-content-center flex-wrap">
                                <h2 class="mb-2">Mis mascotas</h2>
                            </div>
                        </div>
                        <div class="d-grid gap">
                            <a href="{{route('mascotas.index')}}" class="btn btn-primary d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l14 0"></path>
                                    <path d="M13 18l6 -6"></path>
                                    <path d="M13 6l6 6"></path>
                                 </svg>
                                <span class="ms-2">Ver más</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-lg-4">
            <div style="position: relative; display:inline-block; margin-top:25px; margin-left:20px;">
                <img src="{{asset('img/dashboard/Doctor.png')}}" class="img-fluid img-veterinaria" alt="Veterinarias">
                <div class="card veterinaria">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="d-flex justify-content-center flex-wrap">
                                <h2 class="mb-2">Veterinarias</h2>
                            </div>
                        </div>
                        <div class="d-grid gap">
                            <a href="{{route('vet')}}" class="btn btn-primary d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l14 0"></path>
                                    <path d="M13 18l6 -6"></path>
                                    <path d="M13 6l6 6"></path>
                                 </svg>
                                <span class="ms-2">Ver más</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div style="position: relative; display:inline-block; margin-top:20px; margin-left:20px;">
                <img src="{{asset('img/dashboard/adopcion.png')}}" class="img-fluid img-adopcion" alt="Adopcion">
                <div class="card adopcion">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="d-flex justify-content-center flex-wrap">
                                <h2 class="mb-2">Adopción</h2>
                            </div>
                        </div>
                        <div class="d-grid gap">
                            <a href="{{route('adopcion')}}" class="btn btn-primary d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l14 0"></path>
                                    <path d="M13 18l6 -6"></path>
                                    <path d="M13 6l6 6"></path>
                                 </svg>
                                <span class="ms-2">Ver más</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection