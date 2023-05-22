@extends('base')
@section('contenido')
    <h1>Actaulizar Historial</h1>
    <form action="{{asset('/Hpaciente/'.$HistoriaCLin->id)}}" method="POST">
        @csrf
        @method('PATCH')
        @include("HistoriaClinica.formuact")

    </form>

@endsection
