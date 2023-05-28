<div class="mb-3">
    <select class="form-select" aria-label="pacientes" id="selPac" name="selPac" required>
        <option selected>Paciente</option>
        @foreach ($Paciente as $pa)
            <option value="{{ $pa->id }}-{{ $pa->nombre }}">{{$pa->nombre}}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <select class="form-select" aria-label="Carreras en la escuela" id="selMed" name="selMed" required>
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
    <p id="contador"></p>
    <label for="Nombre" class="form-label fuente">Medicamentos</label>
</div>

<div class="form-floating mb-3">
    <textarea name="dosis" id="dosis" cols="30" rows="10" class="form-control" required>
    </textarea>
    <p id="contador2"></p>
    <label for="Nombre" class="form-label fuente">dosis</label>
</div>

<div class="form-floating mb-3">
    <textarea name="frecuencia" id="frecuencia" cols="30" rows="10" class="form-control" required>
    </textarea>
    <p id="contador3"></p>
    <label for="Nombre" class="form-label fuente">frecuencia</label>
</div>

<div class="text-center">
    <a class="btn btn-danger" href="{{ url('/receta') }}" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary" onclick="return validarSel()">Guardar</button>
</div>

<script>
function pasar() {
    var validar = document.getElementById("selMedi").value;
    if(validar.trim()==="Selecciona medicamento"){
        alert("selecciona uno de los medicamentos");
    }else{
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
}
function validarSel() {
    var miPac = document.getElementById("selPac");
    var miMed = document.getElementById("selMed");
    var medicamento = document.getElementById("medicamento");
    var dosis = document.getElementById("dosis");
    var frec = document.getElementById("frecuencia");


    if (miPac.value === "Paciente" || miMed.value === "Medico" || medicamento.value.trim() === "" || dosis.value.trim() === "" || frec.value.trim() === "") {
        alert("Rellena todos los campos solicitados");
        return false;
    } else {
        return confirm("¿Estás seguro?");
    }
}

const textArea = document.getElementById('medicamento');
const contador = document.getElementById('contador');

const textArea2 = document.getElementById("dosis");
const contador2 = document.getElementById("contador2");

const textArea3 = document.getElementById("frecuencia");
const contador3 = document.getElementById("contador3");


textArea.addEventListener('input', function() {
  const caracteresRestantes = 250 - textArea.value.length;
  contador.textContent = `Caracteres restantes: ${caracteresRestantes}`;

  if (caracteresRestantes < 0) {
    textArea.value = textArea.value.substring(0, 250);
    contador.textContent = 'Límite de caracteres alcanzado';
  }
});

textArea2.addEventListener('input', function() {
  const caracteresRestantes = 250 - textArea2.value.length;
  contador2.textContent = `Caracteres restantes: ${caracteresRestantes}`;

  if (caracteresRestantes < 0) {
    textArea2.value = textArea2.value.substring(0, 250);
    contador2.textContent = 'Límite de caracteres alcanzado';
  }
});

textArea3.addEventListener('input', function() {
  const caracteresRestantes = 250 - textArea3.value.length;
  contador3.textContent = `Caracteres restantes: ${caracteresRestantes}`;

  if (caracteresRestantes < 0) {
    textArea3.value = textArea3.value.substring(0, 250);
    contador3.textContent = 'Límite de caracteres alcanzado';
  }
});


</script>
