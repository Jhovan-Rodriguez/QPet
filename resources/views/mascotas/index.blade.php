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

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" style="display: flex; justify-content: center; align-items: center; height: 300px; width: 500px; overflow: hidden;">
        <div class="carousel-item active">
          <img class="w-25" src="" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('img/pets/chui.jpeg')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('img/pets/dante.jpeg')}}" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style="color:green">
        <span class="carousel-control-prev-icon" aria-hidden="true" style="color:green"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" style="color:green">
        <span class="carousel-control-next-icon" aria-hidden="true" style="color:green"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
    dsadsadsad asd s
    

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
                    <h2 class="mb-2 text-light font-weight-bold">Bruno</h2>
                  </div>
                </div>
                <div>
                  <p class="text-light">Raza:</p>
                  <p class="text-light">Edad:</p>
                  <p class="text-light">Sexo:</p>
                <p class="text-light">Descripcion</p>
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