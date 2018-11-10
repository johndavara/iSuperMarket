<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('company_telephone')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_facebook')->nullable();
            $table->string('company_youtube')->nullable();
            $table->string('company_instagram')->nullable();
            $table->string('company_twiter')->nullable();
            $table->string('company_googleplus')->nullable();
            $table->timestamps();
        });
        DB::table('company')->insert(
            array(
                'id' => '1',
                'company_name' => 'iSupermarket',//español
                'company_logo' => '/images/logo/logo.png',
                'company_telephone' => '800-8000-722',
                'company_email' => 'SAC@wal-mart.com',
                'company_address' => 'Heredia centro, Costa Rica',
                'company_facebook' => 'https://www.facebook.com/MasxmenosCR/',
                'company_youtube' => 'https://www.youtube.com/channel/UC9yYr7W7oR4tU_NZwOfEEZg',
                'company_instagram' => 'https://www.instagram.com/masxmenoscr/',
                'company_twiter' => '',
                'company_googleplus' => ''
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
        Schema::dropIfExists('company');
    }
}
