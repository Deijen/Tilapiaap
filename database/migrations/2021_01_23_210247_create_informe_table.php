<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe', function (Blueprint $table) {
            $table->bigIncrements('id_informe');
            $table->unsignedBigInteger('cultivo_id')->nullable(); //
            $table->foreign('cultivo_id')->references('id_cultivo')->on('cultivo')->nullable(); //llave foranea de piscicultor
            $table->unsignedBigInteger('piscicultor_id')->nullable(); //
            $table->foreign('piscicultor_id')->references('id_piscicultor')->on('piscicultor')->nullable(); //llave foranea de piscicultor


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informe');
    }
}
