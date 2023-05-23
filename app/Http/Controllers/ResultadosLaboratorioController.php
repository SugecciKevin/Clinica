<?php

namespace App\Http\Controllers;

use App\Models\Resultados_laboratorio;
use Illuminate\Http\Request;
use App\Models\Paciente;

class ResultadosLaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $resultadoslab=Resultados_laboratorio::all();
        return view('Resultados.index',["resultadoslab"=>$resultadoslab]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pacientesDisponibles = Paciente::all();
        return view('Resultados.alta',[
            'pacientesDisponibles' =>  $pacientesDisponibles,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevoResultado = new Resultados_laboratorio();
        $id_paciente = explode('-', $request->id_paciente);
        $id_pac = $id_paciente[1];
        $nombre_pac = $id_pac[0];

        $nuevoResultado->id_paciente=$id_pac;
        $nuevoResultado->Nombre_paciente = $nombre_pac;
        $nuevoResultado->análisis_sangre_orina_radiografías=$request->analisis;
        $nuevoResultado->Descripcion=$request->Descripcion;

        $nuevoResultado->Save();
        return redirect('/resLab');
    }

    /**
     * Display the specified resource.
     */
    public function show(Resultados_laboratorio $resLab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $EditarRes=Resultados_laboratorio::findorfail($id);
        return view('Resultados.actualizacion',['resultadoslab' => $EditarRes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nuevoResultado = Resultados_laboratorio::findorfail($id);
        $nuevoResultado->id_paciente=$request->id_paciente;
        $nuevoResultado->análisis_sangre_orina_radiografías=$request->análisis_sangre_orina_radiografías;
        $nuevoResultado->Descripcion=$request->Descripcion;

        $nuevoResultado->Save();
        return redirect('/resLab');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Resultados_laboratorio::destroy($id);
        return redirect('/resLab');
    }
}
