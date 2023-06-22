<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QPet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/styles.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styleVeterinarias.css') }}">
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    QPET
                </div>

                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="fa fa-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="#" aria-expanded="false">
                                <span>
                                    <i class="fa fa-home"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../assets/images/profile/user-1.jpg" alt="" width="35"
                                        height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="fa fa-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="fa fa-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="fa fa-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <a href="./authentication-login.html"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <h3 class="fw-bold titulo-vet">Favoritos</h3>
                <br>
                <div class="tarjetas-fav-vet">
                    <div class="col-sm-6 col-xl-3">
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
                    <div class="col-sm-6 col-xl-3">
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
                    <div class="col-sm-6 col-xl-3">
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
                <div class="form">
                    <i class="fa fa-search"></i>
                    <input type="text" class="form-control form-input text-white"
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
        </div>
    </div>
    <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/dist/simplebar.js') }}"></script>
</body>

</html>
