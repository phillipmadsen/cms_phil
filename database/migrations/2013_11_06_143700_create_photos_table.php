<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {

            $table->increments('id');
            $table->string('file_name', 255);
            $table->string('title', 255);
            $table->string('path', 255);
            $table->integer('file_size');
            $table->string('type', 255);
            $table->unsignedInteger('relationship_id');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('photos');
    }
}
