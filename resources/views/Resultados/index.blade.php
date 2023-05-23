@extends('base')
@section('contenido')

<div>
    <div class="row">
        <h2>Resultados</h2>
        <br><br>
        <a href="{{ asset('/resLab/create') }}">
            <button class="btn btn-success" type="button">
                Registrar Resultados de Laboratorio
            </button>
        </a>
        <br><br>

        <table id="resLab" class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Paciente</th>
                    <th>Analisis</th>
                    <th>Descripcion</th>

                </tr>
            </thead>

            <tbody>
            @foreach ($resultadoslab as $med)
                <tr>
                    <td>{{$med->id}}</td>
                    <td>{{$med->Nombre_paciente}}</td>
                    <td>{{$med->análisis_sangre_orina_radiografías}}</td>
                    <td>{{$med->Descripcion}}</td>


                    <!-- modificar-->

                    </a>
                    </td>

                    <td>
                    <!-- eliminar -->
                    <form action="{{asset ('/resLab/'.$med->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="borrar"
                        onClick="return confirm('¿Estas seguro?')">
                    </form>
                    <td> <a href= "{{ asset('/resLab/'.$med->id.'/edit') }}" class="btn btn-warning"> editar </a></td>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
