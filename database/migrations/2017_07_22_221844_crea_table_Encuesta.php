<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaTableEncuesta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuesta', function (Blueprint $table) {
            $table->integer('objetivo_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->integer('pais_id')->unsigned();
            $table->integer('meta_id')->unsigned();
            $table->integer('indicador_id')->unsigned();
            $table->string('P1','1');
            $table->string('P2','1');
            $table->string('P3','1');
            $table->string('P4','1');
            $table->string('P5','12');
            $table->string('P6','45');
            $table->string('P7','45');
            $table->string('P8','80');
            $table->string('P9','320');
            $table->string('P10','320');
            $table->datetime('fecha');
            $table->string('estado','2');


            $table->foreign('pais_id')
                ->references('pais_id')
                ->on('pais')
                ->onDelete('cascade');

            $table->foreign('users_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('objetivo_id')
                  ->references('objetivo_id')
                  ->on('objetivo')
                  ->onDelete('cascade');

            $table->foreign('meta_id')
                  ->references('meta_id')
                  ->on('meta')
                  ->onDelete('cascade');

            $table->foreign('indicador_id')
                  ->references('indicador_id')
                  ->on('indicador')
                  ->onDelete('cascade');


        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encuesta');
    }
}
