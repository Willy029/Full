<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('n_Empleado');
            $table->string('Folio_Pagare_y_Carta_Responsiva');
            $table->string('Nombre_del_Responsable_del_Equipo');
            $table->string('Departamento');
            $table->string('Equipo');
            $table->string('Descripcion');
            $table->string('Marca');
            $table->string('Modelo');
            $table->string('n_Telefono');
            $table->string('Contraseña_del_dispositivo_celular');
            $table->string('IMEI');
            $table->string('Nombre_del_Dispositivo');
            $table->string('n_Serie');
            $table->string('HDD');
            $table->string('SSD');
            $table->string('Contraseña_del_dispositivo');
            $table->string('Precio_a_pagar_en_caso_de_daño_directo');
            $table->string('Fecha_de_Entrega');
            $table->string('Fecha_de_Devolucion');
            $table->string('QR_Code');
            $table->string('Valor_QR');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
