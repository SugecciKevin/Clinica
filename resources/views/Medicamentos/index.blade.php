@extends('base')

@section('contenido')
<div>
    <div class="row">
        <h2>Medicamentos</h2>
        <br><br>
        <a href="{{ asset('/medicamentos/create') }}">
            <button class="btn btn-success" type="button">
                Agregar nuevo
            </button>
        </a>
        <br><br>

        <table id="medicamentos" class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Fabricante</th></th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($medicamentos as $medm)
                <tr>
                    <td>{{$medm->id}}</td>
                    <td>{{$medm->nombre_médicamento}}</td>
                    <td>{{$medm->descripción}}</td>
                    <td>{{$medm->fabricante}}</td>
                    <td>
                    <!-- modificar-->
                    <a href= "{{ asset('/medicamentos/'.$medm->id.'/edit') }}" class="btn btn-warning"> Editar </a>
                    </a>
                    </td>

                    <td>
                    <!-- eliminar -->
                    <form action="{{asset ('/medicamentos/'.$medm->id)}}" method="POST">
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