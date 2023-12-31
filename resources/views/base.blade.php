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

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


</head>
<header>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid d-inline">
            <div class="text-center">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand d-inline" href="">Proyecto programacion Web Hospital Universitario La Paz</a>
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Pacientes
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <span>
                                        <i class="fi fi-rr-user"></i>
                                        <a class="nav-link active d-inline" aria-current="page"
                                            href="{{asset('/pacienteee')}}">Pacientes</a>
                                    </span>
                                </li>
                                <li class="nav-item">
                                    <span>
                                        <i class="fi fi-rr-user"></i>
                                        <a class="nav-link active d-inline" aria-current="page"
                                            href="{{asset('/Hpaciente')}}">Historial del paciente</a>
                                    </span>
                                </li>
                            </ul>
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
                                <i class="fi fi-rr-user-md"></i>
                                <a class="nav-link active d-inline" aria-current="page"
                                    href="{{asset('/medicamentos')}}">Medicamentos</a>
                            </span>
                        </li>
                        <br>
                        <li class="nav-item">
                            <span>
                                <i class="fi fi-rr-document"></i>
                                <a class="nav-link active d-inline" aria-current="page"
                                    href="{{asset('/receta')}}">Recetas</a>
                            </span>
                        </li>
                        <br>
                        <li class="nav-item">
                            <span>
                                <i class="fi fi-rr-document"></i>
                                <a class="nav-link active d-inline" aria-current="page"
                                    href="{{asset('/citas')}}">Citas</a>
                            </span>
                        </li>
                        </li>
                        <br>
                        <li class="nav-item">
                            <span>
                                <i class="fi fi-rr-list-check"></i>
                                <a class="nav-link active d-inline" aria-current="page" href="{{asset('/resLab')}}" >Resultados de Laboratorio</a>
                            </span>
                        </li>
                        <br>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<body style="font-family: Arial, Helvetica, sans-serif">
    <main>
        <div style="margin: 5%" class="container">
            @yield('contenido')
        </div>
    </main>
</body>


<script src="{{ asset("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js") }}"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</html>
