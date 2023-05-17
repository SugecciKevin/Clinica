<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicamentos=medicamento::all();
        return view('Medicamentos.index',["medicamentos"=>$medicamentos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Medicamentos.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevoMedicamento = new Medicamento();
        $nuevoMedicamento->nombre_medicamento=$request->Nombre;
        $nuevoMedicamento->descripción=$request->Descripción;
        $nuevoMedicamento->fabricante=$request->Fabricante;

        $nuevoMedicamento->Save();
        return redirect('/medicamentos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicamento $medicamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $EditarMed=Medicamento::findorfail($id);
        return view('Medicamentos.actualizacion',['medicamentos' => $EditarMed]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nuevoMedicamento = Medicamento::findorfail($id);
        $nuevoMedicamento->nombre_medicamento=$request->Nombre;
        $nuevoMedicamento->descripción=$request->Descripción;
        $nuevoMedicamento->fabricante=$request->Fabricante;

        $nuevoMedicamento->Save();
        return redirect('/medicamentos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Medicamento::destroy($id);
        return redirect('/medicamentos');
    }
}
