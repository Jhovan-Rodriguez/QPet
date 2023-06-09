@extends('layouts.appLayout')

@section('titulo')
  Adopción
@endsection

@section('contenido')
    <div class="conatiner-fluid content-inner mt-5 py-0">

        <div class="row my-3 ">
            <div class="col d-flex justify-content-between">
                <form class="d-flex">
                    <input class="border border-3 border-top-0 border-start-0 border-end-0 text-center  " type="search" placeholder="  Buscar" aria-label="Search" style="outline: none;">
                    <button type="button" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search-heart" viewBox="0 0 16 16">
                            <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z"></path>
                            <path d="M13 6.5a6.471 6.471 0 0 1-1.258 3.844c.04.03.078.062.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1.007 1.007 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5ZM6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11Z"></path>
                        </svg>
                      </button>
                </form>

                <div class="d-flex">
                    <button class="btn btn-primary me-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Filtrar</button>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Ordenar</button>
                </div>
        </div>
        

        <div class="row mt-5 p-0">
            <div class="col-lg-6">
                <div class="profile-content tab-content">
                    <div id="profile-feed" class="tab-pane fade active show">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between pb-4">
                                <div class="header-title">
                                    <div class="d-flex flex-wrap">
                                        <div class="media-support-user-img me-3">
                                            <img class="rounded-pill img-fluid avatar-60" src="https://th.bing.com/th/id/OIP.VOa9gGmrtFqjmGmBb7z57gHaHa?pid=ImgDet&rs=1" alt="img1">
                                        </div>
                                        <div class="media-support-info mt-2">
                                            <h5 class="mb-0">Pedro</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                        29 mins
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton7">
                                        <a class="dropdown-item " href="javascript:void(0);">Action</a>
                                        <a class="dropdown-item " href="javascript:void(0);">Another action</a>
                                        <a class="dropdown-item " href="javascript:void(0);">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="user-post">
                                    <a href="javascript:void(0);"><img src="https://th.bing.com/th/id/OIP.kcocWjbunzqOymm8shT_HgAAAA?pid=ImgDet&rs=1" alt="post-image" class="img-fluid w-100"></a>
                                </div>
                                <div class="comment-area p-3">
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center message-icon me-3">
                                                <svg width="20" height="20" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                                                </svg>
                                                <span class="ms-1">Like</span>
                                            </div>
                                            <div class="d-flex align-items-center feather-icon">
                                                <svg width="20" height="20" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M9,22A1,1 0 0,1 8,21V18H4A2,2 0 0,1 2,16V4C2,2.89 2.9,2 4,2H20A2,2 0 0,1 22,4V16A2,2 0 0,1 20,18H13.9L10.2,21.71C10,21.9 9.75,22 9.5,22V22H9M10,16V19.08L13.08,16H20V4H4V16H10Z" />
                                                </svg>
                                                <span class="ms-1">140</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <hr>
                                    <ul class="list-inline p-0 m-0">
                                        <li class="mb-4">
                                            <div class="d-flex">
                                                <img src="https://th.bing.com/th/id/R.26db6672bad0f7f5eaad8eb46c511f81?rik=%2b0ISU0KrZaXNzA&pid=ImgRaw&r=0" alt="userimg" class="avatar-50  rounded-pill img-fluid">
                                                <div class="ms-3">
                                                    <h6 class="mb-1">Jorge</h6>
                                                    <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                                    <div class="d-flex flex-wrap align-items-center mb-1">
                                                        <a href="javascript:void(0);" class="me-3">
                                                            <svg width="20" height="20" class="text-body me-1" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                                                            </svg>
                                                            like
                                                        </a>
                                                        <a href="javascript:void(0);" class="me-3">
                                                            <svg width="20" height="20" class="me-1" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M8,9.8V10.7L9.7,11C12.3,11.4 14.2,12.4 15.6,13.7C13.9,13.2 12.1,12.9 10,12.9H8V14.2L5.8,12L8,9.8M10,5L3,12L10,19V14.9C15,14.9 18.5,16.5 21,20C20,15 17,10 10,9" />
                                                            </svg>
                                                            reply
                                                        </a>
                                                        <span> 5 min </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <img src="https://th.bing.com/th/id/R.26db6672bad0f7f5eaad8eb46c511f81?rik=%2b0ISU0KrZaXNzA&pid=ImgRaw&r=0" alt="userimg" class="avatar-50  rounded-pill img-fluid">
                                                <div class="ms-3">
                                                    <h6 class="mb-1">Daniela</h6>
                                                    <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <a href="javascript:void(0);" class="me-3">
                                                            <svg width="20" height="20" class="text-body me-1" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                                                            </svg>
                                                            like
                                                        </a>
                                                        <a href="javascript:void(0);" class="me-3">
                                                            <svg width="20" height="20" class="me-1" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M8,9.8V10.7L9.7,11C12.3,11.4 14.2,12.4 15.6,13.7C13.9,13.2 12.1,12.9 10,12.9H8V14.2L5.8,12L8,9.8M10,5L3,12L10,19V14.9C15,14.9 18.5,16.5 21,20C20,15 17,10 10,9" />
                                                            </svg>
                                                            reply
                                                        </a>
                                                        <span> 8 min </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                        <input type="text" class="form-control rounded" placeholder="Comentar">
                                        <div class="comment-attagement d-flex">
                                            <a href="javascript:void(0);" class="me-2 text-body">
                                                <svg width="20" height="20" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12M22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12M10,9.5C10,10.3 9.3,11 8.5,11C7.7,11 7,10.3 7,9.5C7,8.7 7.7,8 8.5,8C9.3,8 10,8.7 10,9.5M17,9.5C17,10.3 16.3,11 15.5,11C14.7,11 14,10.3 14,9.5C14,8.7 14.7,8 15.5,8C16.3,8 17,8.7 17,9.5M12,17.23C10.25,17.23 8.71,16.5 7.81,15.42L9.23,14C9.68,14.72 10.75,15.23 12,15.23C13.25,15.23 14.32,14.72 14.77,14L16.19,15.42C15.29,16.5 13.75,17.23 12,17.23Z" />
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0);" class="text-body">
                                                <svg width="20" height="20" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M20,4H16.83L15,2H9L7.17,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6A2,2 0 0,0 20,4M20,18H4V6H8.05L9.88,4H14.12L15.95,6H20V18M12,7A5,5 0 0,0 7,12A5,5 0 0,0 12,17A5,5 0 0,0 17,12A5,5 0 0,0 12,7M12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15Z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between pb-4">
                                <div class="header-title">
                                    <div class="d-flex flex-wrap">
                                        <div class="media-support-user-img me-3">
                                            <img class="rounded-pill img-fluid avatar-60" src="https://th.bing.com/th/id/OIP.VOa9gGmrtFqjmGmBb7z57gHaHa?pid=ImgDet&rs=1" alt="img1">
                                        </div>
                                        <div class="media-support-info mt-2">
                                            <h5 class="mb-0">Miguel</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                        47 mins
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton7">
                                        <a class="dropdown-item " href="javascript:void(0);">Action</a>
                                        <a class="dropdown-item " href="javascript:void(0);">Another action</a>
                                        <a class="dropdown-item " href="javascript:void(0);">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="user-post">
                                    <a href="javascript:void(0);"><img src="https://i2.wp.com/wipy.tv/wp-content/uploads/2019/01/Muri%C3%B3-el-perrito-m%C3%A1s-famosos-de-internet-2.jpg?fit=1000%2C600&ssl=1" alt="post-image" class="img-fluid w-100"></a>
                                </div>
                                <div class="comment-area p-3">
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center message-icon me-3">
                                                <svg width="20" height="20" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                                                </svg>
                                                <span class="ms-1">Like</span>
                                            </div>
                                            <div class="d-flex align-items-center feather-icon">
                                                <svg width="20" height="20" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M9,22A1,1 0 0,1 8,21V18H4A2,2 0 0,1 2,16V4C2,2.89 2.9,2 4,2H20A2,2 0 0,1 22,4V16A2,2 0 0,1 20,18H13.9L10.2,21.71C10,21.9 9.75,22 9.5,22V22H9M10,16V19.08L13.08,16H20V4H4V16H10Z" />
                                                </svg>
                                                <span class="ms-1">110</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <hr>
                                    <ul class="list-inline p-0 m-0">
                                        <li class="mb-4">
                                            <div class="d-flex">
                                                <img src="https://th.bing.com/th/id/R.26db6672bad0f7f5eaad8eb46c511f81?rik=%2b0ISU0KrZaXNzA&pid=ImgRaw&r=0" alt="userimg" class="avatar-50  rounded-pill img-fluid">
                                                <div class="ms-3">
                                                    <h6 class="mb-1">Maria</h6>
                                                    <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                                    <div class="d-flex flex-wrap align-items-center mb-1">
                                                        <a href="javascript:void(0);" class="me-3">
                                                            <svg width="20" height="20" class="text-body me-1" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                                                            </svg>
                                                            like
                                                        </a>
                                                        <a href="javascript:void(0);" class="me-3">
                                                            <svg width="20" height="20" class="me-1" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M8,9.8V10.7L9.7,11C12.3,11.4 14.2,12.4 15.6,13.7C13.9,13.2 12.1,12.9 10,12.9H8V14.2L5.8,12L8,9.8M10,5L3,12L10,19V14.9C15,14.9 18.5,16.5 21,20C20,15 17,10 10,9" />
                                                            </svg>
                                                            reply
                                                        </a>
                                                        <span> 3 min </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <img src="https://th.bing.com/th/id/R.26db6672bad0f7f5eaad8eb46c511f81?rik=%2b0ISU0KrZaXNzA&pid=ImgRaw&r=0" alt="userimg" class="avatar-50  rounded-pill img-fluid">
                                                <div class="ms-3">
                                                    <h6 class="mb-1">Mauricio</h6>
                                                    <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <a href="javascript:void(0);" class="me-3">
                                                            <svg width="20" height="20" class="text-body me-1" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                                                            </svg>
                                                            like
                                                        </a>
                                                        <a href="javascript:void(0);" class="me-3">
                                                            <svg width="20" height="20" class="me-1" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M8,9.8V10.7L9.7,11C12.3,11.4 14.2,12.4 15.6,13.7C13.9,13.2 12.1,12.9 10,12.9H8V14.2L5.8,12L8,9.8M10,5L3,12L10,19V14.9C15,14.9 18.5,16.5 21,20C20,15 17,10 10,9" />
                                                            </svg>
                                                            reply
                                                        </a>
                                                        <span> 20 min </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                        <input type="text" class="form-control rounded" placeholder="Comentar">
                                        <div class="comment-attagement d-flex">
                                            <a href="javascript:void(0);" class="me-2 text-body">
                                                <svg width="20" height="20" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12M22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12M10,9.5C10,10.3 9.3,11 8.5,11C7.7,11 7,10.3 7,9.5C7,8.7 7.7,8 8.5,8C9.3,8 10,8.7 10,9.5M17,9.5C17,10.3 16.3,11 15.5,11C14.7,11 14,10.3 14,9.5C14,8.7 14.7,8 15.5,8C16.3,8 17,8.7 17,9.5M12,17.23C10.25,17.23 8.71,16.5 7.81,15.42L9.23,14C9.68,14.72 10.75,15.23 12,15.23C13.25,15.23 14.32,14.72 14.77,14L16.19,15.42C15.29,16.5 13.75,17.23 12,17.23Z" />
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0);" class="text-body">
                                                <svg width="20" height="20" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M20,4H16.83L15,2H9L7.17,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6A2,2 0 0,0 20,4M20,18H4V6H8.05L9.88,4H14.12L15.95,6H20V18M12,7A5,5 0 0,0 7,12A5,5 0 0,0 12,17A5,5 0 0,0 17,12A5,5 0 0,0 12,7M12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15Z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="profile-content tab-content">
                    <div id="profile-feed" class="tab-pane fade active show">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between pb-4">
                                <div class="header-title">
                                    <div class="d-flex flex-wrap">
                                        <div class="media-support-user-img me-3">
                                            <img class="rounded-pill img-fluid avatar-60" src="https://th.bing.com/th/id/OIP.VOa9gGmrtFqjmGmBb7z57gHaHa?pid=ImgDet&rs=1" alt="img1">
                                        </div>
                                        <div class="media-support-info mt-2">
                                            <h5 class="mb-0">Kevin</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                        50 mins
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton7">
                                        <a class="dropdown-item " href="javascript:void(0);">Action</a>
                                        <a class="dropdown-item " href="javascript:void(0);">Another action</a>
                                        <a class="dropdown-item " href="javascript:void(0);">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="user-post">
                                    <a href="javascript:void(0);"><img src="https://th.bing.com/th/id/R.76efe5496320cb79ade919c43d0ab733?rik=CEYdgPotnetlTw&pid=ImgRaw&r=0" alt="post-image" class="img-fluid w-100"></a>
                                </div>
                                <div class="comment-area p-3">
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center message-icon me-3">
                                                <svg width="20" height="20" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                                                </svg>
                                                <span class="ms-1">Like</span>
                                            </div>
                                            <div class="d-flex align-items-center feather-icon">
                                                <svg width="20" height="20" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M9,22A1,1 0 0,1 8,21V18H4A2,2 0 0,1 2,16V4C2,2.89 2.9,2 4,2H20A2,2 0 0,1 22,4V16A2,2 0 0,1 20,18H13.9L10.2,21.71C10,21.9 9.75,22 9.5,22V22H9M10,16V19.08L13.08,16H20V4H4V16H10Z" />
                                                </svg>
                                                <span class="ms-1">90</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <hr>
                                    <ul class="list-inline p-0 m-0">
                                        <li class="mb-4">
                                            <div class="d-flex">
                                                <img src="https://th.bing.com/th/id/R.26db6672bad0f7f5eaad8eb46c511f81?rik=%2b0ISU0KrZaXNzA&pid=ImgRaw&r=0" alt="userimg" class="avatar-50  rounded-pill img-fluid">
                                                <div class="ms-3">
                                                    <h6 class="mb-1">Jhovan</h6>
                                                    <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                                    <div class="d-flex flex-wrap align-items-center mb-1">
                                                        <a href="javascript:void(0);" class="me-3">
                                                            <svg width="20" height="20" class="text-body me-1" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                                                            </svg>
                                                            like
                                                        </a>
                                                        <a href="javascript:void(0);" class="me-3">
                                                            <svg width="20" height="20" class="me-1" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M8,9.8V10.7L9.7,11C12.3,11.4 14.2,12.4 15.6,13.7C13.9,13.2 12.1,12.9 10,12.9H8V14.2L5.8,12L8,9.8M10,5L3,12L10,19V14.9C15,14.9 18.5,16.5 21,20C20,15 17,10 10,9" />
                                                            </svg>
                                                            reply
                                                        </a>
                                                        <span> 36 min </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <img src="https://th.bing.com/th/id/R.26db6672bad0f7f5eaad8eb46c511f81?rik=%2b0ISU0KrZaXNzA&pid=ImgRaw&r=0" alt="userimg" class="avatar-50  rounded-pill img-fluid">
                                                <div class="ms-3">
                                                    <h6 class="mb-1">Erick</h6>
                                                    <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <a href="javascript:void(0);" class="me-3">
                                                            <svg width="20" height="20" class="text-body me-1" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                                                            </svg>
                                                            like
                                                        </a>
                                                        <a href="javascript:void(0);" class="me-3">
                                                            <svg width="20" height="20" class="me-1" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M8,9.8V10.7L9.7,11C12.3,11.4 14.2,12.4 15.6,13.7C13.9,13.2 12.1,12.9 10,12.9H8V14.2L5.8,12L8,9.8M10,5L3,12L10,19V14.9C15,14.9 18.5,16.5 21,20C20,15 17,10 10,9" />
                                                            </svg>
                                                            reply
                                                        </a>
                                                        <span> 1 min </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                        <input type="text" class="form-control rounded" placeholder="Comentar">
                                        <div class="comment-attagement d-flex">
                                            <a href="javascript:void(0);" class="me-2 text-body">
                                                <svg width="20" height="20" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12M22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12M10,9.5C10,10.3 9.3,11 8.5,11C7.7,11 7,10.3 7,9.5C7,8.7 7.7,8 8.5,8C9.3,8 10,8.7 10,9.5M17,9.5C17,10.3 16.3,11 15.5,11C14.7,11 14,10.3 14,9.5C14,8.7 14.7,8 15.5,8C16.3,8 17,8.7 17,9.5M12,17.23C10.25,17.23 8.71,16.5 7.81,15.42L9.23,14C9.68,14.72 10.75,15.23 12,15.23C13.25,15.23 14.32,14.72 14.77,14L16.19,15.42C15.29,16.5 13.75,17.23 12,17.23Z" />
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0);" class="text-body">
                                                <svg width="20" height="20" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M20,4H16.83L15,2H9L7.17,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6A2,2 0 0,0 20,4M20,18H4V6H8.05L9.88,4H14.12L15.95,6H20V18M12,7A5,5 0 0,0 7,12A5,5 0 0,0 12,17A5,5 0 0,0 17,12A5,5 0 0,0 12,7M12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15Z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between pb-4">
                                <div class="header-title">
                                    <div class="d-flex flex-wrap">
                                        <div class="media-support-user-img me-3">
                                            <img class="rounded-pill img-fluid avatar-60" src="https://th.bing.com/th/id/OIP.VOa9gGmrtFqjmGmBb7z57gHaHa?pid=ImgDet&rs=1" alt="img1">
                                        </div>
                                        <div class="media-support-info mt-2">
                                            <h5 class="mb-0">Luisa</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                        53 mins
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton7">
                                        <a class="dropdown-item " href="javascript:void(0);">Action</a>
                                        <a class="dropdown-item " href="javascript:void(0);">Another action</a>
                                        <a class="dropdown-item " href="javascript:void(0);">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="user-post">
                                    <a href="javascript:void(0);"><img src="https://th.bing.com/th/id/OIP.rwlKoYAPShW1607Ijt6egQAAAA?pid=ImgDet&w=431&h=600&rs=1" alt="post-image" class="img-fluid w-100"></a>
                                </div>
                                <div class="comment-area p-3">
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center message-icon me-3">
                                                <svg width="20" height="20" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                                                </svg>
                                                <span class="ms-1">Like</span>
                                            </div>
                                            <div class="d-flex align-items-center feather-icon">
                                                <svg width="20" height="20" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M9,22A1,1 0 0,1 8,21V18H4A2,2 0 0,1 2,16V4C2,2.89 2.9,2 4,2H20A2,2 0 0,1 22,4V16A2,2 0 0,1 20,18H13.9L10.2,21.71C10,21.9 9.75,22 9.5,22V22H9M10,16V19.08L13.08,16H20V4H4V16H10Z" />
                                                </svg>
                                                <span class="ms-1">180</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <hr>
                                    <ul class="list-inline p-0 m-0">
                                        <li class="mb-4">
                                            <div class="d-flex">
                                                <img src="https://th.bing.com/th/id/R.26db6672bad0f7f5eaad8eb46c511f81?rik=%2b0ISU0KrZaXNzA&pid=ImgRaw&r=0" alt="userimg" class="avatar-50  rounded-pill img-fluid">
                                                <div class="ms-3">
                                                    <h6 class="mb-1">Luis</h6>
                                                    <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                                    <div class="d-flex flex-wrap align-items-center mb-1">
                                                        <a href="javascript:void(0);" class="me-3">
                                                            <svg width="20" height="20" class="text-body me-1" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                                                            </svg>
                                                            like
                                                        </a>
                                                        <a href="javascript:void(0);" class="me-3">
                                                            <svg width="20" height="20" class="me-1" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M8,9.8V10.7L9.7,11C12.3,11.4 14.2,12.4 15.6,13.7C13.9,13.2 12.1,12.9 10,12.9H8V14.2L5.8,12L8,9.8M10,5L3,12L10,19V14.9C15,14.9 18.5,16.5 21,20C20,15 17,10 10,9" />
                                                            </svg>
                                                            reply
                                                        </a>
                                                        <span> 7 min </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <img src="https://th.bing.com/th/id/R.26db6672bad0f7f5eaad8eb46c511f81?rik=%2b0ISU0KrZaXNzA&pid=ImgRaw&r=0" alt="userimg" class="avatar-50  rounded-pill img-fluid">
                                                <div class="ms-3">
                                                    <h6 class="mb-1">Marisol</h6>
                                                    <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <a href="javascript:void(0);" class="me-3">
                                                            <svg width="20" height="20" class="text-body me-1" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                                                            </svg>
                                                            like
                                                        </a>
                                                        <a href="javascript:void(0);" class="me-3">
                                                            <svg width="20" height="20" class="me-1" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M8,9.8V10.7L9.7,11C12.3,11.4 14.2,12.4 15.6,13.7C13.9,13.2 12.1,12.9 10,12.9H8V14.2L5.8,12L8,9.8M10,5L3,12L10,19V14.9C15,14.9 18.5,16.5 21,20C20,15 17,10 10,9" />
                                                            </svg>
                                                            reply
                                                        </a>
                                                        <span> 54 min </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                        <input type="text" class="form-control rounded" placeholder="Comentar">
                                        <div class="comment-attagement d-flex">
                                            <a href="javascript:void(0);" class="me-2 text-body">
                                                <svg width="20" height="20" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12M22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12M10,9.5C10,10.3 9.3,11 8.5,11C7.7,11 7,10.3 7,9.5C7,8.7 7.7,8 8.5,8C9.3,8 10,8.7 10,9.5M17,9.5C17,10.3 16.3,11 15.5,11C14.7,11 14,10.3 14,9.5C14,8.7 14.7,8 15.5,8C16.3,8 17,8.7 17,9.5M12,17.23C10.25,17.23 8.71,16.5 7.81,15.42L9.23,14C9.68,14.72 10.75,15.23 12,15.23C13.25,15.23 14.32,14.72 14.77,14L16.19,15.42C15.29,16.5 13.75,17.23 12,17.23Z" />
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0);" class="text-body">
                                                <svg width="20" height="20" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M20,4H16.83L15,2H9L7.17,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6A2,2 0 0,0 20,4M20,18H4V6H8.05L9.88,4H14.12L15.95,6H20V18M12,7A5,5 0 0,0 7,12A5,5 0 0,0 12,17A5,5 0 0,0 17,12A5,5 0 0,0 12,7M12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15Z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection