<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCanvasHasTechnologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canvas_has_technologies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('canvas_id')->unsigned();
            $table->integer('technologies_id')->unsigned();
        });
        
        Schema::table('canvas_has_technologies', function (Blueprint $table) {
            $table->foreign('canvas_id')
                    ->references('id')
                    ->on('canvas')
                    ->onDelete('CASCADE');
        });
        
        Schema::table('canvas_has_technologies', function (Blueprint $table) {
            $table->foreign('technologies_id')
                    ->references('id')
                    ->on('technologies')
                    ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canvas_has_technologies');
    }
}
