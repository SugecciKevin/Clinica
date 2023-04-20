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
        Schema::create('pacientes', function (Blueprint $table) {
            $table-> integer ("id_paciente");
            $table-> String ("nombre");
            $table-> date ("fecha_nacimiento");
            $table-> String ("dirección");
            $table-> String ("teléfono");
            $table->  String ("contacto_emergencia");
            $table->primary(['id_paciente']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
