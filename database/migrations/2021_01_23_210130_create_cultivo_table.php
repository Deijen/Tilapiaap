<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCultivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cultivo', function (Blueprint $table) {
            $table->bigIncrements('id_cultivo');
            //$table->unsignedBigInteger('piscicultor_id')->nullable(); //
            //$table->foreign('piscicultor_id')->references('id_piscicultor')->on('piscicultor')->nullable(); //llave foranea de piscicultor
            $table->unsignedBigInteger('tablaAlimentacion_id')->nullable(); //
            $table->foreign('tablaAlimentacion_id')->references('id_tablaAlimentacion')->on('tablaAlimentacion')->nullable();
            $table->integer('cantidadTilapias')->nullable();
            $table->integer('costosMantenimiento')->nullable();
            $table->string('intensidad')->nullable();
            $table->string('estado')->nullable();
            $table->integer('oxigeno')->nullable();
            $table->integer('temperatura')->nullable();
            $table->integer('ph')->nullable();
            $table->integer('amonio')->nullable();
            $table->integer('nitritos')->nullable();
            $table->integer('dioxidoCarbono')->nullable();
            $table->integer('fosfatos')->nullable();
            $table->integer('cloruros')->nullable();
            $table->integer('sulfatos')->nullable();
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
        Schema::dropIfExists('cultivo');
    }
}


