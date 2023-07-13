@extends('layouts.appLayout')

@section('estilos')
    <link rel="stylesheet" href="{{asset('css/styleDashboard.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endsection

@section('titulo')
    Dashboard
@endsection

@section('contenido')
<div class="border border-dark card mb-3" style="">
  <div class="row g-0">
    <div class="col-md-2"></div>
    <div class="col-md-4 mt-xl-5">
      <div class="card-body position-relative">
        <h5 class="card-title fs-1 text-center" style="color: #38A3A5;">Datos de mascota</h5>
        <p class="fs-6 m-5" style="color: #171717;">La veracidad de los datos que ingreses son claves para el correcto cuidado de tu mascota.</p>
        <div class="row position-absolute top-25 start-0  w-50 pb-5 mb-5" >
          <form  id="dropzone" action="{{ route('imagenes.store') }}" method="POST" enctype="multipart/form-data" class="dropzone rounded max-height-25">
              @csrf
          </form>
          
      </div>
        <form action="{{ route('mascotas.store') }}" method="POST" class="row g-3">
          @csrf
          @method('POST')
          <div class="col-md-6">
          </div>
          <div class="col-md-6">
            <label for="name" class="form-label">Nombre</label>
            <input name="name" value="{{ old('name') }}" type="text" class="form-control @error('name') border-danger @enderror " id="inputEmail4">
            @error('name')
              <p class="text-danger" >{{ $message }}</p>
            @enderror
          </div>
          <div class="col-md-6">
          </div>
          <div class="col-md-6">
            <label for="especie" class="form-label">Especie</label>
            <select class="form-select @error('especie') border-danger @enderror" name="especie" aria-label="Default select example">
              <option value="1" {{ old('especie') == 1 ? 'selected' : '' }} >Perro</option>
              <option value="2" {{ old('especie') == 2 ? 'selected' : '' }} >Gato</option>
            </select>
            @error('especie')
              <p class="text-danger" >{{ $message }}</p>
            @enderror
          </div>

          <div class="col-md-6">
            <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
            <input name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" type="date" class="form-control @error('fecha_nacimiento') border-danger @enderror" id="inputEmail4">
            @error('fecha_nacimiento')
              <p class="text-danger" >{{ $message }}</p>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="sexo" class="form-label">Sexo</label>
            <select class="form-select @error('sexo') border-danger @enderror" name="sexo" aria-label="Default select example">
              <option value="1" {{ old('sexo') == 1 ? 'selected' : '' }} >Macho</option>
              <option value="2" {{ old('sexo') == 1 ? 'selected' : '' }} >Hembra</option>
            </select>
            @error('sexo')
              <p class="text-danger" >{{ $message }}</p>
            @enderror
          </div>

          <div class="col-md-6">
            <label for="altura" class="form-label">Altura</label>
            <input name="altura" type="number" value="{{ old('altura') }}" class="form-control @error('altura') border-danger @enderror" id="inputEmail4">
            @error('altura')
              <p class="text-danger" >{{ $message }}</p>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="peso" class="form-label">Peso</label>
            <input name="peso" type="number" value="{{ old('peso') }}" class="form-control @error('peso') border-danger @enderror" id="inputEmail4">
            @error('peso')
              <p class="text-danger" >{{ $message }}</p>
            @enderror
          </div>

          <div class="col-md-6">
            <label for="raza" class="form-label">Raza</label>
          <input name="raza" value="{{ old('raza') }}" type="text" class="form-control @error('raza') border-danger @enderror" id="inputEmail4">
          @error('raza')
              <p class="text-danger" >{{ $message }}</p>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" value="{{old('descripcion')}}" name="descripcion" class="form-control @error('descripcion') border-danger @enderror" id="descripcion" placeholder="">
          </div>
          <div class="mb-5">
            <input type="hidden" name="image" value="{{old('image')}}" >
            @error('image')
                <p class="text-danger" >{{ $message }}</p>
            @enderror
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button type="submit" class="rounded-pill text-light btn-lg border-0" style="background-color: #38A3A5; font-color: #fff;" >Guardar</button>
            <a type="button" href="{{ route('mascotas.index') }}" class="btn btn-danger rounded-pill text-light btn-lg border-0">Cancelar</a>
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