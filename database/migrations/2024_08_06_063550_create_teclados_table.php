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
        Schema::create('teclados', function (Blueprint $table) {
            $table->id('idTeclado');
            $table->string('Nombre_del_producto')->unique();
            $table->string('Dispositivos_compatibles');
            $table->string('Tegnologia_de_conectividad');
            $table->string('Descripcion_del_teclado');
            $table->string('Usos_recomendados_para_producto');
            $table->string('Caracteristica_especial');
            $table->string('Color');
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
        Schema::dropIfExists('teclados');
    }
};
