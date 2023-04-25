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

        <table id="medicos" class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Especialidad</th>
                    <th>Contacto</th></th>
                    <th>Disponibilidad</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($medicos as $med)
                <tr>
                    <td>{{$med->id_médico}}</td>
                    <td>{{$med->nombre_médico}}</td>
                    <td>{{$med->especialidad}}</td>
                    <td>{{$med->información_contacto}}</td>
                    <td>{{$med->disponibilidad}}</td>
                    <td>
                    <!-- modificar-->
                    <a href=""class="btn btn-warning" role="button"> editar </a>
                    {{-- {{ asset('/medicos/'. $med->id. '/edit') }} --}}
                    </a>
                    </td>

                    <td>
                    <!-- eliminar -->
                    <form action="">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="borrar"
                        onClick="return confirm('¿Estas seguro?')">
                    </form>
                        {{-- {{asset ('/medicos/. $med->id')}} --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
