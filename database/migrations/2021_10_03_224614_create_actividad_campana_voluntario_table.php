<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadCampanaVoluntarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_campana_voluntario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('actividad_campaña_id');
            $table->unsignedBigInteger('voluntario_id');

            $table->foreign('actividad_campaña_id')->references('id')->on('actividad_campañas')->onDelete('cascade');
            $table->foreign('voluntario_id')->references('id')->on('voluntarios')->onDelete('cascade');
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
        Schema::dropIfExists('actividad_campana_voluntario');
    }
}
