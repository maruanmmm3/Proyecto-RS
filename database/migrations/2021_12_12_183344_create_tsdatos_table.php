<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTsdatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tsdatos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_egresados');
            $table->float('egresados_egresados');
            $table->float('ingresados_egresados');
            $table->string('nombre_retirados');
            $table->float('retirados_retirados');
            $table->float('ingresados_retirados');
            $table->string('nombre_mujer');
            $table->float('cantidad_mujer');
            $table->string('nombre_mujerformada');
            $table->float('cantidad_mujerformada');
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
        Schema::dropIfExists('tsdatos');
    }
}
