<div class="form-floating mb-3">

    <input type="analisis" id="analisis" name="analisis" class="form-control" placeholder=""
        value="{{ $resultadoslab->análisis_sangre_orina_radiografías }}" required />
    <label for="analisis" class="form-label fuente">analisis</label>

</div>
<div class="form-floating mb-3">

    <input type="text" id="Descripcion" name="Descripcion" class="form-control" placeholder="Descripcion "
        value={{ $resultadoslab->Descripcion }} required />
    <label for="Descripcion" class="form-label fuente">Descripcion</label>

</div>
<div class="text-center">
    <a class="btn btn-danger" href="{{ url('/resLab') }}" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
