<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPROVEEDORPRODUCTOTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('PROVEEDORPRODUCTO', function (Blueprint $table) {
            $table->foreign(['cedulaProveedor'], 'FK_PROVEEDORPRODUCTO.cedulaProveedor')->references(['cedulaProveedor'])->on('PROVEEDOR');
            $table->foreign(['idProducto'], 'FK_PROVEEDORPRODUCTO.idProducto')->references(['idProducto'])->on('PRODUCTO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('PROVEEDORPRODUCTO', function (Blueprint $table) {
            $table->dropForeign('FK_PROVEEDORPRODUCTO.cedulaProveedor');
            $table->dropForeign('FK_PROVEEDORPRODUCTO.idProducto');
        });
    }
}
