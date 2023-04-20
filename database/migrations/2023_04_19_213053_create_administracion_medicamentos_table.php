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
            $table->integer ("id_administración_medicamentos");
            $table->integer("id_paciente");
            $table->integer("id_medicamento");
            $table->String("dosis");
            $table->String("frecuencia_tratamiento");
            $table->String("duración_tratamiento");

            $table->primary(['id_administración_medicamentos']);
            $table->foreign("id_paciente")-> references ("id_paciente")-> on ("pacientes");
            $table->foreign("id_medicamento")-> references ("id_medicamento")-> on ("medicamentos");
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
