<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('administracion_medicamentos', function (Blueprint $table) {
            $table->id (); #id de receta
            $table->unsignedBigInteger("id_paciente");
            $table->unsignedBigInteger("id_medico");
            $table->String("nombre_paciente"); #nombre paciente
            $table->String("nombre_doctor");
            $table->String("medicamentos"); #id del doctor
            $table->String("dosis");
            $table->String("frecuencia_tratamiento");

            $table->foreign("id_paciente")-> references ("id")-> on ("pacientes");
            $table->foreign("id_medico")-> references ("id")-> on ("medicos");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administracion_medicamentos');
    }
};
