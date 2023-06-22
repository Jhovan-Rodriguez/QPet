@extends('layouts.appLayout')

@section('titulo')
    Veterinaria
@endsection

@section('main')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row titulo-vet">
                <div class="col-1">
                    <i class="bi bi-arrow-left-circle-fill"></i>
                </div>
                <div class="col-10">
                    <h3 class="card-title fw-semibold text-center">Nombre veterinaria</h3>
                </div>
                <div class="col-1">
                    <i class="bi bi-heart"></i>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-3">
                    <div class="position-relative tarjeta-vet">
                        <img src="{{ asset('img/imagen.png') }}" class="card-img-top rounded-0"
                            alt="...">
                    </div>
                    <!-- star rating -->
                    <div class="rating-wrapper">

                        <!-- star 5 -->
                        <input type="radio" id="5-star-rating" name="star-rating" value="5">
                        <label for="5-star-rating" class="star-rating star">
                            <i class="fa fa-star d-inline-block"></i>
                        </label>

                        <!-- star 4 -->
                        <input type="radio" id="4-star-rating" name="star-rating" value="4">
                        <label for="4-star-rating" class="star-rating star">
                            <i class="fa fa-star d-inline-block"></i>
                        </label>

                        <!-- star 3 -->
                        <input type="radio" id="3-star-rating" name="star-rating" value="3">
                        <label for="3-star-rating" class="star-rating star">
                            <i class="fa fa-star d-inline-block"></i>
                        </label>

                        <!-- star 2 -->
                        <input type="radio" id="2-star-rating" name="star-rating" value="2">
                        <label for="2-star-rating" class="star-rating star">
                            <i class="fa fa-star d-inline-block"></i>
                        </label>

                        <!-- star 1 -->
                        <input type="radio" id="1-star-rating" name="star-rating" value="1">
                        <label for="1-star-rating" class="star-rating star">
                            <i class="fa fa-star d-inline-block"></i>
                        </label>

                    </div>
                    <button type="button" class="btn btn-success m-1" style="width:100%">Cita</button>

                </div>
                <div class="col-7">
                    <p class="text-center">
                        Lorem ipsum dolor sit amet consectetur. Et vel sagittis non id ultrices volutpat.
                        Nibh adipiscing nunc sed tellus dolor. Rhoncus lacinia turpis posuere dictum
                        phasellus ultrices fusce posuere eleifend. Sodales elementum adipiscing enim porta
                        iaculis a lorem in elit.
                    </p>
                    <br>
                    <h3 class="card-title fw-semibold">Ubicación</h3>
                    <div class="card">
                        <div class="card-body vet-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.5036728305713!2d-99.07947062552014!3d23.729411978684702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x867951bd5407d2a9%3A0x1dfa01b571fe2685!2sUniversidad%20Polit%C3%A9cnica%20de%20Victoria!5e0!3m2!1ses!2smx!4v1686528814505!5m2!1ses!2smx" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                                    </div>
                      </div>
                </div>
                <div class="col-1"></div>

            </div>
        </div>
    </div>
</div>
@endsection

