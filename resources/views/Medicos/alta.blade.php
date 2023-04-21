@extends('inicio')

@section('contenido')
<div class="text-center">
    <h2>Registro de medicos</h2>
    <p class="lead">Completa los datos solicitados</p>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
        <form class="mt-0" action="/alumnos" method="POST" enctype="multipart/form-data">
            @csrf
            @include('Medicos.formulario')
        </form>
    </div>
</div>
@endsection
