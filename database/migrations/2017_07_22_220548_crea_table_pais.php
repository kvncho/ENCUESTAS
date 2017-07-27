<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaTablePais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pais', function (Blueprint $table) {
            $table->increments('pais_id');
            $table->integer('ciudad_id')->unsigned();
            $table->string('abrepais_ES','50');
            $table->string('abrepais_EN','50');
            $table->string('nombre_pais','220');
            $table->string('imagen_pais','250');

            $table->foreign('ciudad_id')->references('ciudad_id')
                ->on('ciudad')
                ->onDelete('cascade');

            $table->string('estado','2');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pais');
    }
}
