<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title', 255);
            $table->string('slug')->nullable();
            $table->text('content');
            $table->string('page_title');
            $table->string('page_name')->index();
            $table->longText('page_source');
            $table->timestamps();
            $table->boolean('is_published')->default(true);
            $table->string('lang', 20);
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('pages');
    }
}
