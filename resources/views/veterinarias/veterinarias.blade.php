@extends('layouts.appLayout')

@section('titulo')
    Veterinarias
@endsection

@section('main')
<div class="container-fluid">
    <h3 class="fw-bold titulo-vet">Favoritos</h3>
    <br>
    <div class="row">
        <div class="col-sm-3 col-xl-3">
            <div class="card overflow-hidden rounded-4">
                <div class="position-relative tarjeta-vet">
                    <img src="{{ asset('img/imagen.png') }}" class="card-img-top rounded-0" alt="...">
                </div>
                <div class="card-body pt-3 p-4 tarjeta-vet-body">
                    <h5 class="fw-semibold fs-6 text-white">Boat Headphone</h5>
                    <div class="d-flex align-items-center justify-content-between">
                        Cuidando a tus mascotas como parte de nuestra familia
                    </div>
                    <div class="row direcc-vet">
                        <div class="col-1">
                            <i class="fa fa-map-pin"></i>
                        </div>
                        <div class="col-10">
                            Calle Principal #123
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xl-3">
            <div class="card overflow-hidden rounded-4">
                <div class="position-relative tarjeta-vet">
                    <img src="{{ asset('img/imagen.png') }}" class="card-img-top rounded-0" alt="...">
                </div>
                <div class="card-body pt-3 p-4 tarjeta-vet-body">
                    <h5 class="fw-semibold fs-6 text-white">Boat Headphone</h5>
                    <div class="d-flex align-items-center justify-content-between">
                        Cuidando a tus mascotas como parte de nuestra familia
                    </div>
                    <div class="row direcc-vet">
                        <div class="col-1">
                            <i class="fa fa-map-pin"></i>
                        </div>
                        <div class="col-10">
                            Calle Principal #123
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xl-3">
            <div class="card overflow-hidden rounded-4">
                <div class="position-relative tarjeta-vet">
                    <img src="{{ asset('img/imagen.png') }}" class="card-img-top rounded-0"
                        alt="...">
                </div>
                <div class="card-body pt-3 p-4 tarjeta-vet-body">
                    <h5 class="fw-semibold fs-6 text-white">Boat Headphone</h5>
                    <div class="d-flex align-items-center justify-content-between">
                        Cuidando a tus mascotas como parte de nuestra familia
                    </div>
                    <div class="row direcc-vet">
                        <div class="col-1">
                            <i class="fa fa-map-pin"></i>
                        </div>
                        <div class="col-10">
                            Calle Principal #123
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <hr style="border: 3px solid #22577A;">
    <div class="form-search">
        <i class="fa fa-search"></i>
        <input type="text" class="form-control form-input search-vet-input"
            placeholder="Search anything...">
        <span class="left-pan"><i class="fa fa-microphone"></i></span>
    </div>
    <br>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <h5 class="card-header text-center">Nombre veterinaria</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="position-relative tarjeta-vet">
                                <img src="{{ asset('img/imagen.png') }}" class="card-img-top rounded-0"
                                    alt="...">
                            </div>
                        </div>
                        <div class="col-8">
                            <h5 class="card-title text-center">
                                Cuidando a tus mascotas como parte de nuestra familia
                            </h5>
                            <br>
                            <p class="card-text">
                                <i class="bi bi-geo-alt"></i>
                                Calle Principal #123
                            </p>
                            <!-- star rating -->
                            <div class="rating-wrapper">

                                <!-- star 5 -->
                                <input type="radio" id="5-star-rating" name="star-rating"
                                    value="5">
                                <label for="5-star-rating" class="star-rating star">
                                    <i class="fa fa-star d-inline-block"></i>
                                </label>

                                <!-- star 4 -->
                                <input type="radio" id="4-star-rating" name="star-rating"
                                    value="4">
                                <label for="4-star-rating" class="star-rating star">
                                    <i class="fa fa-star d-inline-block"></i>
                                </label>

                                <!-- star 3 -->
                                <input type="radio" id="3-star-rating" name="star-rating"
                                    value="3">
                                <label for="3-star-rating" class="star-rating star">
                                    <i class="fa fa-star d-inline-block"></i>
                                </label>

                                <!-- star 2 -->
                                <input type="radio" id="2-star-rating" name="star-rating"
                                    value="2">
                                <label for="2-star-rating" class="star-rating star">
                                    <i class="fa fa-star d-inline-block"></i>
                                </label>

                                <!-- star 1 -->
                                <input type="radio" id="1-star-rating" name="star-rating"
                                    value="1">
                                <label for="1-star-rating" class="star-rating star">
                                    <i class="fa fa-star d-inline-block"></i>
                                </label>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer dots-mas">
                    <a href="">
                        <i class="bi bi-three-dots"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <h5 class="card-header text-center">Nombre veterinaria</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="position-relative tarjeta-vet">
                                <img src="{{ asset('img/imagen.png') }}" class="card-img-top rounded-0"
                                    alt="...">
                            </div>
                        </div>
                        <div class="col-8">
                            <h5 class="card-title text-center">
                                Cuidando a tus mascotas como parte de nuestra familia
                            </h5>
                            <br>
                            <p class="card-text">
                                <i class="bi bi-geo-alt"></i>
                                Calle Principal #123
                            </p>
                            <!-- star rating -->
                            <div class="rating-wrapper">

                                <!-- star 5 -->
                                <input type="radio" id="5-star-rating" name="star-rating"
                                    value="5">
                                <label for="5-star-rating" class="star-rating star">
                                    <i class="fa fa-star d-inline-block"></i>
                                </label>

                                <!-- star 4 -->
                                <input type="radio" id="4-star-rating" name="star-rating"
                                    value="4">
                                <label for="4-star-rating" class="star-rating star">
                                    <i class="fa fa-star d-inline-block"></i>
                                </label>

                                <!-- star 3 -->
                                <input type="radio" id="3-star-rating" name="star-rating"
                                    value="3">
                                <label for="3-star-rating" class="star-rating star">
                                    <i class="fa fa-star d-inline-block"></i>
                                </label>

                                <!-- star 2 -->
                                <input type="radio" id="2-star-rating" name="star-rating"
                                    value="2">
                                <label for="2-star-rating" class="star-rating star">
                                    <i class="fa fa-star d-inline-block"></i>
                                </label>

                                <!-- star 1 -->
                                <input type="radio" id="1-star-rating" name="star-rating"
                                    value="1">
                                <label for="1-star-rating" class="star-rating star">
                                    <i class="fa fa-star d-inline-block"></i>
                                </label>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer dots-mas">
                    <a href="">
                        <i class="bi bi-three-dots"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <h5 class="card-header text-center">Nombre veterinaria</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="position-relative tarjeta-vet">
                                <img src="{{ asset('img/imagen.png') }}" class="card-img-top rounded-0"
                                    alt="...">
                            </div>
                        </div>
                        <div class="col-8">
                            <h5 class="card-title text-center">
                                Cuidando a tus mascotas como parte de nuestra familia
                            </h5>
                            <br>
                            <p class="card-text">
                                <i class="bi bi-geo-alt"></i>
                                Calle Principal #123
                            </p>
                            <!-- star rating -->
                            <div class="rating-wrapper">

                                <!-- star 5 -->
                                <input type="radio" id="5-star-rating" name="star-rating"
                                    value="5">
                                <label for="5-star-rating" class="star-rating star">
                                    <i class="fa fa-star d-inline-block"></i>
                                </label>

                                <!-- star 4 -->
                                <input type="radio" id="4-star-rating" name="star-rating"
                                    value="4">
                                <label for="4-star-rating" class="star-rating star">
                                    <i class="fa fa-star d-inline-block"></i>
                                </label>

                                <!-- star 3 -->
                                <input type="radio" id="3-star-rating" name="star-rating"
                                    value="3">
                                <label for="3-star-rating" class="star-rating star">
                                    <i class="fa fa-star d-inline-block"></i>
                                </label>

                                <!-- star 2 -->
                                <input type="radio" id="2-star-rating" name="star-rating"
                                    value="2">
                                <label for="2-star-rating" class="star-rating star">
                                    <i class="fa fa-star d-inline-block"></i>
                                </label>

                                <!-- star 1 -->
                                <input type="radio" id="1-star-rating" name="star-rating"
                                    value="1">
                                <label for="1-star-rating" class="star-rating star">
                                    <i class="fa fa-star d-inline-block"></i>
                                </label>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer dots-mas">
                    <a href="">
                        <i class="bi bi-three-dots"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection