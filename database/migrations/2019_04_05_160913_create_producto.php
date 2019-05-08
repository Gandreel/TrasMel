<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->bigIncrements('idProducto');
            $table->string('nombre')->required();
            $table->decimal('largo')->required();
            $table->decimal('ancho')->required();
            $table->decimal('alto')->required();
            $table->decimal('peso')->required();
            $table->boolean('fragil')->default(false);
            
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
        Schema::dropIfExists('producto');
    }
}
