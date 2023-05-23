


<div class="mb-3">
    <select class="form-select" aria-label="pacientes" id="selPac" name="selPac" required>
        <option selected>Paciente</option>
        @foreach ($Paciente as $pa)
            <option value="{{ $pa->id }}-{{ $pa->nombre }}">{{$pa->nombre}}</option>
        @endforeach
    </select>
</div>


<div class="form-floating mb-3">
    <input type="Diagnosticos" id="Diagnosticos" name="Diagnosticos" class="form-control" placeholder=""
    @if (isset($HistoriaClin))
        value={{$HistoriaClin->diagnósticos}}
    @endif
    required />
    <label for="Diagnosticos" class="form-label fuente">Diagnósticos</label>
</div>

<div class="form-floating mb-3">
    <input type="text" id="tratamientos" name="tratamientos" class="form-control" placeholder=""
    @if (isset($HistoriaClin))
        value={{$HistoriaClin->tratamientos}}
    @endif
    required />
    <label for="tratamientos" class="form-label fuente">Tratamientos</label>
</div>

<div class="form-floating mb-3">
    <input type="text" id="medicamentos_recetados" name="medicamentos_recetados" class="form-control" placeholder=""
    @if (isset($HistoriaClin))
        value={{$HistoriaClin->medicamentos_recetados}}
    @endif
    required />
    <label for="medicamentos_recetados" class="form-label fuente">Medicamentos recetados</label>
</div>
<div class="form-floating mb-3">
    <input type="text" id="resultados_pruebas" name="resultados_pruebas" class="form-control" placeholder=""
    @if (isset($HistoriaClin))
        value={{$HistoriaClin->resultados_pruebas}}
    @endif
    required />
    <label for="resultados_pruebas" class="form-label fuente"> Resultados de pruebas</label>
</div>

<div class="text-center">
    <a class="btn btn-danger" href="{{url('/Hpaciente')}}" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar </button>
</div>
