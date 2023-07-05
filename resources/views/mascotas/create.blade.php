@extends('layouts.appLayout')

@section('estilos')
    <link rel="stylesheet" href="{{asset('css/styleDashboard.css')}}">
@endsection

@section('titulo')
    Dashboard
@endsection

@section('contenido')
<div class="card mb-3" style="">
  <div class="row g-0">
    <div class="col-md-2"></div>
    <div class="col-md-4 mt-xl-5">
      <div class="card-body ">
        <h5 class="card-title fs-1 text-center" style="color: #38A3A5;">Datos de mascota</h5>
        <p class="fs-6 m-5" style="color: #171717;">La veracidad de los datos que ingreses son claves para el correcto cuidado de tu mascota.</p>
        <form action="{{ route('mascotas.store') }}" method="POST" class="row g-3">
          @csrf
          @method('POST')
          <div class="col-md-6">
            <img src="" alt="">
          </div>
          <div class="col-md-6">
            <label for="name" class="form-label">Nombre</label>
            <input name="name" type="text" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label for="raza" class="form-label">Raza</label>
            <input name="raza" type="text" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label for="especie" class="form-label">Especie</label>
            <select class="form-select" name="especie" aria-label="Default select example">
              <option selected>Seleccione una opcion</option>
              <option value="1">Perro</option>
              <option value="2">Gato</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
            <input name="fecha_nacimiento" type="date" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label for="sexo" class="form-label">Sexo</label>
            <select class="form-select" name="sexo" aria-label="Default select example">
              <option selected>Seleccione una opcion</option>
              <option value="1">Macho</option>
              <option value="2">Hembra</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="altura" class="form-label">Altura</label>
            <input name="altura" type="number" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label for="peso" class="form-label">Peso</label>
            <input name="peso" type="number" class="form-control" id="inputEmail4">
          </div>

          <div class="col-12">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="">
          </div>

          <div class="col-12 d-flex justify-content-center">
            <button type="submit" class="rounded-pill text-light btn-lg border-0" style="background-color: #38A3A5; font-color: #fff;" >Guardar</button>
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-4">
      <img src="{{ asset('images/mascotas-register.png') }}" class="img-fluid rounded-start" alt="...">
    </div>
  </div>

</div>

@endsection