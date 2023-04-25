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
        $nuevoMedico->id_médico=$request->ID;
        $nuevoMedico->nombre_médico=$request->Nombre;
        $nuevoMedico->especialidad=$request->Especiealidad;
        $nuevoMedico->información_contacto=$request->Contacto;
        $nuevoMedico->disponibilidad=$request->Disponibilidad;

        $nuevoMedico->Save();
        return redirect('/Medicos');
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
    public function edit(Medico $medico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medico $medico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medico $medico)
    {
        //
    }
}
