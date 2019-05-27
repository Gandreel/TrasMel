<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->bigIncrements('idPersona');
            $table->string('rut', 12)->nullable()->default('text');
            $table->string('avatar', 100);
            $table->string('nombre', 50)->nullable()->default('text');
            $table->string('apellidos', 50)->nullable()->default('text');
            $table->string('email', 50)->nullable()->default('text')->unique();
            $table->string('pass');
            $table->integer('fono')->unsigned()->nullable()->default(9);
            $table->string('direccion', 50)->nullable()->default('text');
            $table->integer('categoria')->unsigned()->nullable();
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
        Schema::dropIfExists('persona');
    }
}
