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
        Schema::create('madres', function (Blueprint $table) {
            $table->id('idTarjetas_Madre');
            $table->string('Nombre_del_producto')->unique();
            $table->string('Marca');
            $table->string('Enchufe_de_CPU');
            $table->string('Dispositivos_Compatibles');
            $table->string('Tecnologia_de_la_memoria_RAM');
            $table->string('Procesadores_Compatibles');
            $table->string('Tipo_de_circuitos_integrados');
            $table->string('Velocidad_del_reloj_de_la_memoria');
            $table->string('Nombre_del_modelo');
            $table->string('Capacidad_de_almacenamiento_de_la_memoria');
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
        Schema::dropIfExists('madres');
    }
};
