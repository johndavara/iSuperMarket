<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelatedpostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatedpost', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_parent_post')->nullable();
            $table->unsignedInteger('id_related_post')->nullable();
            $table->integer('order')->nullable();
            $table->timestamps();
            //FOREIGH KEYS
            //post
            $table->foreign('id_parent_post')
                  ->references('id')->on('post')
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
        Schema::dropIfExists('relatedpost');
    }
}
