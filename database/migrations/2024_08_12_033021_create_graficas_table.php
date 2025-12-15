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
        Schema::create('graficas', function (Blueprint $table) {
            $table->id('idTarjetaGrafica');
            $table->string('Nombre_del_producto')->unique();
            $table->string('Coprocesador');
            $table->string('Marca');
            $table->string('Ram_para_graficos');
            $table->text('Descripcion');
            $table->string('Portada');
            
            $table->unsignedBigInteger('estatusentidad_id')->unsigned();
            $table->foreign('estatusentidad_id')->references('idEstatusEntidad')->on('estatus_entidads')->onDelete('cascade');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('graficas');
    }
};
