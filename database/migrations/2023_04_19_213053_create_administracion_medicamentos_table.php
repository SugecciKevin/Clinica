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
            $table->id ();
            $table->unsignedBigInteger("id_paciente");
            $table->unsignedBigInteger("id_medicamento");
            $table->String("dosis");
            $table->String("frecuencia_tratamiento");
            $table->String("duración_tratamiento");

            $table->foreign("id_paciente")-> references ("id")-> on ("pacientes");
            $table->foreign("id_medicamento")-> references ("id")-> on ("medicamentos");
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
