<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropietarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ 
    /**
     * Revisar los modificadores. Se puede defirnir un valor default para ciertos atributos
     * 
     * NOTA: Leer Foreign key constraints
     * NOTA: Una vez que se definan las bien las relaciones se procede a crear las migraciones
     */
    public function up() 
    { 


        Schema::create('cultivo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('venta_id')->references('id')->on('venta');
            $table->double('valor');
        });  

        Schema::create('venta', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->double('valor');
        }); 



        Schema::create('piscicultor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('Nombre');
            $table->double('salario');
            $table->String('correo');
            $table->timestamps();
        });

        Schema::create('presupuesto', function (Blueprint $table) {
            $table->int('valor');
        });

        Schema::create('propietario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('piscicultor_id');
            $table->foreign('piscicultor_id')->references('id')->on('piscicultor');
            $table->String('Nombre');
            $table->double('patrimonio');
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
        Schema::dropIfExists('propietario');
        Schema::dropIfExists('piscicultor');
    }
}
