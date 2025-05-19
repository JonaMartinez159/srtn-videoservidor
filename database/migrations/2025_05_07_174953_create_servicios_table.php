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
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('aplicacion', '25')->nullable(false);
            $table->string('servicio_key', '40')->nullable(false);
            $table->string('stream_key', '40')->nullable(false);
            $table->string('nombre', '50')->nullable(false);
            $table->text('descripcion')->nullable();
            $table->string('estado', '1')->nullable();
            $table->string('ip_ultima_publicacion', '25')->nullable();
            $table->integer('vistas_actuales')->nullable();
            $table->integer('vistas_totales')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
