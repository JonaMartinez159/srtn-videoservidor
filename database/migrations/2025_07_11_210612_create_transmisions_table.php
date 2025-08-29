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
        Schema::create('transmisions', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->time('hora_llegada')->nullable();
            $table->time('hora_inicio')->nullable();
            $table->string('nombre', '120');
            $table->text('descripcion');
            $table->string('tipo', '25');
            $table->string('personal_convocado', '150')->nullable();
            $table->string('requerimientos', '150')->nullable();
            $table->string('ubicacion', '10')->nullable();
            $table->text('fotografias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transmisions');
    }
};
