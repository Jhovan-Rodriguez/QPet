@extends('layouts.appLayout')

@section('titulo')
    Agendar un paseo
@endsection

@section('contenido')
    <div class="row justify-center">
        <div class="col-lg-10">
            <div class="card mb-0">
                <div class="row g-0">
                    <div class="col-md-4" style="background-image:url('{{asset('img/bg.png')}}'); background-size: cover; background-position: center;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Agendar un paseo</h5>
                            <p class="card-text">Agenda una cita con este establecimiento y manten bien cuidado a tu mascota.</p>
                            <div>
                                <form>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="cname">Cuidador:</label>
                                            <input type="text" class="form-control" id="cname" placeholder="Nombre del cuidador">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="cname">Descripción:</label>
                                            <textarea class="form-control" aria-label="With textarea" placeholder="Lorem ipsum"></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="cname">Comentario:</label>
                                            <textarea class="form-control" aria-label="With textarea" placeholder="Lorem ipsum"></textarea>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="h3">Precio: <span class="badge bg-success">$100</span></p>
                                        </div>

                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Agendar
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection