<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePioneta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pioneta', function (Blueprint $table) {
            $table->bigIncrements('idPioneta');
            $table->string('rut');
            $table->string('nombre');
            $table->string('apellidoP');
            $table->string('apellidoM');
            $table->mediumInteger('telefono');
            $table->boolean('activo');
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
        Schema::dropIfExists('pioneta');
    }
}
