<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language', function (Blueprint $table) {
            $table->increments('id');
            $table->string('localization');
            $table->string('globalization');
            $table->timestamps();
        });
        DB::table('language')->insert(
            array(
                'id' => '1',
                'localization' => 'en',
                'globalization' => 'en-US'
            )
        );
        DB::table('language')->insert(
            array(
                'id' => '2',
                'localization' => 'es',
                'globalization' => 'es-ES'
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
        Schema::dropIfExists('language');
    }
}
