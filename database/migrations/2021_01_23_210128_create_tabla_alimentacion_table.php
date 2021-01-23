<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablaAlimentacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tablaAlimentacion', function (Blueprint $table) {
            $table->bigIncrements('id_tablaAlimentacion'); //llave primaria
            $table->string('valores'); //Son más valores.
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tablaAlimentacion');
    }
}
