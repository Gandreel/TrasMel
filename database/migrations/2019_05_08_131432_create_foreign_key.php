<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('camion', function (Blueprint $table) {
            $table->integer('tipoCamion_id')->unsigned()->after('carga');
            $table->foreign('tipoCamion_id')->references('id')->on('tipo_camion');
        });

        Schema::table('producto_despacho', function (Blueprint $table) {
            $table->bigInteger('idDespacho')->unsigned();
            $table->foreign('idDespacho')->references('numeroDespacho')->on('despacho');

            $table->bigInteger('producto_id')->unsigned();
            $table->foreign('producto_id')->references('idProducto')->on('producto');
        });

        Schema::table('pioneta_despacho', function (Blueprint $table) {
            $table->bigInteger('pioneta_id')->unsigned();
            $table->foreign('pioneta_id')->references('idPioneta')->on('pioneta');

            $table->bigInteger('despacho_id')->unsigned();
            $table->foreign('despacho_id')->references('numeroDespacho')->on('despacho');
        });

        Schema::table('despacho', function (Blueprint $table) {
            $table->bigInteger('camion_id')->unsigned();
            $table->foreign('camion_id')->references('idCamion')->on('camion');

            $table->bigInteger('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('idCliente')->on('cliente');

            $table->bigInteger('direccion_id')->unsigned();
            $table->foreign('direccion_id')->references('idDireccion')->on('direccion');

            $table->bigInteger('chofer_id')->unsigned();
            $table->foreign('chofer_id')->references('idChofer')->on('chofer');
        });

        Schema::table('licencia', function (Blueprint $table) {
            $table->bigInteger('chofer_id')->unsigned();
            $table->foreign('chofer_id')->references('idChofer')->on('chofer');
        });

        Schema::table('producto', function (Blueprint $table) {
            $table->bigInteger('tipoProducto_id')->unsigned();
            $table->foreign('tipoProducto_id')->references('id')->on('tipo_producto');
        });





    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_key');
    }
}
