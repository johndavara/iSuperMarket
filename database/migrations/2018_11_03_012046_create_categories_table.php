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
            $table->unsignedInteger('id_parent_category')->nullable();
            $table->unsignedInteger('id_language')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('meta_author')->nullable();
            $table->string('meta_viewport')->nullable();
            $table->unsignedInteger('id_category_type')->nullable();
            $table->string('url')->nullable();

            //FOREIGH KEYS
            //category
            $table->foreign('id_parent_category')
                  ->references('id')->on('categories')
                  ->onDelete('cascade');
            //language
            $table->foreign('id_language')
                  ->references('id')->on('language');
            //category type
            $table->foreign('id_category_type')
                  ->references('id')->on('category_type');
            $table->timestamps();
        });

        
        DB::table('categories')->insert(
            array(
                'id' => '1',
                'id_language' => '2',//español
                'title' => 'Inicio',
                'description' => 'Pagina principal',
                'meta_description' => 'Inicio iSupermarket',
                'meta_keyword' => 'Inicio iSupermarket',
                'meta_author' => 'iSupermarket',
                'meta_viewport' => '',
                'id_category_type' => '1',//menu
                'url' => 'home'
            )
        );
        DB::table('categories')->insert(
            array(
                'id' => '2',
                'id_language' => '2',//español
                'title' => 'Recetas',
                'description' => 'Recetas por iSupermarket',
                'meta_description' => 'Todo tipo de recetas',
                'meta_keyword' => 'Recetas,recetas,receta',
                'meta_author' => 'iSupermarket',
                'meta_viewport' => '',
                'id_category_type' => '1',//menu
                'url' => 'home'
            )
        );
        DB::table('categories')->insert(
            array(
                'id' => '3',
                'id_language' => '2',//español
                'title' => 'Novedades',
                'description' => 'Novedades por iSupermarket',
                'meta_description' => 'Todo tipo de novedades',
                'meta_keyword' => 'Novedades,novedades,novedad',
                'meta_author' => 'iSupermarket',
                'meta_viewport' => '',
                'id_category_type' => '1',//menu
                'url' => 'home'
            )
        );
        DB::table('categories')->insert(
            array(
                'id' => '4',
                'id_language' => '2',//español
                'title' => 'News',
                'description' => 'Tips por iSupermarket',
                'meta_description' => 'Todo tipo de tips',
                'meta_keyword' => 'Tips,tips,tip',
                'meta_author' => 'iSupermarket',
                'meta_viewport' => '',
                'id_category_type' => '1',//menu
                'url' => 'home'
            )
        );
        DB::table('categories')->insert(
            array(
                'id' => '5',
                'id_language' => '2',//español
                'title' => 'Contactenos',
                'description' => 'Contactenos en iSupermarket',
                'meta_description' => 'Contactenos',
                'meta_keyword' => 'contactenos, contacto',
                'meta_author' => 'iSupermarket',
                'meta_viewport' => '',
                'id_category_type' => '1',//menu
                'url' => 'home'
            )
        );

        // Recipies Categories
        /*
        DB::table('categories')->insert(
            array(
                'id' => '6',
                'id_parent_category' => '2',
                'id_language' => '1',//english
                'title' => 'Super Chef',
                'description' => 'Super Chef by iSupermarket',
                'meta_description' => 'Super Chef recipies with iSupermarket products',
                'meta_keyword' => 'SuperChefRecipies,superchef',
                'meta_author' => 'iSupermarket',
                'meta_viewport' => '',
                'id_category_type' => '2',//menu
                'url' => 'home'
            )
        );

        DB::table('categories')->insert(
            array(
                'id' => '7',
                'id_parent_category' => '2',
                'id_language' => '1',//english
                'title' => 'Breakfast',
                'description' => 'Breakfast by iSupermarket',
                'meta_description' => 'Breakfast recipies with iSupermarket products',
                'meta_keyword' => 'breakfast,recipies',
                'meta_author' => 'iSupermarket',
                'meta_viewport' => '',
                'id_category_type' => '2',//menu
                'url' => 'home'
            )
        );

        DB::table('categories')->insert(
            array(
                'id' => '8',
                'id_parent_category' => '2',
                'id_language' => '1',//english
                'title' => 'Main Course',
                'description' => 'Main Course by iSupermarket',
                'meta_description' => 'Main Course recipies with iSupermarket products',
                'meta_keyword' => 'maincourse,recipies',
                'meta_author' => 'iSupermarket',
                'meta_viewport' => '',
                'id_category_type' => '2',//menu
                'url' => 'maincourse'
            )
        );*/
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
