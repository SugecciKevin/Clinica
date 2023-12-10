@extends('base')

@section('contenido')
    <div class="container mt-5 d-flex justify-content-center"> <!-- Agregado justify-content-center -->
        <div class="row">
            <div class="col-md-6 text-center">
                <h2>Nombre 1</h2>
                <p>Instituto: ITA</p>
                <p>Materia: Programacion Web</p>
                <p>Unidad 5</p>
                <p>Proyecto web</p>
                <p>Profesor: Hazael</p>
                <img src="/ruta/a/la/primera/imagen.jpg" alt="Imagen 1" class="img-fluid mt-3">
            </div>
        </div>

        <!-- Tarjeta 1 -->
        <div class="card mt-5">
            <img src="/ruta/a/la/imagen/tarjeta1.jpg" class="card-img-top" alt="Imagen Tarjeta 1">
            <div class="card-body text-center">
                <h5 class="card-title">Jose Alexis Silva Guerrero</h5>
            </div>
        </div>

        <!-- Tarjeta 2 -->
        <div class="card mt-5">
            <img src="/ruta/a/la/imagen/tarjeta2.jpg" class="card-img-top" alt="Imagen Tarjeta 2">
            <div class="card-body text-center">
                <h5 class="card-title">Kevin Ivan Ramirez Chairez</h5>
            </div>
        </div>
    </div>
@endsection
