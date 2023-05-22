<div class="form-floating mb-3">
    <textarea name="dosis1" id="dosis1" cols="30" rows="10" class="form-control" required>
        {{$Administracion_medicamentos->dosis}}
    </textarea>
    <label for="Nombre" class="form-label fuente">dosis</label>
</div>

<div class="form-floating mb-3">
    <textarea name="frecuencia1" id="frecuencia1" cols="30" rows="10" class="form-control" required>
        {{$Administracion_medicamentos->frecuencia_tratamiento }}
    </textarea>
    <label for="Nombre" class="form-label fuente">frecuencia</label>
</div>



<div class="text-center">
    <a class="btn btn-danger" href="{{ url('/receta') }}" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary" onClick="return confirm('¿Estas seguro?')">Guardar</button>
</div>
