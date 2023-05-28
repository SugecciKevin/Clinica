@extends('inicio')

@section('contenido')

    <div class="text-center">

        <h2>Actualizacion de Citas</h2>
        <p class="lead">Completa los Datos Solicitados</p>

    </div>

    <div class="row justify-content-center my-5">

        <div class="col-lg-6">

            <form action={{ asset('/citas/' . $cita->id) }} method="POST">

                @csrf
                @method('PATCH')
                @include('Citas.formulario')

            </form>

        </div>

    </div>
    
@endsection
