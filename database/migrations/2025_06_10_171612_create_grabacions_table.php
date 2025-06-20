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
        Schema::create('grabacions', function (Blueprint $table) {
            $table->id();
            $table->string('path', '100')->nullable(false);
            $table->string('streamkey', '50')->nullable(false);
            $table->string('programa', '50')->nullable(false);
            $table->string('nombre', '50')->nullable();
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grabacions');
    }
};
