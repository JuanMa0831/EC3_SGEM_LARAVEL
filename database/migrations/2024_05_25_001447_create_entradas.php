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
        Schema::create('entradas', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('concierto_id')->constrained('conciertos');
            //$table->foreignId('cliente_id')->constrained('clientes');
            //$table->foreign('concierto_id')->references('id')->on('conciertos');
            //$table->foreign('cliente_id')->references('id')->on('clientes');
            $table->decimal('precio', 8, 2);
            $table->date('fecha_compra');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entradas');
    }
};
