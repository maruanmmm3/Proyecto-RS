<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonacionProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donacion_producto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('donacion_id');
            $table->unsignedBigInteger('producto_id');

            $table->foreign('donacion_id')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('producto_id')->references('id')->on('donacions')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donacion_producto');
    }
}
