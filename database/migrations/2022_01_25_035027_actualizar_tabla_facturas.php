<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ActualizarTablaFacturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('facturas', function (Blueprint $table) {
            //
            $table->string('estado_de_devolucion');
            $table->string('fecha_de_devolucion');
            $table->string('pago_total');
            $table->string('Pagado');
            $table->string('pago_pendiente');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('facturas', function (Blueprint $table) {
            //
        });
    }
}
