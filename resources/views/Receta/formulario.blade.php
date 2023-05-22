<div class="mb-3">
    <select class="form-select" aria-label="pacientes" id="selPac" name="selPac">
        <option selected>Paciente</option>
        @foreach ($Paciente as $pa)
            <option value="{{ $pa->id }}-{{ $pa->nombre }}">{{$pa->nombre}}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <select class="form-select" aria-label="Carreras en la escuela" id="selMed" name="selMed">
        <option selected>Medico</option>
        @foreach ($Medico as $me)
        <option value="{{$me->id}}-{{ $me->nombre_médico}}">{{$me->nombre_médico}}</option>
    @endforeach
    </select>
</div>

<div class="mb-3">
    <select class="form-select" aria-label="Carreras en la escuela" id="selMedi" name="selMedi">
        <option selected>Selecciona medicamento</option>
        @foreach ($Medicamento as $Medicamento)
            <option value="{{ $Medicamento->id_medicamento }}">{{ $Medicamento->nombre_medicamento}}</option>
        @endforeach
    </select>
</div>

<input type="button" value="agregar" onclick="pasar()" class="btn btn-success form-control">
<br><br>


<div class="form-floating mb-3">
    <textarea name="medicamento" id="medicamento" cols="30" rows="10" class="form-control" required>
    </textarea>
    <label for="Nombre" class="form-label fuente">Medicamentos</label>
</div>

<div class="form-floating mb-3">
    <textarea name="dosis" id="dosis" cols="30" rows="10" class="form-control" required>
    </textarea>
    <label for="Nombre" class="form-label fuente">dosis</label>
</div>

<div class="form-floating mb-3">
    <textarea name="frecuencia" id="frecuencia" cols="30" rows="10" class="form-control" required>
    </textarea>
    <label for="Nombre" class="form-label fuente">frecuencia</label>
</div>

<div class="text-center">
    <a class="btn btn-danger" href="{{ url('/receta') }}" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary" onClick="return confirm('¿Estas seguro?')">Guardar</button>
</div>

<script>
function pasar() {
    var selectElement = document.getElementById("selMedi");
    var texto1 = selectElement.selectedOptions[0].textContent;

    var texto2 = document.getElementById("medicamento").value;

    // Eliminar espacios en blanco entre palabras en texto2
    texto2 = texto2.replace(/\s+/g, "");

    textof = texto2 += texto1 + "\n";

    document.getElementById("medicamento").value = textof;

    var textop = document.getElementById("dosis").value;

    // Eliminar espacios en blanco entre palabras en textop
    textop = textop.replace(/\s+/g, "");

    if (textop === "") {
        document.getElementById("dosis").value = textop + texto1 + "\n" + " por un total de dosis : ";
    } else {
        document.getElementById("dosis").value = textop + "\n" + texto1 + "\n" + " por un total de dosis : ";
    }

    textof = "";

    document.getElementById("selMedi").value = "Selecciona medicamento";
}

</script>