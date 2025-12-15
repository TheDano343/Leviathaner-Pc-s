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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id('idEquipos');
            $table->string('Nombre_producto')->unique();
            $table->string('Tipo_de_tarjeta_grafica');

            $table->unsignedBigInteger('procecadores_id')->unsigned();
            $table->unsignedBigInteger('gabinetes_id')->unsigned();
            $table->unsignedBigInteger('pantallas_id')->unsigned();
            $table->unsignedBigInteger('teclados_id')->unsigned();
            $table->unsignedBigInteger('mouse_id')->unsigned();
            $table->unsignedBigInteger('rams_id')->unsigned();
            $table->unsignedBigInteger('graficas_id')->unsigned();
            $table->unsignedBigInteger('madres_id')->unsigned();
            $table->unsignedBigInteger('refrigeracion_id')->unsigned();
            $table->unsignedBigInteger('alimentaciones_id')->unsigned();
            $table->unsignedBigInteger('cpu_id')->unsigned();
            $table->unsignedBigInteger('categorias_id')->unsigned();
            $table->unsignedBigInteger('estatusentidad_id')->unsigned();

            
            $table->foreign('procecadores_id')->references('idProcesador')->on('procesadors')->onDelete('cascade');
            $table->foreign('gabinetes_id')->references('idGabinetes')->on('gabinetes')->onDelete('cascade');
            $table->foreign('pantallas_id')->references('idPantallas')->on('pantallas')->onDelete('cascade');
            $table->foreign('teclados_id')->references('idTeclado')->on('teclados')->onDelete('cascade');
            $table->foreign('mouse_id')->references('idMouse')->on('mice')->onDelete('cascade');
            $table->foreign('rams_id')->references('idRam')->on('rams')->onDelete('cascade');
            $table->foreign('graficas_id')->references('idTarjetaGrafica')->on('graficas')->onDelete('cascade');
            $table->foreign('madres_id')->references('idTarjetas_Madre')->on('madres')->onDelete('cascade');
            $table->foreign('refrigeracion_id')->references('idSistema_refrigeracion')->on('refrigeracions')->onDelete('cascade');
            $table->foreign('alimentaciones_id')->references('idAlimentacion')->on('alimentacions')->onDelete('cascade');
            $table->foreign('cpu_id')->references('idCpu')->on('cpus')->onDelete('cascade');
            $table->foreign('categorias_id')->references('idCategoria')->on('categorias')->onDelete('cascade');
            $table->foreign('estatusentidad_id')->references('idEstatusEntidad')->on('estatus_entidads')->onDelete('cascade');


            $table->text('Descripcion');
            $table->float('Precio');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};
