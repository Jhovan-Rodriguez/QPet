@extends('layouts.appLayout')

@section('estilos')
    <link rel="stylesheet" href="{{asset('css/styleVeterinariaCita.css')}}">
@endsection

@section('titulo')
    Veterinaria
@endsection

@section('contenido')


<div class="container-fluid">
    <div class="col-12">
        <div class="row">
            <div class="col-8 p-0">
                <div class="card " style="height: 100%">
                    <div class="row " >
                        <div class="col-12">
                            <br>
                            <h3 class=" fw-semibold text-center my-3">Nombre veterinaria</h3>
                        </div>
                        
                        <div class="row">
                            <div class="col-3">
                                <div class="position-relative tarjeta-vet">
                                    <img src="{{ asset('img/imagen.png') }}" class="card-img-top rounded-0"
                                        alt="...">
                                </div>
                            </div>
                            <div class="col-9">
                                <p style="font: bold">Agenda una cita con este establecimiento y mantén bien cuidada a tu mascota</p>
                                <form action="">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="inputBox ">
                                                        <span class="mr-2">Mascota</span>
                                                        <select class="selectvet" style="width:100%" aria-label="Default select example">
                                                            <option selected>Elige tu mascota</option>
                                                            <option value="1">Dante</option>
                                                            <option value="2">Max</option>
                                                            <option value="3">Manchas</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-6">
                                                    <div class="inputBox "style="width:100%; ">
                                                        <span class="mr-2">Veterinario</span>
                                                        <select class="selectvet" style="width:100%" aria-label="Default select example">
                                                            <option selected>Elige tu veterinario</option>
                                                            <option value="1">Dr. García</option>
                                                            <option value="2">Dra. Rodríguez</option>
                                                            <option value="3">Dr. López</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-11">
                                                <div class="inputBox " style="width: 100%">
                                                <span class="mr-2">Asunto</span>
                                                <select class="selectvet" aria-label="Default select example" style="width: 100%">
                                                    <option selected>Selecciona</option>
                                                    <option value="1">Consulta</option>
                                                </select>
                                                </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row ">
                                        <div class="col-6">
                                            <div class="inputBox ">
                                                <span class="mr-2">Fecha</span>
                                                <input name="fecha" type="date" required="required" placeholder="Elige tu fecha" style="width: 100%">
                                            </div>
                                        </div>
                                        
                                        <div class="col-6">
                                            <div class="inputBox "style="width:100%  ">
                                                <span class="mr-2"> Hora</span>
                                                <input name="hora" type="time" required="required" placeholder="Elige tu hora" style="width: 100%">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="inputBox "style="width:100%  ">
                                                <span class="mr-2"> Comentarios</span>
                                                <textarea name="comentarios" id=""  placeholder="Escribe tu comentarios"style="width: 100%"></textarea>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="button" class="btnCitas btn btn-success m-1" style="width:30%">Agendar cita</button>
                                </form>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-4  p-0" style="height: 30%">
                <img src="{{ asset('images/Fondo-lateral_vet.png') }}" class="img-fluid rounded-start" alt="...">
            </div>
        </div>

    </div>
    
    <br>
</div>

@endsection

