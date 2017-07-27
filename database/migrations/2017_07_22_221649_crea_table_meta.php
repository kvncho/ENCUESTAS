<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaTableMeta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('meta', function (Blueprint $table) {
            $table->increments('meta_id');
            $table->string('descripcion_ES','600');
            $table->string('descripcion_EN','600');
            $table->string('numero_meta','20');
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
        Schema::dropIfExists('meta');
    }
}
