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
        Schema::create('mice', function (Blueprint $table) {
            $table->id('idMouse');
            $table->string('Nombre_del_producto')->unique();
            $table->string('Marca');
            $table->string('Tipo_de_conectividad');
            $table->string('Tecnologia_de_deteccion_de_movimiento');
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
        Schema::dropIfExists('mice');
    }
};
