<div class="form-floating mb-3">

    <input type="datetime" id="fecha_hora_cita" name="fecha_hora_cita" class="form-control" placeholder="Fecha de la Cita"
        @if (isset($citas)) value={{ $citas->fecha_hora_cita }} @endif />

    <label for="fecha_hora_cita" class="form-label fuente">Fecha de la Cita:</label>

</div>

<div class="form-floating mb-3">

    <input type="number" id="id_medico" name="id_medico" class="form-control" placeholder="Id del Medico"
        @if (isset($citas)) value={{ $citas->id_médico }} @endif />

    <label for="id_medico" class="form-label fuente">Id del Medico:</label>

</div>

<div class="form-floating mb-3">

    <input type="number" id="id_paciente" name="id_paciente" class="form-control" placeholder="Id del Paciente"
        @if (isset($citas)) value={{ $citas->id_paciente }} @endif />

    <label for="id_paciente" class="form-label fuente">Id del Paciente:</label>

</div>

<div class="text-center">

    <a class="btn btn-danger" href="{{ url('/citas') }}" role="button">Cancelar</a>

    <button type="submit" class="btn btn-primary">Guardar Cita</button>

</div>
