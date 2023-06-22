@extends('layouts.appLayout')

@section('titulo')
  Mis mascotas
@endsection

@section('main')
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
      <!-- Carrusel -->
      <div class="row justify-content-center">
        <div class="slider">
          <div class="card pet-card-1 rounded-2 item">
            <img src="{{asset('img/pets/dante.jpeg')}}" class="card-img-top" alt="...">
            <div class="card-img-overlay d-flex align-items-end">
              <h3>Dante</h3>
            </div>
          </div>
          <div class="card pet-card-1 rounded-2 item">
            <img src="{{asset('img/pets/bruno.jpg')}}" class="card-img-top" alt="...">
            <div class="card-img-overlay d-flex align-items-end">
              <h3>Bruno</h3>
            </div>
          </div>
          <div class="card pet-card-1 rounded-2 item">
            <img src="{{asset('img/pets/chui.jpeg')}}" class="card-img-top" alt="...">
            <div class="card-img-overlay d-flex align-items-end">
              <h3>Chui</h3>
            </div>
          </div>
          
          <button id="next">></button>
          <button id="prev"><</button>
        </div> <!-- End Slider -->
      </div>
      <!-- / Carrusel -->
    </section>
@endsection