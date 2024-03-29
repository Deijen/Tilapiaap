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
        /**
         * 
         */
        Schema::create('piscicultor', function (Blueprint $table) {
            $table->bigIncrements('id_piscicultor'); //llave primaria
            $table->unsignedBigInteger('propietario_id')->nullable(); //
            $table->foreign('propietario_id')->references('id_propietario')->on('propietario')->nullable(); //llave foranea de propietario
            $table->unsignedBigInteger('cultivo_id')->nullable(); //
            $table->foreign('cultivo_id')->references('id_cultivo')->on('cultivo')->nullable(); //llave foranea de piscicultor
            $table->String('Nombre');
            $table->double('salario');
            $table->String('correo');
            $table->String('password');
           // $table->String('contraseña'); //El Propietario le asignará la contraseña a sus piscicultores
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
