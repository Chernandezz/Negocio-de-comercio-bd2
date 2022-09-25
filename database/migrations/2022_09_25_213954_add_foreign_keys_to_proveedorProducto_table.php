<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProveedorProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proveedorProducto', function (Blueprint $table) {
            $table->foreign(['cedulaProveedor'], 'FK_PROVEEDORPRODUCTO.cedulaProveedor')->references(['cedulaProveedor'])->on('proveedor');
            $table->foreign(['idProducto'], 'FK_PROVEEDORPRODUCTO.idProducto')->references(['idProducto'])->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proveedorProducto', function (Blueprint $table) {
            $table->dropForeign('FK_PROVEEDORPRODUCTO.cedulaProveedor');
            $table->dropForeign('FK_PROVEEDORPRODUCTO.idProducto');
        });
    }
}
