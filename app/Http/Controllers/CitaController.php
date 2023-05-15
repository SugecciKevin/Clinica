<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citas=cita::all();
        return view('Citas.index',["citas"=>$citas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Citas.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevaCita = new Cita();
        $nuevaCita->fecha_hora_cita=$request->Fecha;
        $nuevaCita->id_médico=$request->Médico;
        $nuevaCita->id_paciente=$request->Paciente;
        
        $nuevaCita->Save();
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
        $EditarCita=Cita::findorfail($id);
        return view('Citas.actualizacion',['citas' => $EditarCita]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nuevaCita = new Cita();
        $nuevaCita->fecha_hora_cita=$request->Fecha;
        $nuevaCita->id_médico=$request->Médico;
        $nuevaCita->id_paciente=$request->Paciente;
        
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
