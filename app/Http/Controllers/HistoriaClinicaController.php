<?php

namespace App\Http\Controllers;

use App\Models\Historia_clinica;
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

        return view('HistoriaClinica.index', compact('HistoriaClin') );
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Historia_clinica $historia_clinica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Historia_clinica $historia_clinica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Historia_clinica $historia_clinica)
    {
        //
    }
}
