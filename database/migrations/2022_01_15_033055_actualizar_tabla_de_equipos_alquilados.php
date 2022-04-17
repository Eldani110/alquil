<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ActualizarTablaDeEquiposAlquilados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('equipos_alquilados', function (Blueprint $table) {
            $table->string('id_factura');
            $table->string('equipo');
            $table->string('unidades');
            $table->string('valor_diario');
            $table->string('fecha_de_entrega');
            $table->string('fecha_de_devolucion');
            $table->string('pago_final');
            $table->string('id_negocio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('equipos_alquilados', function (Blueprint $table) {
            //
            $table->dropColumn('id_factura');
            $table->dropColumn('equipo');
            $table->dropColumn('unidades');
            $table->dropColumn('valor_diario');
            $table->dropColumn('fecha_de_entrega');
            $table->dropColumn('fecha_de_devolucion');
            $table->dropColumn('pago_final');
            $table->dropColumn('id_negocio');
        });
    }
}
