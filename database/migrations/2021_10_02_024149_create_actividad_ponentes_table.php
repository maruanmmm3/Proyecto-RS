<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadPonentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_ponentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('detalle');
            $table->date('fecha');
            $table->enum('tipo_charla', ['profecionales', 'motivacionales','liderasgo']);
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
        Schema::dropIfExists('actividad_ponentes');
    }
}
