@extends('base')
@section('contenido')

<div class="row">
    <a href="{{asset('/pacienteee/create')}}">
    <button class="btn btn-primary">Agregar</button>
    </a>
</div>
<div>
    <table id="pacientes" class="table table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Fecha de nacimiento </th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Contacto de emergencia</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($Paciente as $pac)
            <tr>
                <td>{{$pac->id}}</td>
                <td>{{$pac->nombre}}</td>
                <td>{{$pac->fecha_nacimiento}}</td>
                <td>{{$pac->dirección}}</td>
                <td>{{$pac->teléfono}}</td>
                <td>{{$pac ->contacto_emergencia}}</td>
                <td>
                 <!-- modificar-->
                 <a href= "{{ asset('/pacienteee/'.$pac->id.'/edit') }}" class="btn btn-warning"> editar </a>
                </a>
                </td>

                <td>
                <!-- eliminar -->
                <form action="{{asset ('/pacienteee/'.$pac->id)}}" method="POST">
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


@endsection
