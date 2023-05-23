<div class="form-floating mb-3">
    <select id="id_paciente" name="id_paciente" class="form-control" required>
        @foreach ($pacientesDisponibles as $paciente)
        <option value="{{$paciente->id}}-{{$paciente->nombre}}">{{ $paciente->nombre}}</option>
    @endforeach
    </select>
    <label for="id_paciente" class="form-label fuente">Paciente:</label>
</div>

<div class="form-floating mb-3">

<input type="analisis" id="analisis" name="analisis" class="form-control" placeholder=""
@if (isset($resLab))
    value="{{$resultadoslab->analisis_sangre_orina_radiografías}}"
@endif
required />
    <label for="analisis" class="form-label fuente">analisis</label>

</div>
<div class="form-floating mb-3">

    <input type="text" id="Descripcion" name="Descripcion" class="form-control" placeholder="Descripcion "
    @if (isset($resLab))
        value={{$resultadoslab->Descripcion}}
    @endif
    required />
    <label for="Descripcion" class="form-label fuente">Descripcion</label>

</div>
<div class="text-center">
    <a class="btn btn-danger" href="{{url('/resLab')}}" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>




