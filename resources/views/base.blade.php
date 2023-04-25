<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='{{asset("https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css")}}' rel='stylesheet'>

    <link href="{{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css")}}" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<header>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid d-inline">
            <div class="text-center">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand d-inline" href="">Hospital Universitario La Paz</a>
            </div>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">

                <div class="offcanvas-header">
                    <span>
                        <i class="fi fi-rr-edit"></i>
                        <h5 class="offcanvas-title d-inline" id="offcanvasNavbarLabel">Clinica-App</h5>
                    </span>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">

                    <ul class="navbar-na v justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <span>
                                <i class="fi fi-rr-home"></i>
                                <a class="nav-link active d-inline" aria-current="page" href="{{asset('/')}}">Home</a>
                            </span>
                        </li>
                        <br>
                        <li class="nav-item">
                            <span>
                                <i class="fi fi-rr-user"></i>
                                <a class="nav-link active d-inline" aria-current="page"
                                    href="{{asset('/alumnos')}}">Pacientes</a>
                            </span>
                        </li>
                        <br>
                        <li class="nav-item">
                            <span>
                                <i class="fi fi-rr-user-md"></i>
                                <a class="nav-link active d-inline" aria-current="page"
                                    href="{{asset('/medicos')}}">Medicos</a>
                            </span>
                        </li>
                        <br>
                        <li class="nav-item">
                            <span>
                                <i class="fi fi-rr-document"></i>
                                <a class="nav-link active d-inline" aria-current="page"
                                    href="{{asset('/carreras')}}">Recetas</a>
                            </span>
                        </li>
                        <br>
                        <li class="nav-item">
                            <span>
                                <i class="fi fi-rr-list-check"></i>
                                <a class="nav-link active d-inline" aria-current="page" href="{{asset('/')}}" >Resultados Clinicos</a>
                            </span>
                        </li>
                        <br>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-inline" href="" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Otras opciones
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Medicamentos</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<body>
    <main>
        <div style="margin: 5%" class="container">
            @yield('contenido')
        </div>
    </main>
</body>


<script src="{{ asset("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js") }}"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
</script>
</html>
