<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiscicultorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piscicultor', function (Blueprint $table) {
            $table->bigIncrements('id_piscicultor'); //llave primaria
            $table->unsignedBigInteger('propietario_id')->nullable(); //
            $table->foreign('propietario_id')->references('id_propietario')->on('propietario')->nullable(); //llave foranea de propietario
            $table->String('Nombre');
            $table->double('salario');
            $table->String('correo');
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
        Schema::dropIfExists('piscicultor');
    }
}
