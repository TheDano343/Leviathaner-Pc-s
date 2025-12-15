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
        Schema::create('procesadors', function (Blueprint $table) {
            $table->id('idProcesador');
            $table->string('Nombre_del_producto')->unique();
            $table->string('Marca');
            $table->string('Fabricante_del_CPU');
            $table->string('Modelo_del_CPU');
            $table->string('Velocidad_del_CPU');
            $table->string('Enchufe_del_CPU');
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
        Schema::dropIfExists('procesadors');
    }
};
