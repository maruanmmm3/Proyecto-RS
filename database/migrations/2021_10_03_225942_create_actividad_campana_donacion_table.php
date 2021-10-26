<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadCampanaDonacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_campana_donacion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('actividad_campaña_id');
            $table->unsignedBigInteger('donacion_id');

            $table->foreign('actividad_campaña_id')->references('id')->on('actividad_campañas')->onDelete('cascade');
            $table->foreign('donacion_id')->references('id')->on('donacions')->onDelete('cascade');

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
        Schema::dropIfExists('actividad_campana_donacion');
    }
}
