<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\HistoriaClinicaController;
use App\Http\Controllers\PacienteController;

Route::get('/', function () {
    return view('inicio');
});

Route::resource('/medicos', MedicoController::class);
Route::resource('/pacienteee', PacienteController::class);
Route::resource('/Hpaciente', HistoriaClinicaController::class);

