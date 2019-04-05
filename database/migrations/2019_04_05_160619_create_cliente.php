<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {

            $table->bigInteger('idCliente')->autoIncrement();
            $table->string('rut',10)>unique()->required();
            $table->string('nombre',25)->required();
            $table->string('apellidoP',25)->required();
            $table->string('apellidoM',25)->required();
            $table->integer('telefono')->required();
            $table->string('direccion',50)->required();
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
        Schema::dropIfExists('cliente');
    }
}
