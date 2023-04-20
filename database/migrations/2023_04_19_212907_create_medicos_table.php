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
        Schema::create('medicos', function (Blueprint $table) {
            $table -> integer ("id_médico");
            $table -> String ("nombre_médico");
            $table -> String ("especialidad");
            $table -> String ("información_contacto");
            $table -> String ("disponibilidad");
            $table->primary(['id_médico']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicos');
    }
};
