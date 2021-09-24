<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ActualizarTablaDeObra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('obras', function (Blueprint $table) {
            $table->string('id_negocio');
            $table->string('id_obra');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('obras', function (Blueprint $table) {
            $table->dropColumn('id_negocio');
            $table->dropColumn('id_obra');
        });
    }
}
