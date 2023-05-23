<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;
use App\Models\Medico;
use App\Models\Paciente;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citas = cita::all();
        return view('Citas.index', ["citas" => $citas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $medicosDisponibles = Medico::all();
        $pacientesDisponibles = Paciente::all();

        return view('Citas.alta', [
            'medicosDisponibles' => $medicosDisponibles,
            'pacientesDisponibles' => $pacientesDisponibles,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevaCita = new Cita();
        $nuevaCita->fecha_hora_cita = $request->fecha_hora_cita;
        $nuevaCita->id_médico = $request->id_medico;
        $nuevaCita->id_paciente = $request->id_paciente;

        $nuevaCita->save();
        return redirect('/citas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $EditarCita = Cita::findorfail($id);
        $medicosDisponibles = Medico::all();
        $pacientesDisponibles = Paciente::all();

        return view('Citas.actualizacion', [
            'citas' => $EditarCita,
            'medicosDisponibles' => $medicosDisponibles,
            'pacientesDisponibles' => $pacientesDisponibles,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nuevaCita = Cita::findorfail($id);
        $nuevaCita->fecha_hora_cita = $request->fecha_hora_cita;
        $nuevaCita->id_médico = $request->id_medico;
        $nuevaCita->id_paciente = $request->id_paciente;

        $nuevaCita->Save();
        return redirect('/citas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cita::destroy($id);
        return redirect('/citas');
    }
}
