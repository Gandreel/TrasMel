<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCamion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camion', function (Blueprint $table) {
        $table->bigIncrements('idCamion');
           $table->string('patente');
           $table->string('modelo');
           $table->integer('anno');
           $table->integer('tara');
           $table->integer('carga');
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
        Schema::dropIfExists('camion');
    }
}
