<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsHasTechnologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_has_technologies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('projects_id')->unsigned();
            $table->integer('technologies_id')->unsigned();
        });
        
        Schema::table('projects_has_technologies', function (Blueprint $table) {
            $table->foreign('projects_id')
                    ->references('id')
                    ->on('projects')
                    ->onDelete('CASCADE');
        });
        
        Schema::table('projects_has_technologies', function (Blueprint $table) {
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
        Schema::dropIfExists('projects_has_technologies');
    }
}
