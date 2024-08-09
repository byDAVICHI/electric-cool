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
        Schema::create('finanzas', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_transaccion')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('monto')->nullable();
            $table->string('fecha')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finanzas');
    }
};
