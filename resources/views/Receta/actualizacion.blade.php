@extends('inicio')

@section('contenido')

<div class="text-center">
    <h2>Actualizar receta</h2>
    <p class="lead">Completa los datos solicitados</p>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
        <form action={{asset('/receta/'.$Administracion_medicamentos->id)}} method="POST">
            @csrf
            @method('PATCH')
            @include('Receta.formact')
        </form>
    </div>
</div>
@endsection
