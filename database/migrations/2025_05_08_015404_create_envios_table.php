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
        Schema::create('envios', function (Blueprint $table) {
            $table->id('id_envio');
            $table->unsignedBigInteger('id_pedido')->index();
            $table->timestamp('fecha_envio')->nullable()->useCurrent();
            $table->string('direccion_envio', 150);
            $table->string('estado_envio', 50)->default('pendiente'); 
            $table->string('metodo_envio', 100)->nullable(); 
            $table->string('numero_guia', 100)->nullable(); 
            $table->timestamps();
            
            $table->foreign('id_pedido')->references('id_pedido')->on('pedidos')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('envios');
    }
};
