<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePROVEEDORPRODUCTOTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PROVEEDORPRODUCTO', function (Blueprint $table) {
            $table->string('cedulaProveedor', 15)->primary();
            $table->increments('idProducto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PROVEEDORPRODUCTO');
    }
}
