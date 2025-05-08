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
        Schema::create('detalles_pedido', function (Blueprint $table) {
            $table->id('id_detalle');
            $table->unsignedBigInteger('id_pedido')->index();
            $table->unsignedBigInteger('id_producto')->index();
            $table->integer('cantidad')->check('cantidad > 0');
            $table->decimal('precio_unitario', 10, 2)->check('precio_unitario >= 0');
            $table->timestamps();
        
            $table->foreign('id_pedido')->references('id_pedido')->on('pedidos')->onDelete('cascade');
            $table->foreign('id_producto')->references('id_producto')->on('products')->onDelete('restrict');
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles-_pedidos');
    }
};
