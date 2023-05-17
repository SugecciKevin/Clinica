<?php

use App\Http\Controllers\MedicamentoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;

Route::get('/', function () {
    return view('inicio');
});

Route::resource('/medicos', MedicoController::class);
Route::resource('/paciente', PacienteController::class);
Route::resource('/medicamentos', MedicamentoController::class);

