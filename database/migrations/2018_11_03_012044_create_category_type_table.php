<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->timestamps();
        });
        // Insert category types
        DB::table('category_type')->insert(
            array(
                'id' => '1',
                'title' => 'menu',
                'description' => 'Main menu'
            )
        );
        DB::table('category_type')->insert(
            array(
                'id' => '2',
                'title' => 'recipies',
                'description' => 'Recipies'
            )
        );
        DB::table('category_type')->insert(
            array(
                'id' => '3',
                'title' => 'news',
                'description' => 'News'
            )
        );
        DB::table('category_type')->insert(
            array(
                'id' => '4',
                'title' => 'tips',
                'description' => 'Recipies'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_type');
    }
}
