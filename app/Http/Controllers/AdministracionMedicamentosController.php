<?php

namespace App\Http\Controllers;

use App\Models\Administracion_medicamentos;
use Illuminate\Http\Request;
use App\Models\Medicamento;
use App\Models\Paciente;
use App\Models\Medico;

class AdministracionMedicamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Administracion_medicamentos=Administracion_medicamentos::all();
        return view('Receta.index',["Administracion_medicamentos"=>$Administracion_medicamentos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Medicamento=Medicamento::all();
        $Paciente=Paciente::all();
        $Medico=Medico::all();
        return view('Receta.alta', [
            "Medicamento" => $Medicamento,
            "Paciente" => $Paciente,
            "Medico" => $Medico
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevaReceta = new Administracion_medicamentos;

        #los separo para tener las llaves foraneas
        $selPac = explode('-', $request->selPac);
        $idPaciente = $selPac[0]; #llave foranea
        $nombrePaciente = $selPac[1];

        $selMed = explode('-',$request->selMed);
        $idMedico = $selMed[0]; #llave foranea
        $nombreMedico = $selMed[1];

        $nuevaReceta->id_paciente=$idPaciente;
        $nuevaReceta->id_medico= $idMedico;
        $nuevaReceta->nombre_paciente=$nombrePaciente;
        $nuevaReceta->nombre_doctor =$nombreMedico;
        $nuevaReceta->medicamentos =$request->medicamento;
        $nuevaReceta->dosis=$request->dosis;
        $nuevaReceta->frecuencia_tratamiento=$request->frecuencia;

        $nuevaReceta->Save();
        return redirect('/receta');
    }

    /**
     * Display the specified resource.
     */
    public function show(Administracion_medicamentos $administracion_medicamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Administracion_medicamentos=Administracion_medicamentos::findorfail($id);
        return view('Receta.Actualizacion',['Administracion_medicamentos'=>$Administracion_medicamentos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $nuevaRec = Administracion_medicamentos::findorfail($id);

        $nuevaRec->dosis=$request->dosis1;
        $nuevaRec->frecuencia_tratamiento=$request->frecuencia1;

        $nuevaRec->Save();
        return redirect('/receta');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Administracion_medicamentos::destroy($id);
        return redirect('/receta');
    }
}
