<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadPonenteVoluntarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_ponente_voluntario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('actividad_ponente_id');
            $table->unsignedBigInteger('voluntario_id');
            

            $table->foreign('actividad_ponente_id')->references('id')->on('actividad_ponentes')->onDelete('cascade');
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
        Schema::dropIfExists('actividad_ponente_voluntario');
    }
}
