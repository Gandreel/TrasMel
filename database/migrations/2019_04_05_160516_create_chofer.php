<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChofer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chofer', function (Blueprint $table) {
            $table->string('rut',12)>unique()->required();
            $table->string('nombre',25)->reuired();
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
        Schema::dropIfExists('chofer');
    }
}
