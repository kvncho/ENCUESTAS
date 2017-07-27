<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('objetivo_id')->unsigned();
            $table->integer('meta_id')->unsigned();
            $table->integer('indicador_id')->unsigned();
            $table->string('estado','2');

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
        Schema::dropIfExists('menu');
    }
}
