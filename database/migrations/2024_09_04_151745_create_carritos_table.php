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
        Schema::create('carritos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_producto');
            $table->unsignedBigInteger('equipos_id')->default(0);
            $table->foreign('equipos_id')->references('idEquipos')->on('equipos')->onDelete('cascade');


            $table->integer('quantity')->default(0);
            $table->unsignedBigInteger('users_id')->default(0);
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');

            

            $table->float('Precio');          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
