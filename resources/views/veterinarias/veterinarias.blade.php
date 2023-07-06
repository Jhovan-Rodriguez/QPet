@extends('layouts.appLayout')

@section('estilos')
    <link rel="stylesheet" href="{{asset('css/styleVets.css')}}">
@endsection

@section('titulo')
    Veterinarias
@endsection

@section('contenido')
    <div class="pagetitle title-primary">
      <h1>Veterinarias</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('post.index')}}">Inicio</a></li>
          <li class="breadcrumb-item">Veterinarias</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <br>
    <section class="section">
    <h3 class="fw-bold titulo-vet " style="color:#049291">Favoritos</h3>
    <div id="carouselExample" class="carousel slide" style="hwight:20%">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row row-cols-1 row-cols-md-3 g-4 m-3 ">
            <div class="col">
                <div class="card card-v" >
                    <img src="{{asset('img/vet/vet1.jpg')}}" class="card-img-top" alt="..." height="250">
                    <div class="card-body-v d-flex flex-column justify-content-center text-center" >
                        <h5 class="card-title text-center text-white text-bold mb-2" >Card title</h5>               
                        <p class="card-text" style="font-size: 15px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text  mb-5" style="font-size: 15px;"> 
                        <svg style="height: 25px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg> 
                        Calle Itzamara #1234 Fraccionamiento Las Lomas
                        </p>
                        <div class="position-absolute bottom-0 end-0 mr-2" style="padding-right:20px;">
                        <a href="{{ route('miVet') }}" class="text-end card-link text-truncate" >...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-v" >
                    <img src="{{asset('img/vet/vet2.jpg')}}" class="card-img-top" alt="..." height="250">
                    <div class="card-body-v d-flex flex-column justify-content-center text-center" >
                        <h5 class="card-title text-center text-white text-bold mb-2" >Card title</h5>               
                        <p class="card-text" style="font-size: 15px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text  mb-5" style="font-size: 15px;"> 
                        <svg style="height: 25px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg> 
                        Calle Itzamara #1234 Fraccionamiento Las Lomas
                        </p>
                        <div class="position-absolute bottom-0 end-0 mr-2" style="padding-right:20px;">
                        <a href="{{ route('miVet') }}" class="text-end card-link text-truncate" >...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-v" >
                    <img src="{{asset('img/vet/vet3.jpg')}}" class="card-img-top" alt="..." height="250">
                    <div class="card-body-v d-flex flex-column justify-content-center text-center" >
                        <h5 class="card-title text-center text-white text-bold mb-2" >Card title</h5>               
                        <p class="card-text" style="font-size: 15px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text  mb-5" style="font-size: 15px;"> 
                        <svg style="height: 25px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg> 
                        Calle Itzamara #1234 Fraccionamiento Las Lomas
                        </p>
                        <div class="position-absolute bottom-0 end-0 mr-2" style="padding-right:20px;">
                        <a href="{{ route('miVet') }}" class="text-end card-link text-truncate" >...</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="carousel-item ">
          <div class="row row-cols-1 row-cols-md-3 g-4 m-3 ">
          <div class="col">
                <div class="card card-v" >
                    <img src="{{asset('img/vet/vet4.jpg')}}" class="card-img-top" alt="..." height="250">
                    <div class="card-body-v d-flex flex-column justify-content-center text-center" >
                        <h5 class="card-title text-center text-white text-bold mb-2" >Card title</h5>               
                        <p class="card-text" style="font-size: 15px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text  mb-5" style="font-size: 15px;"> 
                        <svg style="height: 25px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg> 
                        Calle Itzamara #1234 Fraccionamiento Las Lomas
                        </p>
                        <div class="position-absolute bottom-0 end-0 mr-2" style="padding-right:20px;">
                        <a href="#" class="text-end card-link text-truncate" >...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-v" >
                    <img src="{{asset('img/vet/vet1.jpg')}}" class="card-img-top" alt="..." height="250">
                    <div class="card-body-v d-flex flex-column justify-content-center text-center" >
                        <h5 class="card-title text-center text-white text-bold mb-2" >Card title</h5>               
                        <p class="card-text" style="font-size: 15px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text  mb-5" style="font-size: 15px;"> 
                        <svg style="height: 25px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg> 
                        Calle Itzamara #1234 Fraccionamiento Las Lomas
                        </p>
                        <div class="position-absolute bottom-0 end-0 mr-2" style="padding-right:20px;">
                        <a href="#" class="text-end card-link text-truncate" >...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-v"  >
                    <img src="{{asset('img/vet/vet2.jpg')}}" class="card-img-top" alt="..." height="250">
                    <div class="card-body-v d-flex flex-column justify-content-center text-center" >
                        <h5 class="card-title text-center text-white text-bold mb-2" >Card title</h5>               
                        <p class="card-text" style="font-size: 15px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text  mb-5" style="font-size: 15px;"> 
                        <svg style="height: 25px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg> 
                        Calle Itzamara #1234 Fraccionamiento Las Lomas
                        </p>
                        <div class="position-absolute bottom-0 end-0 mr-2" style="padding-right:20px;">
                        <a href="#" class="text-end card-link text-truncate" >...</a>
                        </div>
                    </div>
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

    <section class="section mt-4">
    <div class="row row-cols-1 row-cols-md-2 g-4 m-3 ">
        <div class="col">
            <div class="card card-h mb-3" style="max-width: 540px">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="{{asset('img/vet/vet3.jpg')}}" class="img-fluid " alt="..." style="height:250px; border-radius:20px; ">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body d-flex flex-column justify-content-center text-center text-white">
                        <h5 class="card-title text-center text-white text-bold mb-2" >Card title</h5>               
                        <p class="card-text" style="font-size: 15px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text  mb-5" style="font-size: 15px;"> 
                        <svg style="height: 25px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg> 
                        Calle Itzamara #1234 Fraccionamiento Las Lomas
                        </p>
                        <div class="position-absolute bottom-0 end-0 mr-2 " style="padding-right:20px;">
                            <p class="clasificacion" >
                                <input id="radio1" type="radio" name="estrellas" value="5">
                                <label for="radio1">★</label>
                                <input id="radio2" type="radio" name="estrellas" value="4">
                                <label for="radio2">★</label>
                                <input id="radio3" type="radio" name="estrellas" value="3">
                                <label for="radio3">★</label>
                                <input id="radio4" type="radio" name="estrellas" value="2">
                                <label for="radio4">★</label>
                                <input id="radio5" type="radio" name="estrellas" value="1">
                                <label for="radio5">★</label>
                            </p>

                            <a href="#" class="text-end card-link text-truncate" >...</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-h mb-3" style="max-width: 540px">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="{{asset('img/vet/vet4.jpg')}}" class="img-fluid " alt="..." style="height:250px; border-radius:20px; ">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body d-flex flex-column justify-content-center text-center text-white">
                        <h5 class="card-title text-center text-white text-bold mb-2" >Card title</h5>               
                        <p class="card-text" style="font-size: 15px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text  mb-5" style="font-size: 15px;"> 
                        <svg style="height: 25px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg> 
                        Calle Itzamara #1234 Fraccionamiento Las Lomas
                        </p>
                        <div class="position-absolute bottom-0 end-0 mr-2 " style="padding-right:20px;">
                            <p class="clasificacion" >
                                <input id="radio1" type="radio" name="estrellas" value="5">
                                <label for="radio1">★</label>
                                <input id="radio2" type="radio" name="estrellas" value="4">
                                <label for="radio2">★</label>
                                <input id="radio3" type="radio" name="estrellas" value="3">
                                <label for="radio3">★</label>
                                <input id="radio4" type="radio" name="estrellas" value="2">
                                <label for="radio4">★</label>
                                <input id="radio5" type="radio" name="estrellas" value="1">
                                <label for="radio5">★</label>
                            </p>

                            <a href="#" class="text-end card-link text-truncate" >...</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4 m-3 ">
        <div class="col">
            <div class="card card-h mb-3" style="max-width: 540px">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="{{asset('img/vet/vet1.jpg')}}" class="img-fluid " alt="..." style="height:250px; border-radius:20px; ">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body d-flex flex-column justify-content-center text-center text-white">
                        <h5 class="card-title text-center text-white text-bold mb-2" >Card title</h5>               
                        <p class="card-text" style="font-size: 15px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text  mb-5" style="font-size: 15px;"> 
                        <svg style="height: 25px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg> 
                        Calle Itzamara #1234 Fraccionamiento Las Lomas
                        </p>
                        <div class="position-absolute bottom-0 end-0 mr-2 " style="padding-right:20px;">
                            <p class="clasificacion" >
                                <input id="radio1" type="radio" name="estrellas" value="5">
                                <label for="radio1">★</label>
                                <input id="radio2" type="radio" name="estrellas" value="4">
                                <label for="radio2">★</label>
                                <input id="radio3" type="radio" name="estrellas" value="3">
                                <label for="radio3">★</label>
                                <input id="radio4" type="radio" name="estrellas" value="2">
                                <label for="radio4">★</label>
                                <input id="radio5" type="radio" name="estrellas" value="1">
                                <label for="radio5">★</label>
                            </p>

                            <a href="#" class="text-end card-link text-truncate" >...</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-h mb-3" style="max-width: 540px">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="{{asset('img/vet/vet2.jpg')}}" class="img-fluid " alt="..." style="height:250px; border-radius:20px; ">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body d-flex flex-column justify-content-center text-center text-white">
                        <h5 class="card-title text-center text-white text-bold mb-2" >Card title</h5>               
                        <p class="card-text" style="font-size: 15px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text " style="font-size: 15px;"> 
                        <svg style="height: 25px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg> 
                        Calle Itzamara #1234 Fraccionamiento Las Lomas
                        </p>
                        <div class="position-absolute bottom-0 end-0 mr-2 " style="padding-right:20px;">
                            <p class="clasificacion" >
                                <input id="radio1" type="radio" name="estrellas" value="5">
                                <label for="radio1">★</label>
                                <input id="radio2" type="radio" name="estrellas" value="4">
                                <label for="radio2">★</label>
                                <input id="radio3" type="radio" name="estrellas" value="3">
                                <label for="radio3">★</label>
                                <input id="radio4" type="radio" name="estrellas" value="2">
                                <label for="radio4">★</label>
                                <input id="radio5" type="radio" name="estrellas" value="1">
                                <label for="radio5">★</label>
                            </p>

                            <a href="#" class="text-end card-link text-truncate" >...</a>
                        </div>

                        

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>

@endsection
