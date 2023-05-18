@extends('base')


@section('contenido')


    <div style="text-align: center" class="container">
        <h1>Historial de paciente </h1>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('Hpaciente.index')}}" method="GET">
                    <div class="form-row" style="display: flex">
                        <div>
                            <input class="form-control me-2" type="text" placeholder="ID" aria-label="Search" name="texto">
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" value ="buscar" >
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <br>
    <div>


        <table id="medicos" class="table table-hover">

            <thead>
                <tr>
                    <th>id</th>
                    <th>id_paciente</th>
                    <th>diagnósticos</th>
                    <th>tratamientos</th>
                    <th>medicamentos_recetados</th>
                    <th>resultados_pruebas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($HistoriaClin as $hisc )
                <tr>
                    <td>{{$hisc->id}}</td>
                    <td>{{$hisc->id_paciente}}</td>
                    <td>{{$hisc->diagnósticos}}</td>
                    <td>{{$hisc->tratamientos}}</td>
                    <td>{{$hisc->medicamentos_recetados}}</td>
                    <td>{{$hisc->resultados_pruebas}}</td>

                </tr>

                @endforeach
            </tbody>
          </table>
    </div>







@endsection
