@extends('layouts.authLayout')

@section('titulo')
    QPet
@endsection

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/styleRegisterVeterinaria.css') }}">
@endsection

@section('contenido')
    <div class="wrapper">
        <div class="image-holder"
            style="background: url({{ asset('img/bg.png') }}) no-repeat fixed; background-size: contain; overflow: hidden;">
            <!-- <img src="{{ asset('img/background.jpg') }}" alt=""> -->
        </div>
        <div class="content-inner">
            <div class="text-center logo">
                <img class="logoQPet" src="{{ asset('img/logos/QPet-Logo.png') }}" alt="Logo QPet">
            </div>
            <div class="form-header">
                <h2>Crea una cuenta</h2>
            </div>
            <!-- Form Steps / Progress Bar -->
            <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
                <!-- Step 1 -->
                <li class="form-stepper-active text-center form-stepper-list" step="1">
                    <a class="mx-2">
                        <span class="form-stepper-circle">
                            <span>1</span>
                        </span>
                        <div class="label">Datos Usuario</div>
                    </a>
                </li>
                <!-- Step 2 -->
                <li class="form-stepper-unfinished text-center form-stepper-list" step="2">
                    <a class="mx-2">
                        <span class="form-stepper-circle text-muted">
                            <span>2</span>
                        </span>
                        <div class="label text-muted">Datos Veterinaria</div>
                    </a>
                </li>
                <!-- Step 3 -->
                <li class="form-stepper-unfinished text-center form-stepper-list" step="3">
                    <a class="mx-2">
                        <span class="form-stepper-circle text-muted">
                            <span>3</span>
                        </span>
                        <div class="label text-muted">Método de Pago</div>
                    </a>
                </li>
            </ul>
            <!-- Step Wise Form Content -->
            <form action="#" class="signin-form " name="userAccountSetupForm" enctype="multipart/form-data"
                method="POST">
                <!-- Step 1 Content -->
                <section id="step-1" class="form-step">
                    <!-- Step 1 input fields -->
                    <div class="row g-4">
                        <div class="form-group col-6">
                            <div class="inputBox">
                                <input type="text" required="required" placeholder="Username">
                                <span>Username</span>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <div class="inputBox">
                                <input type="text" required="required" placeholder="Nombre">
                                <span>Nombre</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <div class="inputBox">
                                <input type="text" required="required" placeholder="Apellido paterno">
                                <span>Apellido Paterno</span>
                            </div>
                        </div>

                        <div class="form-group col-6">
                            <div class="inputBox">
                                <input type="text" required="required" placeholder="Apellido materno">
                                <span>Apellido materno</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <div class="inputBox">
                                <select>
                                    <option selected>Seleccione</option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Femenino</option>
                                    <option value="3">No espefique</option>
                                  </select>
                                <span>Genero</span>
                            </div>
                        </div>

                        <div class="form-group col-6">
                            <div class="inputBox">
                                <input type="date" required="required" placeholder="Apellido materno">
                                <span>Fecha de nacimiento</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <div class="inputBox">
                                <input type="tel" required="required" placeholder="Teléfono">
                                <span>Teléfono</span>
                            </div>
                        </div>

                        <div class="form-group col-6">
                            <div class="inputBox">
                                <input type="email" required="required" placeholder="Email">
                                <span>Email</span>
                            </div>
                        </div>
                    </div>

                    <div class="text-center cont-siguiente">
                        <button class="button btn-navigate-form-step" type="button" step_number="2">Siguiente</button>
                    </div>
                </section>
                <!-- Step 2 Content, default hidden on page load. -->
                <section id="step-2" class="form-step d-none">
                    <!-- Step 2 input fields -->
                    <div class="row g-4">
                        <div class="form-group col-12">
                            <div class="inputBox">
                                <input type="text" required="required" placeholder="Nombre de la veterinaria">
                                <span>Nombre</span>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <div class="inputBox">
                                <input type="text" required="required" placeholder="Colonia">
                                <span>Colonia</span>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <div class="inputBox">
                                <input type="text" required="required" placeholder="Calle">
                                <span>Calle</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <div class="inputBox">
                                <input type="number" required="required" placeholder="Código postal">
                                <span>Código postal</span>
                            </div>
                        </div>

                        <div class="form-group col-6">
                            <div class="inputBox">
                                <input type="number" required="required" placeholder="Apellido materno">
                                <span>Num. exterior</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <div class="inputBox">
                                <select>
                                    <option selected>Seleccione</option>
                                    <option value="DIF">Distrito Federal</option>
                                    <option value="AGS">Aguascalientes</option>
                                    <option value="BCN">Baja California</option>
                                    <option value="BCS">Baja California Sur</option>
                                    <option value="CAM">Campeche</option>
                                    <option value="CHP">Chiapas</option>
                                    <option value="CHI">Chihuahua</option>
                                    <option value="COA">Coahuila</option>
                                    <option value="COL">Colima</option>
                                    <option value="DUR">Durango</option>
                                    <option value="GTO">Guanajuato</option>
                                    <option value="GRO">Guerrero</option>
                                    <option value="HGO">Hidalgo</option>
                                    <option value="JAL">Jalisco</option>
                                    <option value="MEX">M&eacute;xico</option>
                                    <option value="MIC">Michoac&aacute;n</option>
                                    <option value="MOR">Morelos</option>
                                    <option value="NAY">Nayarit</option>
                                    <option value="NLE">Nuevo Le&oacute;n</option>
                                    <option value="OAX">Oaxaca</option>
                                    <option value="PUE">Puebla</option>
                                    <option value="QRO">Quer&eacute;taro</option>
                                    <option value="ROO">Quintana Roo</option>
                                    <option value="SLP">San Luis Potos&iacute;</option>
                                    <option value="SIN">Sinaloa</option>
                                    <option value="SON">Sonora</option>
                                    <option value="TAB">Tabasco</option>
                                    <option value="TAM">Tamaulipas</option>
                                    <option value="TLX">Tlaxcala</option>
                                    <option value="VER">Veracruz</option>
                                    <option value="YUC">Yucat&aacute;n</option>
                                    <option value="ZAC">Zacatecas</option>
                                  </select>
                                <span>Estado</span>
                            </div>
                        </div>

                        <div class="form-group col-6">
                            <div class="inputBox">
                                <select>
                                    <option selected>Seleccione</option>
                                    <option value="DIF">Distrito Federal</option>
                                    <option value="AGS">Aguascalientes</option>
                                    <option value="BCN">Baja California</option>
                                    <option value="BCS">Baja California Sur</option>
                                    <option value="CAM">Campeche</option>
                                    <option value="CHP">Chiapas</option>
                                    <option value="CHI">Chihuahua</option>
                                    <option value="COA">Coahuila</option>
                                    <option value="COL">Colima</option>
                                    <option value="DUR">Durango</option>
                                    <option value="GTO">Guanajuato</option>
                                    <option value="GRO">Guerrero</option>
                                    <option value="HGO">Hidalgo</option>
                                    <option value="JAL">Jalisco</option>
                                    <option value="MEX">M&eacute;xico</option>
                                    <option value="MIC">Michoac&aacute;n</option>
                                    <option value="MOR">Morelos</option>
                                    <option value="NAY">Nayarit</option>
                                    <option value="NLE">Nuevo Le&oacute;n</option>
                                    <option value="OAX">Oaxaca</option>
                                    <option value="PUE">Puebla</option>
                                    <option value="QRO">Quer&eacute;taro</option>
                                    <option value="ROO">Quintana Roo</option>
                                    <option value="SLP">San Luis Potos&iacute;</option>
                                    <option value="SIN">Sinaloa</option>
                                    <option value="SON">Sonora</option>
                                    <option value="TAB">Tabasco</option>
                                    <option value="TAM">Tamaulipas</option>
                                    <option value="TLX">Tlaxcala</option>
                                    <option value="VER">Veracruz</option>
                                    <option value="YUC">Yucat&aacute;n</option>
                                    <option value="ZAC">Zacatecas</option>
                                  </select>
                                <span>Ciudad</span>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-bottom: 20px;">
                        <div class="form-group col-6">
                            <div class="inputBox">
                                <input type="tel" required="required" placeholder="Teléfono">
                                <span>Teléfono</span>
                            </div>
                        </div>

                        <div class="form-group col-6">
                            <div class="inputBox">
                                <input type="email" required="required" placeholder="Email">
                                <span>Email</span>
                            </div>
                        </div>
                    </div>
                    <h5>Horario</h5>
                    <br>
                    <div class="row">
                        <div class="form-group col-4">
                            <div class="inputBox">
                                <input type="time" required="required" placeholder="Teléfono">
                                <span>Lunes a viernes</span>
                            </div>
                        </div>

                        <div class="form-group col-4">
                            <div class="inputBox">
                                <input type="time" required="required" placeholder="Email">
                                <span>Sábado</span>
                            </div>
                        </div>
                        <div class="form-group col-4">
                            <div class="inputBox">
                                <input type="time" required="required" placeholder="Email">
                                <span>Domingo</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 text-center cont-veterinaria-options cont-siguiente">
                        <button class="button btn-navigate-form-step" type="button" step_number="1">Regresar</button>
                        <button class="button btn-navigate-form-step" type="button" step_number="3">Siguiente</button>
                    </div>
                </section>
                <!-- Step 3 Content, default hidden on page load. -->
                <section id="step-3" class="form-step d-none">
                    <!-- Step 3 input fields -->
                    <div class="row">
                        <div class="form-group col-12">
                            <div class="inputBox">
                                <input type="text" required="required" placeholder="Nombre del titular de tarjeta">
                                <span>Nombre de titular</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <div class="inputBox">
                                <input type="number" required="required" placeholder="Número de tarjeta">
                                <span>Número de tarjeta</span>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <div class="inputBox">
                                <select>
                                    <option selected>Seleccione</option>
                                    <option value="debito">Débito</option>
                                    <option value="credito">Crédito</option>
                                  </select>
                                <span>Tipo de tarjeta</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <div class="inputBox">
                                <input type="month" required="required" placeholder="Fecha de expiración de tarjeta">
                                <span>Fecha de expiración</span>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <div class="inputBox">
                                <input type="number" required="required" placeholder="CVV de tarjeta">
                                <span>CVV</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 text-center cont-veterinaria-options">
                        <button class="button btn-navigate-form-step" type="button" step_number="2">Regresar</button>
                        <button class="button submit-btn" type="submit">Save</button>
                    </div>
                </section>
            </form>
        </div>

    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('js/register.js') }}"></script>
@endsection
