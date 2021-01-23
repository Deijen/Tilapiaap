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
     * NOTA: Se usará una migración generica de momento mientras se realiza la inserción de las tablas.
     * 
     * 
     */
    public function up() 
    {  
        /**
         * Orden de creación de migraciones
         * 1) Tabla alimentación.
         * 2) Piscicultor
         * 3) Presupuesto
         * 4) Propietario
         * 5) Cultivo
         * 6) Informe
         * 
         * 
         */

        /////////////////////////////////////////////
        Schema::create('tablaAlimentacion', function (Blueprint $table) {
            $table->bigIncrements('id_tablaAlimentacion'); //llave primaria
            $table->string('valores'); //Son más valores.
            
        });

        //////////////////////////////////////////////////
        Schema::create('piscicultor', function (Blueprint $table) {
            $table->bigIncrements('id_piscicultor'); //llave primaria
            $table->String('Nombre');
            $table->double('salario');
            $table->String('correo');
            $table->timestamps();
        });


        /////////////////////////////////////7
        Schema::create('presupuesto', function (Blueprint $table) {
            $table->bigIncrements('id_presupuesto'); //llave primaria
            $table->int('valor');
        });


        ///////////////////////////////////////
        Schema::create('propietario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('piscicultor_id'); //
            $table->foreign('piscicultor_id')->references('id_piscicultor')->on('piscicultor'); //llave foranea de piscicultor
            $table->unsignedBigInteger('presupuesto_id'); //
            $table->foreign('presupuesto_id')->references('id_presupuesto')->on('presupuesto'); // LLave foranea de presupuesto
            $table->String('Nombre');
            $table->double('patrimonio');
            $table->String('correo');
            $table->timestamps();

        });

        ////////////////////////////////////////////
        Schema::create('cultivo', function (Blueprint $table) {
            $table->bigIncrements('id_cultivo');
            $table->unsignedBigInteger('piscicultor_id'); //
            $table->foreign('piscicultor_id')->references('id_piscicultor')->on('piscicultor'); //llave foranea de piscicultor
            $table->unsignedBigInteger('tablaAlimentacion_id'); //
            $table->foreign('tablaAlimentacion_id')->references('id_tablaAlimentacion')->on('tablaAlimentacion');
            $table->double('valor');
        });  

        ///////////////////////////////////////
        Schema::create('venta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cultivo_id'); //
            $table->foreign('cultivo_id')->references('id_cultivo')->on('cultivo'); //llave foranea de piscicultor
           
        }); 

        ////////////////////////////////////

        Schema::create('informe', function (Blueprint $table) {
            $table->bigIncrements('id_informe');
            $table->unsignedBigInteger('cultivo_id'); //
            $table->foreign('cultivo_id')->references('id_cultivo')->on('cultivo'); //llave foranea de piscicultor
            $table->unsignedBigInteger('piscicultor_id'); //
            $table->foreign('piscicultor_id')->references('id_piscicultor')->on('piscicultor'); //llave foranea de piscicultor
        }); 


        

        

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('');
        Schema::dropIfExists('propietario');
        Schema::dropIfExists('piscicultor');
    }
}
