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
            $table->unsignedInteger('id_category')->nullable();
            $table->string('title')->nullable();
            $table->text('description',60000)->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('meta_author')->nullable();
            $table->string('meta_viewport')->nullable();
            $table->string('image_url')->nullable();
            $table->string('image_alt')->nullable();
            $table->string('image_tooltip')->nullable();
            $table->integer('post_order')->nullable();
            $table->string('video_url')->nullable();


            //FOREIGH KEYS
            //language
            $table->foreign('id_language')
                  ->references('id')->on('language');
            $table->foreign('id_category')
                  ->references('id')->on('categories');
            $table->timestamps();
    });
  // Novedades
  DB::table('post')->insert(
    array(
        'id' => '1',
        'id_language' => '2',
        'id_category' => '3',//english
        'title' => 'Reese’s sticks',
        'description' => 'Producto Importado

        Pudín de Reese’s sticks
        
        Ingredientes:
        • REESES STICKS, enteras y otras picadas en trocitos
        • Azúcar
        • Harina para todo uso
        • 3 huevos separadas las yemas de las claras
        • Leche
        • Esencia de vainilla
        • Sal
        
        Preparación:
        Colocar las yemas de huevo, la leche, el azúcar, la harina y la sal en una sartén mediana a fuego medio. Mezclar constantemente, y cocinar hasta que se espese. Retirar del fuego y agregar la vainilla.
        
        Colocar la mitad de las Reeses Sticks en el fondo de una fuente para hornear. Cubrir con la mitad de la mezcla y repetir el proceso haciendo capas.
        
        Batir las claras de huevo con el azúcar hasta obtener un merengue consistente y repartirlo en la parte superior del pudín cubriendo muy bien toda la superficie.
        
        Hornear a 150ºC hasta que la superficie esté ligeramente dorada, unos 15 minutos. Se puede servir caliente o frío.',
        'meta_description' => 'Pudín de Reese’s sticks',
        'meta_keyword' => 'reesstick,rees stick',
        'meta_author' => 'iSupermarket',
        'meta_viewport' => '',
        'image_url' => 'images/news/reesstick.jpg',
        'image_alt' => 'Reese’s sticks de mani chocolate',
        'image_tooltip' => 'Reese’s sticks de mani chocolate',
        'post_order' => '1',
        'video_url' => ''
    )
);

DB::table('post')->insert(
array(
    'id' => '2',
    'id_language' => '2',
    'id_category' => '3',//english
    'title' => 'Reeses mantequilla de maní cubu dulce crujient',
    'description' => '
    Producto Importado

    Galletas de crema de cacahuate con REESE’S PIECES
    
    Ingredientes:
    • 1 taza REESE’S PIECES Candies
    •1/2 taza (1 barra) mantequilla o margarina
    •1 taza azúcar
    •1/2 taza crema de cacahuate
    • 1 huevo
    •1/2 cucharadita extracto de vainilla
    • 1 taza harina común
    • 1/2 cucharadita bicarbonato de sodio
    •1/4 cucharadita sal
    Preparación:
    Calentar el horno a 350°F. Mezclar bien la mantequilla, el azúcar, la crema de cacahuate, el huevo y la vainilla en un tazón grande hasta que se esponje. Mezclar la harina, el bicarbonato y la sal. Gradualmente incorporar la mantequilla y los REESE’S PIECES. Colocar cucharadas altas en la una bandeja sin engrasar.
    
    Hornear unos 10 o 12 minutos o hasta que se doren ligeramente las orillas; Retirar del horno dejar enfriar un poco y pasar a un recipiente.',
    'meta_description' => 'Reeses mantequilla de maní cubu dulce crujiens',
    'meta_keyword' => 'Reese’s pieces,reeses, mantequilla de mani',
    'meta_author' => 'iSupermarket',
    'meta_viewport' => '',
    'image_url' => 'images/news/reeses.png',
    'image_alt' => 'Reese’s pieces',
    'image_tooltip' => 'Reese’s pieces',
    'post_order' => '2',
    'video_url' => ''
)
);

DB::table('post')->insert(
array(
    'id' => '3',
    'id_language' => '2',
    'id_category' => '3',//english
    'title' => 'Milk duds chocolate caramelo',
    'description' => '
    Producto Importado

    Chewy Milk Duds Cookies

    Ingredientes:
    • 1 paquete de Milk Duds
    • 1 1/2 taza y media de manteca vegetal
    • 1 1/2 taza y media de mantequilla de maní
    • 2 tazas de azúcar, divididas
    • 1 1/2 azúcar morena
    • 4 huevos
    • 3 3/4 taza de harina
    • 2 cucharaditas de bicarbonato de soda
    • 1 1/2 cucharaditas polvo para hornear
    • 3/4 cucharadita de sal
    Preparación:
    En un bowl mezclar la manteca, la mantequilla de maní, 1 1/2 tazas de azúcar y el azúcar morena. Agregar los huevos uno a la vez, mientras se bate la mezcla.
    Combinar los ingredientes secos. Añadirlos gradualmente a la mezcla y dejar reposar por al menos 1 hora.

    Poner 4 cucharaditas de la masa al rededor de cada Milk dud para cubrirlo completamente. Cubrirlas bolitas que se forman con el azúcar que queda. Ponerlas sobre un recipiente para horno sin engrasar. Hornear a 350ºF por 10-12 min. Dejar enfriar por 5 minutos y remover',
    'meta_description' => 'Milk duds chocolate caramelo',
    'meta_keyword' => 'milkduds, milk duds',
    'meta_author' => 'iSupermarket',
    'meta_viewport' => '',
    'image_url' => 'images/news/milk-duds.png',
    'image_alt' => 'Milk duds chocolate caramelo',
    'image_tooltip' => 'Milk duds chocolate caramelo',
    'post_order' => '3',
    'video_url' => ''
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
        Schema::dropIfExists('post');
    }
}
