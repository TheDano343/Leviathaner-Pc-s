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
        Schema::create('refrigeracions', function (Blueprint $table) {
            $table->id('idSistema_refrigeracion');
            $table->string('Nombre_del_producto')->unique();
            $table->string('Dimensiones_del_producto');
            $table->string('Voltaje');
            $table->string('Metodo_de_enfriamiento');
            $table->string('Dispositivos_compatibles');
            $table->string('Nivel_de_ruido');
            $table->string('Material');
            $table->string('Velocidad_maxima_de_rotacion');
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
        Schema::dropIfExists('refrigeracions');
    }
};
