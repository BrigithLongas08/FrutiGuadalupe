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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('id_pedido');
            $table->unsignedBigInteger('id_usuario')->nullable()->index();
            $table->timestamp('fecha_pedido')->useCurrent();
            $table->enum('estado', ['pendiente', 'enviado', 'entregado', 'cancelado'])->default('pendiente');
            $table->decimal('total', 10, 2)->default(0);
            $table->ipAddress('ip')->nullable();
            $table->timestamps();
            $table->softDeletes();
        
            $table->foreign('id_usuario')->references('id_usuario')->on('users')->onDelete('set null');
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
