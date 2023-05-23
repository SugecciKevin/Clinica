<div class="form-floating mb-3">
    <input type="date" id="fecha_hora_cita" name="fecha_hora_cita" class="form-control" placeholder=""
    @if (isset($cita))
        value="{{ $cita->fecha_hora_cita }}"
    @endif
    required />
    <label for="fecha_hora_cita" class="form-label fuente">Fecha de la Cita:</label>
</div>

<div class="form-floating mb-3">
    <select id="id_medico" name="id_medico" class="form-control" required>
        @if (isset($cita))
            <option value="{{ $cita->id_medico }}" selected>{{ $cita->id_medico }}</option>
        @endif
        @foreach ($medicosDisponibles as $medicos)
            <option value="{{ $medicos->id }}">{{ $medicos->nombre_médico }}</option>
        @endforeach
    </select>
    <label for="id_medico" class="form-label fuente">Médico:</label>
</div>

<div class="form-floating mb-3">
    <select id="id_paciente" name="id_paciente" class="form-control" required>
        @if (isset($cita))
            <option value="{{ $cita->id_paciente }}" selected>{{ $cita->id_paciente }}</option>
        @endif
        @foreach ($pacientesDisponibles as $paciente)
            <option value="{{ $paciente->id }}">{{$paciente->nombre}}</option>
        @endforeach
    </select>
    <label for="id_paciente" class="form-label fuente">Paciente:</label>
</div>

<div class="text-center">
    <a class="btn btn-danger" href="{{ url('/citas') }}" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar Cita</button>
</div>
