@extends('inicio')

@section('contenido')

    <div class="text-center">

        <h2>Registro de Citas</h2>
        <p class="lead">Completa los datos solicitados</p>

    </div>

    <div class="row justify-content-center my-5">

        <div class="col-lg-6">

            <form class="mt-0" action="{{ asset('/citas') }}" method="POST" enctype="multipart/form-data">

                @csrf
                @include('Citas.formulario')

            </form>

        </div>

    </div>
    
@endsection
