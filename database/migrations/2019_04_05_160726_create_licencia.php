<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licencia', function (Blueprint $table) {
            $table->bigInteger('numeroLicencia');
            $table->date('fechaEmision');
            $table->date('fechaVencimiento');
            $table->string('foto');
            $table->string('tipoLicencia');
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
        Schema::dropIfExists('licencia');
    }
}
