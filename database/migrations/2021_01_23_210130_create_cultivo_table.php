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
            $table->double('costosMantenimiento')->nullable();
            $table->string('intensidad')->nullable();
            $table->string('estado')->nullable();
            $table->double('oxigeno')->nullable();
            $table->double('temperatura')->nullable();
            $table->double('ph')->nullable();
            $table->double('amonio')->nullable();
            $table->double('nitritos')->nullable();
            $table->double('dioxidoCarbono')->nullable();
            $table->double('fosfatos')->nullable();
            $table->double('cloruros')->nullable();
            $table->double('sulfatos')->nullable();
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


