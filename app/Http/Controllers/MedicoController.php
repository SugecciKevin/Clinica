<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;


class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicos=medico::all();
        return view('Medicos.index',["medicos"=>$medicos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Medicos.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevoMedico = new Medico();
        $nuevoMedico->nombre_médico=$request->Nombre;
        $nuevoMedico->especialidad=$request->Especiealidad;
        $nuevoMedico->información_contacto=$request->Contacto;
        $nuevoMedico->disponibilidad=$request->Disponibilidad;

        $nuevoMedico->Save();
        return redirect('/medicos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Medico $medico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $EditarMed=Medico::findorfail($id);
        return view('Medicos.actualizacion',['medicos' => $EditarMed]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nuevoMedico = Medico::findorfail($id);
        $nuevoMedico->nombre_médico=$request->Nombre;
        $nuevoMedico->especialidad=$request->Especiealidad;
        $nuevoMedico->información_contacto=$request->Contacto;
        $nuevoMedico->disponibilidad=$request->Disponibilidad;

        $nuevoMedico->Save();
        return redirect('/medicos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Medico::destroy($id);
        return redirect('/medicos');
    }
}
