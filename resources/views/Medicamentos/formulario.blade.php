<div class="form-floating mb-3">
    <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="Nombre"
    @if (isset($medicamentos))
        value={{$medicamentos->nombre_medicamento}}
    @endif
    required />
    <label for="Nombre" class="form-label fuente">Nombre del Medicamento</label>
</div>

<div class="form-floating mb-3">
    <input type="Descripción" id="Descripción" name="Descripción" class="form-control" placeholder="Descripción"
    @if (isset($medicamentos))
        value={{$medicamentos->descripción}}
    @endif
    required />
    <label for="Descripción" class="form-label fuente">Descripción</label>
</div>

<div class="form-floating mb-3">
    <input type="text" id="Fabricante" name="Fabricante" class="form-control" placeholder="Fabricante"
    @if (isset($medicamentos))
        value={{$medicamentos->fabricante}}
    @endif
    required />
    <label for="Fabricante" class="form-label fuente">Fabricante</label>
</div>

<div class="text-center">
    <a class="btn btn-danger" href="{{url('/medicamentos')}}" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar Medicamento</button>
</div>
