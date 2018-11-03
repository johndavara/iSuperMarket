<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_parent_category');
            $table->unsignedInteger('id_language');
            $table->string('name');
            $table->string('description');
            $table->string('meta_description');
            $table->string('meta_keywords');
            $table->string('meta_author');
            $table->string('meta_viewport');

            //FOREIGH KEYS
            //category
            $table->foreign('id_parent_category')
                  ->references('id')->on('categories')
                  ->onDelete('cascade');
            //language
            $table->foreign('id_language')
                  ->references('id')->on('languages');
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
        Schema::dropIfExists('categories');
    }
}
