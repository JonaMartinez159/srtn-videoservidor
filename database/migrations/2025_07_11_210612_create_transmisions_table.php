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
            $table->string('tipo', '25');
            $table->date('fecha');
            $table->time('hora_llegada')->nullable();
            $table->time('hora_inicio')->nullable();
            $table->string('lugar', '100');
            $table->text('descripcion');
            $table->text('nota')->nullable();
            $table->string('responsable', '30');
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
