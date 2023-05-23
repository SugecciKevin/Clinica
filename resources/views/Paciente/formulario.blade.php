

<div class="form-floating mb-3">
    <input type="text" id="nombre" name="nombre" class="form-control" placeholder=""
    @if (isset($pacienteee))
        value={{$paciente->nombre}}
    @endif
    required />
    <label for="nombre" class="form-label fuente">Nombre del paciente</label>
</div>

<div class="form-floating mb-3">
    <input type="date" id="fecha" name="fecha" class="form-control" placeholder=""
    @if (isset($pacienteee))
        value={{$paciente->fecha_nacimiento}}
    @endif
    required />
    <label for="nombre" class="form-label fuente">Fecha de nacimieto</label>
</div>

<div class="form-floating mb-3">
    <input type="text" id="direccion" name="direccion" class="form-control" placeholder=""
    @if (isset($pacienteee))
        value={{$paciente->dirección}}
    @endif
    required />
    <label for="direccion" class="form-label fuente">Dirección</label>
</div>


<div class="form-floating mb-3">
    <input type="tel" id="telefono" name="telefono" class="form-control" placeholder=""
    @if (isset($pacienteee))
        value={{$paciente->teléfono}}
    @endif
    required />
    <label for="direccion" class="form-label fuente">Teléfono</label>
</div>
<div class="form-floating mb-3">
    <input type="tel" id="contacto" name="contacto" class="form-control" placeholder=""
    @if (isset($pacienteee))
        value={{$paciente->contacto_emergencia}}
    @endif
    required />
    <label for="direccion" class="form-label fuente">Contacto de emergencias </label>
</div>



<div class="text-center">
    <a class="btn btn-danger" href="{{url('/pacienteee')}}" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar Paciente</button>
</div>
