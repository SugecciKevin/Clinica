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
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

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
                        @method('DELETE');
                        <input type="submit" class="btn btn-danger" value="borrar"
                        onClick="return confirm('¿Estas seguro?')">
                    </form>
                        {{-- {{asset ('/medicos/. $med->id')}} --}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
