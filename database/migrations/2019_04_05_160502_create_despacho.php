<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDespacho extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despacho', function (Blueprint $table) {
            $table->bigInteger('numeroDespacho')->autoIncrement();
            $table->date('fechaSalida')->required();
            $table->date('fechaEntrega')->required();
            $table->string('cliente',12)->required();
            $table->string('camion',7)->required();
            $table->string('chofer',12)->required();
            $table->bigInteger('producto')->required();
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
        Schema::dropIfExists('despacho');
    }
}
