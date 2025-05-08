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
        Schema::create('historial_stock', function (Blueprint $table) {
            $table->id('id_historial');
            $table->unsignedBigInteger('id_producto')->nullable()->index();
            $table->timestamp('fecha')->useCurrent();
            $table->integer('cantidad_cambiada');
            $table->enum('tipo_cambio', ['entrada', 'salida']);
            $table->timestamps();
        
            $table->foreign('id_producto')->references('id_producto')->on('products')->onDelete('set null');
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historials');
    }
};
