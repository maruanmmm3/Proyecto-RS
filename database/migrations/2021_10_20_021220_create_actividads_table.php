<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->id();
            $table->string('institucion');
            $table->float('cant_ben');
            $table->float('cant_vol');
            $table->float('cant_hor');
            $table->float('cant_horeje');
            $table->string('area');
            $table->date('fech_inicio');
            $table->date('fech_fin');
            $table->unsignedBigInteger('navidad_id');
            $table->foreign('navidad_id')->references('id')->on('navidads')->onDelete('cascade');
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
        Schema::dropIfExists('actividads');
    }
}
