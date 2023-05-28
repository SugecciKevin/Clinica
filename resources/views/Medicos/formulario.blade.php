<div class="form-floating mb-3">
    <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder=""
    @if (isset($medicos))
        value={{$medicos->nombre_médico}}
    @endif
    required />
    <label for="Nombre" class="form-label fuente">Nombre del Doctor</label>
</div>

<div class="form-floating mb-3">
    <input type=text" id="Especiealidad" name="Especiealidad" class="form-control" placeholder=""
    @if (isset($medicos))
        value={{$medicos->especialidad}}
    @endif
    required />
    <label for="Especiealidad" class="form-label fuente">Especiealidad</label>
</div>

<div class="form-floating mb-3">
    <input type="number" id="Contacto" name="Contacto" class="form-control" placeholder=""
    @if (isset($medicos))
        value={{$medicos->información_contacto}}
    @endif
    required />
    <label for="Contacto" class="form-label fuente">Contacto</label>
</div>

<div class="form-floating mb-3">
    <input type="text" id="Disponibilidad" name="Disponibilidad" class="form-control" placeholder=""
    @if (isset($medicos))
        value={{$medicos->Area}}
    @endif
    required />
    <label for="Disponibilidad" class="form-label fuente">Area</label>
</div>

<div class="text-center">
    <a class="btn btn-danger" href="{{url('/medicos')}}" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar Medico</button>
</div>
