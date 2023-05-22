@extends('inicio')

@section('contenido')
<div class="text-center">
    <h2>Registro nueva recera</h2>
    <p class="lead">Completa los datos solicitados</p>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
        <form action={{asset("/receta")}} method="POST">
            @csrf
            @include('Receta.formulario')
        </form>
    </div>
</div>
@endsection
