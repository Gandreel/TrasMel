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
           $table->string('patente',7)>unique()->required();
           $table->string('modelo',30)->required();
           $table->integer('anno',4)->required();
           $table->integer('tara',6)->required();
           $table->tinyInteger('tipo',2)->required();
           $table->integer('carga')->required();
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
