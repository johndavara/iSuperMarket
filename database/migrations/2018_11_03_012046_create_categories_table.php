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
            $table->string('image_url')->nullable();
            $table->string('image_alt')->nullable();
            $table->string('image_tooltip')->nullable();

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
                'url' => 'recipes'
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
                'url' => 'news'
            )
        );
        DB::table('categories')->insert(
            array(
                'id' => '4',
                'id_language' => '2',//español
                'title' => 'Tips',
                'description' => 'Tips por iSupermarket',
                'meta_description' => 'Todo tipo de tips',
                'meta_keyword' => 'Tips,tips,tip',
                'meta_author' => 'iSupermarket',
                'meta_viewport' => '',
                'id_category_type' => '1',//menu
                'url' => 'tips'
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
                'url' => 'contact'
            )
        );

        // Recipies Categories
        
        DB::table('categories')->insert(
            array(
                'id' => '6',
                'id_parent_category' => '2',
                'id_language' => '1',//english
                'title' => 'Super Chef',
                'description' => 'Super Chef by iSupermarket',
                'meta_description' => 'Super Chef recetas hechas con productos iSupermarket',
                'meta_keyword' => 'RecetasSuperChef,Superchef',
                'meta_author' => 'iSupermarket',
                'meta_viewport' => '',
                'id_category_type' => '2',//menu
                'url' => '',
                'image_url' => 'images/recipies/superchef.jpg',
                'image_alt' => 'Super Chef',
                'image_tooltip' => 'Super Chef'
            )
        );

        DB::table('categories')->insert(
            array(
                'id' => '7',
                'id_parent_category' => '2',
                'id_language' => '1',//english
                'title' => 'Breakfast',
                'description' => 'Desayunos por iSupermarket',
                'meta_description' => 'Desayunos hechos con productos de iSupermarket',
                'meta_keyword' => 'desayuno,desayunos',
                'meta_author' => 'iSupermarket',
                'meta_viewport' => '',
                'id_category_type' => '2',//menu
                'url' => '',
                'image_url' => 'images/recipies/breakfast.jpg',
                'image_alt' => 'Desayunos',
                'image_tooltip' => 'Desayunos'
            )
        );

        DB::table('categories')->insert(
            array(
                'id' => '8',
                'id_parent_category' => '2',
                'id_language' => '1',//english
                'title' => 'Main Course',
                'description' => 'Plato fuerte por iSupermarket',
                'meta_description' => 'Recetas de Plato Fuerte con productos iSuperMarket',
                'meta_keyword' => 'plato fuerte,recetas plato fuerte',
                'meta_author' => 'iSupermarket',
                'meta_viewport' => '',
                'id_category_type' => '2',//menu
                'url' => '',
                'image_url' => 'images/recipies/maincourse.jpg',
                'image_alt' => 'Plato Fuerte',
                'image_tooltip' => 'Plato Fuerte'
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
        Schema::dropIfExists('categories');
    }
}
