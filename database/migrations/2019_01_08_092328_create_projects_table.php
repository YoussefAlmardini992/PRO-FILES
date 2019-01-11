<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('proName');
            $table->integer('proOwner')->unsigned();
            $table->foreign('proOwner')->references('id')->on('users')->onDelete('cascade');;
            $table->longText('description');
            $table->longText('target');
            $table->integer('history');
            $table->string('category');
            $table->string('proNR');
            $table->integer('color')->unsigned();
            $table->foreign('color')->references('id')->on('colors')->onDelete('cascade');;
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
        Schema::dropIfExists('projects');
    }
}
