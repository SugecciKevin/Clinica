@extends('base')

@section('contenido')
    <a href='{{ asset('/citas/create') }}'>

        <button type="button" class="btn btn-success">Registrar Citas</button>

    </a> <br><br>

    <div class="container text-left">

        <div class="row align-items-start">

            @foreach ($citas as $cita)
                <div class="card mb-3" style="max-width: 540px;">

                    <div class="row g-0">

                        <div class="col-md-8">

                            <div class="card-body">

                                <h5 class="card-title">Información de la Cita</h5>

                                <p class="card-text">

                                    Cita {{ $cita->id }}<br>
                                    Fecha de la Cita: {{ $cita->fecha_hora_cita }}<br>
                                    Medico: {{ $cita->Medico->nombre_médico}}<br>
                                    Paciente: {{ $cita->Paciente->nombre}}

                                </p>

                                <a href="{{ asset('/citas/' . $cita->id . '/edit') }}" class="btn btn-primary"
                                    role="button">Editar Parametros</a>
                                <form action="{{ asset('/citas/' . $cita->id) }}" method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <input type="submit" class="btn btn-danger" value="Borrar"
                                        onClick="return confirm('¿Estas seguro?')">

                                </form>

                            </div>

                        </div>

                    </div>

                </div>
            @endforeach
        </div>

    </div>
@endsection
