@extends('inicio')
@section('contenido')

<div class="text-center">
    <h2>Resultados de Laboratorio</h2>
    <p class="lead">Completa los datos solicitados</p>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
        <form action={{asset(/resLab/.$resLab->id)}} method="POST">
            @csrf
            @method('PATCH')
            @include('Resultados.formulario')
        </form>
    </div>
</div>
@endsection

