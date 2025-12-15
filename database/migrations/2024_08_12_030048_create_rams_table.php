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
        Schema::create('rams', function (Blueprint $table) {
            $table->id('idRam');
            $table->string('Nombre_del_producto')->unique();
            $table->string('Marca');
            $table->string('Tegnologia_de_la_memoria_ram');
            $table->string('Tamaño_de_la_memoria');
            $table->string('Velocidad_de_memoria');
            $table->string('Dispositivos_compatibles');
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
        Schema::dropIfExists('rams');
    }
};
