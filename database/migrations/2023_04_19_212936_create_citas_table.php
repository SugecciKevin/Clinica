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
        Schema::create('citas', function (Blueprint $table) {
            $table->integer ("id_cita");
            $table->date ("fecha_hora_cita");
            $table->integer ("id_médico");
            $table->integer ("id_paciente");

            $table->primary(['id_cita']);
            $table->foreign("id_médico")->references("id_médico")-> on ("medicos");
            $table->foreign("id_paciente")-> references("id_paciente")-> on ("pacientes");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
