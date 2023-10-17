<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_facturas', function (Blueprint $table) {
            $table->id('codigo_factura');
            $table->integer('numero_factura');
            $table->foreign('codigo');
            $table->integer('codigo');
            $table->integer('codigo');
            $table->integer('codigo');
            $table->integer('codigo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_facturas');
    }
};
