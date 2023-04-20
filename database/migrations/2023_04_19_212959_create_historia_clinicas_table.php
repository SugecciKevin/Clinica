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
        Schema::create('historia_clinicas', function (Blueprint $table) {
            $table->integer ("id_historia_clínica");
            $table->integer ("id_paciente");
            $table->String("diagnósticos");
            $table->String("tratamientos");
            $table->String("medicamentos_recetados");
            $table->String("resultados_pruebas");
            $table->primary(['id_historia_clínica']);
            $table->foreign ("id_paciente")-> references ("id_paciente")-> on ("pacientes");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historia_clinicas');
    }
};
