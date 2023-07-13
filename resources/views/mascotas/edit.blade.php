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
        <form action="{{ route('mascotas.update', $mascota) }}" method="POST" class="row g-3">
          @csrf
          @method('PUT')
          <div class="col-md-6">
          </div>
          <div class="col-md-6">
            <label for="name" class="form-label">Nombre</label>
            <input name="name" value="{{ old('name',$mascota->name) }}" type="text" class="form-control @error('name') border-danger @enderror " id="inputEmail4">
            @error('name')
              <p class="text-danger" >{{ $message }}</p>
            @enderror
          </div>
          <div class="col-md-6">
          </div>
          <div class="col-md-6">
            <label for="especie" class="form-label">Especie</label>
            <select class="form-select @error('especie') border-danger @enderror" name="especie" aria-label="Default select example">
              <option value="1" @if($mascota->especie == 1) selected @endif>Perro</option>
              <option value="2" @if($mascota->especie == 2) selected @endif>Gato</option>
            </select>
            @error('especie')
              <p class="text-danger" >{{ $message }}</p>
            @enderror
          </div>

          <div class="col-md-6">
            <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
            <input name="fecha_nacimiento" value="{{ old('fecha_nacimiento',$mascota->fecha_nacimiento) }}" type="date" class="form-control @error('fecha_nacimiento') border-danger @enderror" id="inputEmail4">
            @error('fecha_nacimiento')
              <p class="text-danger" >{{ $message }}</p>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="sexo" class="form-label">Sexo</label>
            <select class="form-select @error('sexo') border-danger @enderror" name="sexo" aria-label="Default select example">
              <option value="1" @if($mascota->sexo == 1) selected @endif >Macho</option>
              <option value="2" @if($mascota->sexo == 2) selected @endif>Hembra</option>
            </select>
            @error('sexo')
              <p class="text-danger" >{{ $message }}</p>
            @enderror
          </div>

          <div class="col-md-6">
            <label for="altura" class="form-label">Altura</label>
            <input name="altura" value="{{ old('altura',$mascota->altura) }}" type="number" class="form-control @error('altura') border-danger @enderror" id="inputEmail4">
            @error('altura')
              <p class="text-danger" >{{ $message }}</p>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="peso" class="form-label">Peso</label>
            <input name="peso" value="{{ old('peso',$mascota->peso) }}" type="number" class="form-control @error('peso') border-danger @enderror" id="inputEmail4">
            @error('peso')
              <p class="text-danger" >{{ $message }}</p>
            @enderror
          </div>

          <div class="col-md-6">
            <label for="raza" class="form-label">Raza</label>
          <input name="raza" value="{{ old('raza',$mascota->raza) }}" type="text" class="form-control @error('raza') border-danger @enderror" id="inputEmail4">
          @error('raza')
              <p class="text-danger" >{{ $message }}</p>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" value="{{ old('descripcion',$mascota->descripcion) }}" name="descripcion" class="form-control @error('descripcion') border-danger @enderror" id="descripcion" placeholder="">
          </div>
          <div class="mb-5">
            <input type="hidden" name="image" value="{{ old('image',$mascota->image) }}" >
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
      <div class="position-absolute top-0 end-0 text-dark">
        <form action="{{ route('mascotas.destroy', $mascota) }}" method="POST">
          @method('DELETE')
          @csrf
          <button class="btn btn-transparent" type="submit">
            <div  class="text-danger" style="width: 2rem; higth: 2rem; margin: 1rem;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
            </svg>
          </div>
        </button>
        
        </form>

        
    </div>
      <img src="{{ asset('images/mascotas-register.png') }}" class="img-fluid rounded-start" alt="...">
  </div>
    </div>
</div>

@endsection