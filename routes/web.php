<?php

use App\Http\Controllers\MedicamentoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\HistoriaClinicaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\AdministracionMedicamentosController;

Route::get('/', function () {
    return view('inicio');
});

Route::resource('/medicos', MedicoController::class);
Route::resource('/paciente', PacienteController::class);
Route::resource('/receta', AdministracionMedicamentosController::class);
Route::resource('/medicamentos', MedicamentoController::class);
Route::resource('/pacienteee', PacienteController::class);
Route::resource('/Hpaciente', HistoriaClinicaController::class);

