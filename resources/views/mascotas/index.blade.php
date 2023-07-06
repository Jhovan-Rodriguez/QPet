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

  <section class="section">
    <div id="carouselExample" class="carousel slide" style="hwight:20%">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row row-cols-1 row-cols-md-3 g-4 m-3 ">
            <div class="col">
                <div class="card card-v" >
                    <img src="{{asset('img/pets/bruno.jpg')}}" class="mw-50 card-img-top" alt="..." height="250">
                    
                </div>
            </div>
            <div class="col">
                <div class="card card-v" >
                    <img src="{{asset('img/pets/dante.jpeg')}}" class="card-img-top" alt="..." height="250">
                    
                </div>
            </div>
            <div class="col">
                <div class="card card-v" >
                    <img src="{{asset('img/pets/bruno.jpg')}}" class="card-img-top" alt="..." height="250">
                    
                </div>
            </div>
          </div>
        </div>
        
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="custom-carousel-control-icon" aria-hidden="true">&lt;</span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="custom-carousel-control-icon" aria-hidden="true">&gt;</span>
        <span class="visually-hidden">Next</span>
       </button>
    </div>
    </section>



  <section class="section">
    <hr style="border: 3px solid #22577A;">

    <div class="form-search" style="display: flex;">
    <input type="text" class="form-control" placeholder="Search anything..." style="border-radius: 20px 0 0 20px; background-color: #C5E0E0;  width: 60%; border: 1px solid #C5E0E0 ">
    <button class="btn" type="submit" style="border-radius: 0 20px 20px 0; background-color: #74B0B0; color: white; outline: 0px; margin-right:24%">
    <svg style="height: 20px; width: 20px; " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
    </svg>
    </button>

    <button class="btn" type="submit" style="border-radius: 15px; background-color: #74B0B0; color: white; outline: 0px; width: 6%; padding:5px">
        <svg style="height: 30px; width: 30px; "  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
        </svg>
    </button>
    </div>
</section>
  
  <div class="row">
    <div class="col-md-6 col-lg-6">
      <div style="position: relative; display:inline-block; margin-top:25px; margin-left:20px;">
        <div class="card veterinaria" style="border-radius: 30px;">
          <div class="card-body">
            <div class="row">
              <div class="col-4">
                <img src="{{asset('img/pets/bruno.jpg')}}" alt="Imagen" class="img-fluid square-image" style="border-radius: 30px;">
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

              <div class="circ" style="display: flex; justify-content: end;">
                <div style="background-color: white;height: 20px;width: 20px;border-radius: 50%;"></div>
                <div style="height: 10px;width: 10px;border-radius: 50%;"></div>
                <div style="background-color: white;height: 20px;width: 20px;border-radius: 50%;"></div>
                <div style="height: 10px;width: 10px;border-radius: 50%;"></div>
                <div style="background-color: white;height: 20px;width: 20px;border-radius: 50%;"></div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-6">
      <div style="position: relative; display:inline-block; margin-top:25px; margin-left:20px;">
        <div class="card veterinaria" style="border-radius: 30px;">
          <div class="card-body">
            <div class="row">
              <div class="col-4" >
                <img src="{{asset('img/pets/bruno.jpg')}}" alt="Imagen" class="img-fluid square-image" style="border-radius: 30px;">
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
              <div class="circ" style="display: flex; justify-content: end;">
                <div style="background-color: white;height: 20px;width: 20px;border-radius: 50%;"></div>
                <div style="height: 10px;width: 10px;border-radius: 50%;"></div>
                <div style="background-color: white;height: 20px;width: 20px;border-radius: 50%;"></div>
                <div style="height: 10px;width: 10px;border-radius: 50%;"></div>
                <div style="background-color: white;height: 20px;width: 20px;border-radius: 50%;"></div>
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
        <div class="card veterinaria" style="border-radius: 30px;">
          <div class="card-body">
            <div class="row">
              <div class="col-4">
                <img src="{{asset('img/pets/dante.jpeg')}}" alt="Imagen" class="img-fluid square-image" style="border-radius: 30px;">
              </div>
              <div class="col-4">
                <div class="mb-4">
                  <div class="d-flex justify-content-center flex-wrap">
                    <h2 class="mb-2">Chui</h2>
                  </div>
                </div>
                <div class="d-grid gap" >
                  <h6>Raza:</h6>
                  <h6>Edad:</h6>
                  <h6>Sexo:</h6>
                </div>
              </div>
              <div class="circ" style="display: flex; justify-content: end;">
                <div style="background-color: white;height: 20px;width: 20px;border-radius: 50%;"></div>
                <div style="height: 10px;width: 10px;border-radius: 50%;"></div>
                <div style="background-color: white;height: 20px;width: 20px;border-radius: 50%;"></div>
                <div style="height: 10px;width: 10px;border-radius: 50%;"></div>
                <div style="background-color: white;height: 20px;width: 20px;border-radius: 50%;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br><br>
  <hr style="border: 3px solid #22577A;">
  <br>
  <div class="row justify-content-between">
    <h1>Haz más grande tu familia</h1>
    <div class="col-md-4 col-lg-4 d-flex justify-content-center flex-column align-items-center">
      
      <p class="text-center">
        Si hay algún miembro nuevo en tu familia, agrégala ahora mismo para darle todos los cuidados que necesita
      </p>
      <a href="{{route('mascotas.create')}}" class="btn btn-success btn-lg rounded-pill">Añadir</a>
    </div>
    <div class="col-6 d-flex align-items-center">
      <img src="{{asset('img/pets/Img-add.svg')}}" alt="Imagen" class="img-fluid" style="width: 70%;">
    </div>
  </div>

  <br><br>
  
  
  
@endsection