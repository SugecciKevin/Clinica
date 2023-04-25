<div class="form-floating mb-3">
    <input type="text" id="ID" name="ID" class="form-control" placeholder="" required />
    <label for="ID" class="form-label fuente">ID</label>
</div>

<div class="form-floating mb-3">
    <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="" required />
    <label for="Nombre" class="form-label fuente">Nombre del Doctor</label>
</div>

<div class="form-floating mb-3">
    <input type="Especiealidad" id="Especiealidad" name="Especiealidad" class="form-control" placeholder="" required />
    <label for="Especiealidad" class="form-label fuente">Especiealidad</label>
</div>

<div class="form-floating mb-3">
    <input type="text" id="Contacto" name="Contacto" class="form-control" placeholder="" required />
    <label for="Contacto" class="form-label fuente">Contacto</label>
</div>

<div class="form-floating mb-3">
    <input type="text" id="Disponibilidad" name="Disponibilidad" class="form-control" placeholder="" required />
    <label for="Disponibilidad" class="form-label fuente">Disponibilidad</label>
</div>

<div class="text-center">
    <a class="btn btn-danger" href="{{url('/Medicos')}}" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar Medico</button>
</div>
