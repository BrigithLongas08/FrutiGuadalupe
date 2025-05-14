<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('id_pedido');
            $table->unsignedBigInteger('user_id')->nullable()->index(); // Relación con 'users.id'
            $table->timestamp('fecha_pedido')->useCurrent();
            $table->enum('estado', ['pendiente', 'enviado', 'entregado', 'cancelado'])->default('pendiente');
            $table->decimal('total', 10, 2)->default(0);
            $table->ipAddress('ip')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
