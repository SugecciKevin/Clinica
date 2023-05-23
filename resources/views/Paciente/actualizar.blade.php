@extends('base')
@section('contenido')
    <h1>Actaulizar paciente</h1>
    <form action="{{asset('/pacienteee/'.$Paciente->id)}}" method="POST">
        @csrf
        @method('PATCH')
        @include("Paciente.formularioactuali")

    </form>

@endsection
