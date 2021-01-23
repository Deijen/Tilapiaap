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
            $table->unsignedBigInteger('piscicultor_id')->nullable(); //
            $table->foreign('piscicultor_id')->references('id_piscicultor')->on('piscicultor')->nullable(); //llave foranea de piscicultor
            $table->unsignedBigInteger('tablaAlimentacion_id')->nullable(); //
            $table->foreign('tablaAlimentacion_id')->references('id_tablaAlimentacion')->on('tablaAlimentacion')->nullable();
            $table->double('valor');

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
