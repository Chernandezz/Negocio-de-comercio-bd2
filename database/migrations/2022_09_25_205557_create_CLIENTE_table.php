<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCLIENTETable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CLIENTE', function (Blueprint $table) {
            $table->string('cedulaCliente', 15)->primary();
            $table->string('nombreCliente', 30);
            $table->string('direccionCliente', 40)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CLIENTE');
    }
}
