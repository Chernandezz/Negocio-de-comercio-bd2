<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPRODUCTOFACTURATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('PRODUCTOFACTURA', function (Blueprint $table) {
            $table->foreign(['idProducto'], 'FK_PRODUCTOFACTURA.idProducto')->references(['idProducto'])->on('PRODUCTO');
            $table->foreign(['idFactura'], 'FK_PRODUCTOFACTURA.idFactura')->references(['idFactura'])->on('FACTURA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('PRODUCTOFACTURA', function (Blueprint $table) {
            $table->dropForeign('FK_PRODUCTOFACTURA.idProducto');
            $table->dropForeign('FK_PRODUCTOFACTURA.idFactura');
        });
    }
}
