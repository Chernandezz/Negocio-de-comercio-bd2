<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFACTURATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('FACTURA', function (Blueprint $table) {
            $table->foreign(['cedulaCliente'], 'FK_FACTURA.cedulaCliente')->references(['cedulaCliente'])->on('CLIENTE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('FACTURA', function (Blueprint $table) {
            $table->dropForeign('FK_FACTURA.cedulaCliente');
        });
    }
}
