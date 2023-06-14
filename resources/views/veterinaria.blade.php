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
                                    <div class="card-body">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.5036728305713!2d-99.07947062552014!3d23.729411978684702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x867951bd5407d2a9%3A0x1dfa01b571fe2685!2sUniversidad%20Polit%C3%A9cnica%20de%20Victoria!5e0!3m2!1ses!2smx!4v1686528814505!5m2!1ses!2smx" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                                    </div>
                                  </div>
                            </div>
                            <div class="col-1"></div>

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
    <script>
        $(".fa-heart").click(function() {
            $(this).toggleClass("background-heart");
        });
    </script>
</body>

</html>
