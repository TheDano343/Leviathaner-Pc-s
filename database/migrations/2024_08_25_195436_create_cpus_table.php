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
        Schema::create('cpus', function (Blueprint $table) {
            $table->id('idCpu');
            $table->string('Nombre_del_producto')->unique();
            $table->string('Fabricante_del_cpu');
            $table->string('Modelo_del_cpu');
            $table->string('Velocidad_del_cpu');
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
        Schema::dropIfExists('cpus');
    }
};
