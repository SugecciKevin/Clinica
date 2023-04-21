@extends('base')

@section('contenido')
<div>
    <div class="row">
        <h2>Medicos</h2>
        <br><br>
        <a href="{{ asset('/medicos/create') }}">
            <button class="btn btn-success" type="button">
                agregar nuevo
            </button>
        </a>
        <br><br>
    </div>
</div>
@endsection
