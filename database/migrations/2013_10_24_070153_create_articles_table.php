<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title', 255);
            $table->text('content');
            $table->string('slug')->nullable();
            $table->integer('category_id');
            $table->string('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->boolean('is_published')->default(true);
            $table->string('path', 255)->nullable();
            $table->string('file_name', 255)->nullable();
            $table->integer('file_size')->nullable();
            $table->string('lang', 20);
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('tags', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
            $table->string('lang', 20);
            $table->engine = 'InnoDB';
        });

         Schema::create('articles_tags', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('article_id')->unsigned()->index();
            $table->integer('tag_id')->unsigned()->index();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });




    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('articles_tags');
        Schema::drop('tags');
        Schema::drop('articles');
    }
}
