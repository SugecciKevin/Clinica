<?php

namespace App\Http\Controllers;

use App\Models\Historia_clinica;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HistoriaClinicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {
        //
        $texto = trim($request->get('texto'));//con trim borramos los espacios en blanco



        $HistoriaClin = DB::table('historia_clinicas')
            ->where('id_paciente','=', $texto)
            ->get();


        return view('HistoriaClinica.index', ["HistoriaClin"=>$HistoriaClin  ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Paciente = Paciente::All();
        return view('HistoriaClinica.alta',["Paciente"=>$Paciente]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevoHistorialCliente = new Historia_clinica();
        $selPac = explode('-', $request->selPac);
        $nuevoHistorialCliente->id_paciente= $selPac[0]; #llave foranea
        $nuevoHistorialCliente->nombre_paciente= $selPac[1];



        $nuevoHistorialCliente->diagnósticos=$request->Diagnosticos;
        $nuevoHistorialCliente->tratamientos=$request->tratamientos;
        $nuevoHistorialCliente->medicamentos_recetados=$request->medicamentos_recetados;
        $nuevoHistorialCliente->resultados_pruebas=$request->resultados_pruebas;

        $nuevoHistorialCliente->Save();
        return redirect('/Hpaciente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Historia_clinica $historia_clinica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $HistoriaClin=Historia_clinica::findorfail($id);
        return view('HistoriaClinica.actualizar',['HistoriaClin' => $HistoriaClin]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $nuevoHistorialCliente = Historia_clinica::findorfail($id);
        $nuevoHistorialCliente->id_paciente=$request->idpaciente;
        $nuevoHistorialCliente->nombre_paciente=$request->nombre;
        $nuevoHistorialCliente->diagnósticos=$request->Diagnosticos;
        $nuevoHistorialCliente->tratamientos=$request->tratamientos;
        $nuevoHistorialCliente->medicamentos_recetados=$request->medicamentos_recetados;
        $nuevoHistorialCliente->resultados_pruebas=$request->resultados_pruebas;

        $nuevoHistorialCliente->Save();
        return redirect('/Hpaciente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        Historia_clinica::destroy($id);
        $HistoriaClin = Historia_clinica::all(); // Obtener todos los pacientes después de eliminar uno

        return view("HistoriaClinica.index", compact('HistoriaClin'));
    }
}
