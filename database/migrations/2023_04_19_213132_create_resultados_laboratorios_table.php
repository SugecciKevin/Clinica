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
        Schema::create('resultados_laboratorios', function (Blueprint $table) {
            $table->id ();
            $table->unsignedBigInteger ("id_paciente");
            $table->String ("análisis_sangre_orina_radiografías");
            $table->String ("Descripcion");

            $table->foreign ("id_paciente")-> references ("id")-> on ("pacientes");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultados_laboratorios');
    }
};
