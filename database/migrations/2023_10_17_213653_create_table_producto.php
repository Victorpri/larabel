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
        Schema::create('producto', function (Blueprint $table) {
            $table->id('id_producto');
            $table->integer('codigo');
            $table->foreignId('id_categoria', 50);
            $table->foreign("id_categoria")->references("id_categorias")->on("categorias");
            $table->foreignId('id_marca', 50);
            $table->foreign("id_marca")->references("id_marca")->on("marcas_fabricantes");
            $table->enum('descripcion',['unidad','medida']);
            $table->string('disponible');
            $table->decimal('porcentaje_iva',4,2);
            $table->decimal('precio_unitario',20,2);
            $table->string('stock');

            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
};
