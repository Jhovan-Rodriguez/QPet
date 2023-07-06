@extends('layouts.appLayout')

@section('estilos')
    <link rel="stylesheet" href="{{asset('css/styleDashboard.css')}}">
@endsection

@section('titulo')
    Mis mascotas
@endsection

@section('contenido')
    <div class="pagetitle title-primary">
      <h1>Mis mascotas</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
          <li class="breadcrumb-item">Mis mascotas</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  <div class="row">
    <div class="col-md-6 col-lg-6">
      <div style="position: relative; display:inline-block; margin-top:25px; margin-left:20px;">
        <div class="card veterinaria">
          <div class="card-body">
            <div class="row">
              <div class="col-4">
                <img src="{{asset('img/pets/bruno.jpg')}}" alt="Imagen" class="img-fluid square-image">
              </div>
              <div class="col-4">
                <div class="mb-4">
                  <div class="d-flex justify-content-center flex-wrap">
                    <h2 class="mb-2">Bruno</h2>
                  </div>
                </div>
                <div class="d-grid gap">
                  <h6>Raza:</h6>
                  <h6>Edad:</h6>
                  <h6>Sexo:</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-6">
      <div style="position: relative; display:inline-block; margin-top:25px; margin-left:20px;">
        <div class="card veterinaria">
          <div class="card-body">
            <div class="row">
              <div class="col-4">
                <img src="{{asset('img/pets/bruno.jpg')}}" alt="Imagen" class="img-fluid square-image">
              </div>
              <div class="col-4">
                <div class="mb-4">
                  <div class="d-flex justify-content-center flex-wrap">
                    <h2 class="mb-2">Bruno</h2>
                  </div>
                </div>
                <div class="d-grid gap">
                  <h6>Raza:</h6>
                  <h6>Edad:</h6>
                  <h6>Sexo:</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-lg-6">
      <div style="position: relative; display:inline-block; margin-top:25px; margin-left:20px;">
        <div class="card veterinaria">
          <div class="card-body">
            <div class="row">
              <div class="col-4">
                <img src="{{asset('img/pets/dante.jpeg')}}" alt="Imagen" class="img-fluid square-image">
              </div>
              <div class="col-4">
                <div class="mb-4">
                  <div class="d-flex justify-content-center flex-wrap">
                    <h2 class="mb-2">Chui</h2>
                  </div>
                </div>
                <div class="d-grid gap">
                  <h6>Raza:</h6>
                  <h6>Edad:</h6>
                  <h6>Sexo:</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br><br>
  
  <div class="row justify-content-between">
    <h1>Haz más grande tu familia</h1>
    <div class="col-md-4 col-lg-4 d-flex justify-content-center flex-column align-items-center">
      
      <p class="text-center">
        Si hay algún miembro nuevo en tu familia, agrégala ahora mismo para darle todos los cuidados que necesita
      </p>
      <button class="btn btn-success btn-lg rounded-pill">Añadir</button>
    </div>
    <div class="col-6 d-flex align-items-center">
      <img src="{{asset('img/pets/Img-add.svg')}}" alt="Imagen" class="img-fluid" style="width: 70%;">
    </div>
  </div>

  <br><br>
  
  
  
@endsection