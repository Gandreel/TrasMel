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
            $table->bigInteger('idPioneta')->autoIncrement();
            $table->string('rut',10)->required();
            $table->string('nombre',25)->required();
            $table->string('apellidoP',25)->required();
            $table->string('apellidoM',25)->required();
            $table->mediumInteger('telefono',9)->required();
            $table->boolean('activo')->required();
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
