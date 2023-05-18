@extends('base')

@section('contenido')
<div>
    <div class="row">
        <h2>Administracion de Medicamentos</h2>
        <br><br>
        <a href="{{ asset('/receta/create') }}">
            <button class="btn btn-success" type="button">
                Nueva receta
            </button>
        </a>
        <br><br>

        <table id="medicos" class="table table-hover">
            <thead>
                <tr>
                    <th>id receta</th>
                    <th>id paciente</th>
                    <th>id_medico</th>
                    <th>paciente</th>
                    <th>Medico</th>
                    <th>medicamentos</th>
                    <th>dosis</th>
                    <th>duracion de tratamiendo</th>
                    <th>modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($Administracion_medicamentos as $re)
            <tr>
                <td>{{$re->id}}</td>
                <td>{{$re->id_paciente}}</td>
                <td>{{$re->id_medico}}</td>
                <td>{{$re->nombre_paciente}}</td>
                <td>{{$re->nombre_doctor}}</td>
                <td>{{$re->medicamentos}}</td>
                <td>{{$re->dosis}}</td>
                <td>{{$re->frecuencia_tratamiento}}</td>
                <td>
                    <a href="{{asset('/receta/'.$re->id.'/edit')}}" class="btn btn-warning"> Modificar </a>
                 </td>
                <td>
                    <form action="{{asset('/receta/'.$re->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="borrar"
                        onClick="return confirm('¿Estas seguro?')">
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
