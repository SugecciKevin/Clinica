<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Paciente = Paciente::all();
        return view("paciente.index",["Paciente" =>$Paciente]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("paciente.alta");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $nuevoPaciente = new Paciente();
        $nuevoPaciente->id=$request->id;
        $nuevoPaciente->nombre=$request->nombre;
        $nuevoPaciente->fecha_nacimiento=$request->fecha;
        $nuevoPaciente->dirección=$request->direccion;
        $nuevoPaciente->teléfono=$request->telefono;
        $nuevoPaciente->contacto_emergencia=$request->contacto;

        $nuevoPaciente->Save();
        return redirect('/pacienteee');
    }

    /**
     * Display the specified resource.
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        //
        $Paciente=Paciente::findorfail($id);
        return view('Paciente.actualizar',['Paciente' => $Paciente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(request $request, string $id)
    {
        //

        $nuevoPaciente = Paciente::findorfail($id);
        $nuevoPaciente->nombre=$request->nombre;
        $nuevoPaciente->fecha_nacimiento=$request->fecha;
        $nuevoPaciente->dirección=$request->direccion;
        $nuevoPaciente->teléfono=$request->telefono;
        $nuevoPaciente->contacto_emergencia=$request->contacto;

        $nuevoPaciente->Save();
        return redirect('/pacienteee');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
    Paciente::destroy($id);
    $Paciente = Paciente::all(); // Obtener todos los pacientes después de eliminar uno

    return view("paciente.index", compact('Paciente'));
    }

}
