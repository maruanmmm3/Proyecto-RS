<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiados', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->float('arbol');
            $table->float('hombre');
            $table->float('mujer');
            $table->string('area');

            $table->unsignedBigInteger('sembrando_id');
            $table->foreign('sembrando_id')->references('id')->on('sembrandos')->onDelete('cascade');
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
        Schema::dropIfExists('beneficiados');
    }
}
