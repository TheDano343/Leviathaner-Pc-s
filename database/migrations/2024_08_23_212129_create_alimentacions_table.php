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
        Schema::create('alimentacions', function (Blueprint $table) {
            $table->id('idAlimentacion');
            $table->string('Nombre_producto')->unique();
            $table->string('Nombre_modelo');
            $table->string('Marca');
            $table->string('Dispositivos_compatibles');
            $table->string('Tipo_conector');
            $table->string('Potencia_de_salida');
            $table->string('Factor_de_forma');
            $table->string('Voltaje');
            $table->string('Metodo_de_enfriamiento');
            $table->string('Dimensiones_de_articulo');
            $table->string('Largo_y_ancho');
            $table->string('Peso_del_producto');
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
        Schema::dropIfExists('alimentacions');
    }
};
