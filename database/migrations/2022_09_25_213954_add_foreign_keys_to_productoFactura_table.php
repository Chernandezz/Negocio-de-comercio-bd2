<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductoFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productoFactura', function (Blueprint $table) {
            $table->foreign(['idProducto'], 'FK_PRODUCTOFACTURA.idProducto')->references(['idProducto'])->on('producto');
            $table->foreign(['idFactura'], 'FK_PRODUCTOFACTURA.idFactura')->references(['idFactura'])->on('factura');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productoFactura', function (Blueprint $table) {
            $table->dropForeign('FK_PRODUCTOFACTURA.idProducto');
            $table->dropForeign('FK_PRODUCTOFACTURA.idFactura');
        });
    }
}
