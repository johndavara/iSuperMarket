<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_language')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('meta_author')->nullable();
            $table->string('meta_viewport')->nullable();
            $table->string('image_url')->nullable();
            $table->string('image_alt')->nullable();
            $table->integer('order')->nullable();
            $table->string('video_url')->nullable();


            //FOREIGH KEYS
            //language
            $table->foreign('id_language')
                  ->references('id')->on('languages');
            $table->timestamps();
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
        Schema::dropIfExists('post');
    }
}
