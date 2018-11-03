<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_url')->nullable();
            $table->string('image_alt')->nullable();
            $table->string('image_tooltip')->nullable();
            $table->string('image_order')->nullable();
            $table->unsignedInteger('id_language');
            $table->timestamps();
            //FOREIGH KEYS
            //language
            $table->foreign('id_language')
                  ->references('id')->on('language');
        });
        DB::table('banner')->insert(
            array(
                'id' => '1',
                'image_url' => 'images/banner/1.jpg',//español
                'image_alt' => 'MasxMenos somos parte de tu vida',
                'image_tooltip' => 'MasxMenos somos parte de tu vida',
                'image_order' => '1',
                'id_language' => '2',
            )
        );
        DB::table('banner')->insert(
            array(
                'id' => '2',
                'image_url' => 'images/banner/2.png',//español
                'image_alt' => 'Celebra ya empieza fin de año',
                'image_tooltip' => 'Celebra ya empieza fin de año',
                'image_order' => '2',
                'id_language' => '2',
            )
        );
        DB::table('banner')->insert(
            array(
                'id' => '3',
                'image_url' => 'images/banner/3.png',//español
                'image_alt' => 'Todos los dias siempre frescos',
                'image_tooltip' => 'Todos los dias siempre frescos',
                'image_order' => '3',
                'id_language' => '2',
            )
        );
        DB::table('banner')->insert(
            array(
                'id' => '4',
                'image_url' => 'images/banner/4.jpg',//español
                'image_alt' => 'Con todas tus medicinas estamos siempre contigo',
                'image_tooltip' => 'Con todas tus medicinas estamos siempre contigo',
                'image_order' => '3',
                'id_language' => '2',
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
        Schema::dropIfExists('banner');
    }
}
