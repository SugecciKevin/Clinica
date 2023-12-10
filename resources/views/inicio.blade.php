@extends('base')

@section('contenido')
    <div class="container mt-5 d-flex justify-content-center">
        <div class="row">
            <div class="col-md-6 text-center">
                <h2>Instituto: Instituto Tecnológico de Aguascalientes</h2>
                <p>Materia: Programacion Web</p>
                <p>Unidad 5</p>
                <p>Proyecto web</p>
                <p>Profesor: Hazael Vazquez</p>
            </div>
        </div>

        <!-- Tarjeta 1 -->
        <div class="card mt-5">
            <img src="{{ asset('img/Alexis.jpeg') }}" alt="Nombre Alternativo" class="img-fluid">
            <div class="card-body text-center">
                <h5 class="card-title">Jose Alexis Silva Guerrero</h5>
            </div>
        </div>

        <!-- Tarjeta 2 -->
        <div class="card mt-5">
            <img src="{{ asset('img/Kevin.jpeg') }}" alt="Nombre Alternativo" class="img-fluid">
            <div class="card-body text-center">
                <h5 class="card-title">Kevin Ivan Ramirez Chairez</h5>
            </div>
        </div>
    </div>
@endsection
