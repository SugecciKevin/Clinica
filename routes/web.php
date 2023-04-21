<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicoController;

Route::get('/', function () {
    return view('base');
});

Route::resource('/medicos', MedicoController::class);

