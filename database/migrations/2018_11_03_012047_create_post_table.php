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
        'image_url' => '/images/news/reesstick.jpg',
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
    'image_url' => '/images/news/reeses.png',
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
        'image_url' => '/images/news/milk-duds.png',
        'image_alt' => 'Milk duds chocolate caramelo',
        'image_tooltip' => 'Milk duds chocolate caramelo',
        'post_order' => '3',
        'video_url' => ''
    )
    );

    DB::table('post')->insert(
        array(
            'id' => '4',
            'id_language' => '2',
            'id_category' => '4',//english
            'title' => 'Milk duds chocolate caramelo',
            'description' => '
            Colores tropicales, llenos de vida y luz son los tonos de labial más populares de la temporada. Sin embargo, es el rojo y sus diferentes matices el que ha llamado la atención de líderes de opinión y maquillistas profesionales. En el mercado encontrarás un sinfín de tonos, la clave es que selecciones el que mejor quede con tu tono de piel, para esto, te brindamos estos tips:

                Piel blanca:
                
                Es una piel que posee un tono rosado en el fondo, es decir, se torna rojiza con facilidad.
                Los colores fríos, es decir, los tonos con mayor cantidad de azul que rojo en la mezcla de colores; son el complemento perfecto.
                Tonos sugeridos:
                Vino Tinto: un tono vibrante y juvenil
                Cereza: un color elegante y sofisticado y el gran protagonista del 2015
                Marsala: un tono intenso que contrasta perfectamente con la piel blanca.',
            'meta_description' => 'Los tonos perfectos de rojo',
            'meta_keyword' => 'tonos perfectos de rojo, tonos rojos',
            'meta_author' => 'iSupermarket',
            'meta_viewport' => '',
            'image_url' => '/images/tips/redtones.jpg',
            'image_alt' => 'Los tonos perfectos de rojo',
            'image_tooltip' => 'Los tonos perfectos de rojo',
            'post_order' => '1',
            'video_url' => ''
        )
        );

        DB::table('post')->insert(
            array(
                'id' => '5',
                'id_language' => '2',
                'id_category' => '4',//english
                'title' => 'Higiene facial, un ritual nocturno necesario',
                'description' => '
                Los dermatólogos recomiendan no omitir el proceso de limpieza facial por la noche, no importa qué tan cansado se esté o si se tiene poco tiempo; es muy importante realizarlo. Tener una adecuada higiene facial no requiere de una gran inversión; lo único que debe hacerse es ser constantes, usar productos hipoalergénicos y secar el rostro con una toalla limpia. Esta pequeña rutina traerá 3 grandes beneficios:

Elimina la contaminación: el rostro entra todos los días en contacto con diferentes partículas que no son nada saludables para la piel, como el humo, el sol y hasta el aire acondicionado. La eliminación del estrés ambiental del día le da a la piel el descanso cosmético que necesita para recuperarse de posibles factores irritantes.

Evita la obstrucción de los poros: en el caso de quienes usan maquillaje durante el día y luego no lo retiran por la noche, los poros se tapan, dando lugar a brotes de acné o erupciones que dan un mal aspecto al día siguiente. Esto también hace que los signos de envejecimiento aparezcan prematuros en las más jóvenes y se incrementen en las mujeres maduras.

Remueve las células muertas: aunque no se utilice maquillaje, es importante lavarse el rostro por la noche porque las células cutáneas muertas se acumulan, e impiden que la dermis respire y en consecuencia no tenga una adecuada oxigenación. Esto hace que el rostro luzca áspero, manchado e incómodo. Al deshacerse de las células muertas, la piel logra una apariencia más suave, fresca y radiante.',
                'meta_description' => 'Los tonos perfectos de rojo',
                'meta_keyword' => 'higiene,facial,higiene facial',
                'meta_author' => 'iSupermarket',
                'meta_viewport' => '',
                'image_url' => '/images/tips/facialhygiene.jpg',
                'image_alt' => 'Higiene facial, un ritual nocturno necesario',
                'image_tooltip' => 'Higiene facial, un ritual nocturno necesario',
                'post_order' => '2',
                'video_url' => ''
            )
            );

            DB::table('post')->insert(
                array(
                    'id' => '6',
                    'id_language' => '2',
                    'id_category' => '4',//english
                    'title' => 'El quitamanchas, un producto infaltable',
                    'description' => '
                    En realidad es súper infaltable, sobre todo si se tienen niños. De este producto puede encontrarse una gran variedad, pues se aplican de forma distinta según las superficies y materiales. Además, hay varias presentaciones disponibles: botellas rociadoras, en forma de pasta para aplicar con esponjas, en roll-on, tipo marcador, en barra… Lo que resulte más cómodo. Cuando se usa a tiempo, este producto puede evitar grandes gastos, ya que salvan alfombras, muebles, paredes y, por supuesto, prendas de vestir; entre muchas otras cosas.

                    Es muy importante saber que no todas las manchas necesitan el mismo producto. Lo primero que debe tomarse en cuenta es el tipo de mancha. Estas pueden ser oxidables, grasas u orgánicas.
                    
                    ¿Cuál es cuál?
                    
                    Manchas oxidables: manchas de café, té, vino, fruta, tomate, barro u óxido.
                    Qué usar: el ideal es un quitamanchas con oxígeno activo. Estos penetran en los tejidos haciendo que la mancha se disuelva, potenciando el efecto del detergente. Se aplican directamente sobre la mancha o añadido al detergente.
                    
                    Manchas grasas: rozaduras en cuellos y puños, pintalabios, maquillaje, aceite vegetal o cualquier otro, mayonesa o mantequilla.
                    Qué usar: se atacan con un producto desengrasante. Normalmente estos se pulverizan sobre la mancha.
                    
                    Manchas orgánicas: sudor, sangre, cacao, leche, salsas o hierbas.
                    Qué usar: se debe utilizar un producto enzimático que se aplica directamente sobre la mancha y luego se deja actuar durante dos minutos antes de lavar, ya sea a mano o a máquina.
                    
                    Es recomendable leer siempre las instrucciones en las etiquetas para evitar dañar las manos o tener una reacción alérgica.',
                    'meta_description' => 'Los tonos perfectos de rojo',
                    'meta_keyword' => 'quita manchas',
                    'meta_author' => 'iSupermarket',
                    'meta_viewport' => '',
                    'image_url' => '/images/tips/stainremover.jpg',
                    'image_alt' => 'El quitamanchas, un producto infaltable',
                    'image_tooltip' => 'El quitamanchas, un producto infaltable',
                    'post_order' => '3',
                    'video_url' => ''
                )
                );

                DB::table('post')->insert(
                    array(
                        'id' => '7',
                        'id_language' => '2',
                        'id_category' => '7',//english
                        'title' => 'Tostadas Francesas',
                        'description' => '
                         Ingredientes
                        • 4 rebanas de pan cuadrado
                        • 4 huevos
                        • ½ taza de leche
                        • 1 cdita. de vainilla
                        • 1 cdita. de canela
                        • Aceite
                        Preparación
                        1. En un tazón, mezcle los huevos, la leche y la vainilla.
                        2. Sumerja las rebanadas de pan en la mezcla. Deben quedar cubiertas por ambos lados. Inmediatamente, coloque en un sartén caliente a fuego medio, con aceite. Cocine por ambos lados hasta que estén dorados.
                        3. Retire del sartén, coloque en un plato y espolvoree canela. Sirva y acompañe con sirope de maple.
                         ',
                        'meta_description' => 'Tostadas francesas',
                        'meta_keyword' => 'tostadas',
                        'meta_author' => 'iSupermarket',
                        'meta_viewport' => '',
                        'image_url' => '/images/recipies/tostada-francesa.jpg',
                        'image_alt' => 'Tostadas francesas',
                        'image_tooltip' => 'Tostadas francesas',
                        'post_order' => '1',
                        'video_url' => ''
                    )
                    );

                    DB::table('post')->insert(
                        array(
                            'id' => '8',
                            'id_language' => '2',
                            'id_category' => '7',//english
                            'title' => 'Omelette',
                            'description' => '
                             Ingredientes
                            • 3 huevos
                            • 2 rodajas jamón
                            • 2 rodajas queso
                            • cant. necesaria sal y pimienta
                            Preparación
                            1. Rompe tres huevos, los huevos tienen que ser bien frescos.
                            2. Corta el jamón y el queso.
                            3. Batir los huevos, salpimentar.
                            4. Poner a calentar la sartén con un chorlito de aceite y pone los huevos batidos.
                            5. Cuando esté un poquito cocida, agregas el jamón y el queso.
                            6. Con una espátula armas el omelette y lo servís con una ensalada.
                             ',
                            'meta_description' => 'Omelette',
                            'meta_keyword' => 'omelette',
                            'meta_author' => 'iSupermarket',
                            'meta_viewport' => '',
                            'image_url' => '/images/recipies/omelette.jpg',
                            'image_alt' => 'omelette',
                            'image_tooltip' => 'Omelette',
                            'post_order' => '2',
                            'video_url' => ''
                        )
                        );

                        DB::table('post')->insert(
                            array(
                                'id' => '9',
                                'id_language' => '2',
                                'id_category' => '6',//english
                                'title' => 'Pierna de Cordero',
                                'description' => '
                                 Ingredientes
                                • 1 pierna de cordero de 1,5 kg aproximadamente, a poder ser con su grasa
                                • 150 ml de vino blanco
                                • 800 g de patatas
                                • 3 dientes de ajo
                                • 1 cucharadita rasa de romero seco en polvo
                                • 1 cucharadita rasa de tomillo seco
                                • Aceite de oliva
                                • Sal y pimienta negra recién molida
                                Preparación
                                1. Sacar el cordero de la nevera para que esté a temperatura ambiente cuando lo metamos al horno..
                                2. Meter en la base del horno una fuente con agua para que el ambiente del horno esté húmedo, y precalentarlo a 260 grados.
                                3. Pelar tres dientes de ajo y cortarlos en láminas gruesas. Hacer pequeñas incisiones con un cuchillo en la carne y meter las láminas dentro..
                                4. Salpimentar la carne y frotarla con el romero y el tomillo. Ponerla en otra fuente (no la del agua) e incorporar el vino y 150 ml de agua.
                                5. Hornear 20 minutos, apagar el horno y dejar dentro el cordero 3 horas. Importante: no abrir la puerta del horno en todo el proceso.
                                6. Mientras, en una cazuela en el fuego, cocer las patatas sin pelar en agua hirviendo durante 15 minutos. Sacar y dejar que se sequen.
                                 ',
                                'meta_description' => 'Pierna de cordero',
                                'meta_keyword' => 'pierna, cordero',
                                'meta_author' => 'iSupermarket',
                                'meta_viewport' => '',
                                'image_url' => '/images/recipies/lamb-leg.jpg',
                                'image_alt' => 'Pierna de cordero',
                                'image_tooltip' => 'Pierna de cordero',
                                'post_order' => '1',
                                'video_url' => ''
                            )
                            );

                            DB::table('post')->insert(
                                array(
                                    'id' => '10',
                                    'id_language' => '2',
                                    'id_category' => '6',//english
                                    'title' => 'Ravioles de queso',
                                    'description' => '
                                     Ingredientes
                                     • Harina 0000 500 grs.
                                     • Sal Cantidad necesaria
                                     • Aceite de oliva 2 cdas.
                                     • Yemas 2 Unidades
                                     • Crema de leche 4 cdas.
                                     • Tomillo fresco A gusto
                                     • Queso de cabra 100 g
                                     • Pimienta negra Cantidad necesaria
                                     • Ricota 200 grs.
                                     • Queso gruyere rallado 100 g
                                    Preparación
                                    Para la masa
                                    – Mezclá en un recipiente todos los ingredientes y formar una masa.
                                    – Amasá hasta lograr que sea suave y lisa.
                                    – Estirá y cortá 2 rectángulos de tamaño similar. Reservá.
                                    Para el relleno
                                    – En un bol mezclá la ricota, los quesos rallados y la crema. Condimentá.
                                    – Una vez listo, colocá en pequeñas porciones sobre una de las planchas, en línea y dejando un espacio regular entre una y otra, colocá encima la otra masa.
                                    – Marcá bien los ravioles y cortalos con un cuchillo, cerralos bien para que no se abran en medio de la cocción.
                                    – Cocinalos en una olla con abundante agua hirviendo y sal marina.
                                    Salsa
                                    – Calentá en un sartén aceite de oliva y agregá el echalote picado y el diente de ajo ecrasse.
                                    – Añadí el tomate concassé y el vino blanco, dejá cocinar a fuego fuerte para que pierda la acidez, luego, incorporá la salsa de tomate y condimentá.
                                    – Serví la salsa sobre los ravioles y agregá las hojas de albahaca.
                                    – Espolvoreá con queso parmesano rallado.
                                     ',
                                    'meta_description' => 'Ravioles de queso',
                                    'meta_keyword' => 'ravioli, queso',
                                    'meta_author' => 'iSupermarket',
                                    'meta_viewport' => '',
                                    'image_url' => '/images/recipies/ravioli.jpg',
                                    'image_alt' => 'Reavioles',
                                    'image_tooltip' => 'Ravioles de queso',
                                    'post_order' => '2',
                                    'video_url' => ''
                                )
                                );

                                DB::table('post')->insert(
                                    array(
                                        'id' => '11',
                                        'id_language' => '2',
                                        'id_category' => '8',//english
                                        'title' => 'Lasagna de carne',
                                        'description' => '
                                         Ingredientes
                                         • 400 g de carne picada de cerdo  
                                         • 80 g de queso rallado 
                                         • 2 cdas de aceite de oliva virgen extra  
                                         • 1 bote de Sofrito de Tomate y Cebolla Gallina Blanca 
                                         • 1 paquete de placas de Lasaña
                                         • 1 sobre de Mi Salsa Bechamel 
                                         • 1 chorrito de vino blanco  
                                         • 1 pizca de sal
                                        Preparación
                                        – Dora en una cazuela la carne picada con el aceite de oliva. 
                                        Cuando haya tomado color, añade el Sofrito de Tomate y Cebolla Gallina Blanca y déjalo cocinar unos 5 minutos. 
                                        Pon a punto de sal. Añade el vino blanco y deja reducir por completo. 
                                        Prepara Mi Salsa Bechamel Gallina Blanca, según las instrucciones del sobre.
                                        – Monta la lasaña, para ello echa en una fuente de horno un poquito 
                                        de Mi Salsa bechamel Gallina Blanca hasta cubrir la superficie
                                        - Termina por encima de la lasaña con Mi Salsa bechamel Gallina Blanca, el queso rallado y cuece en el horno a 200ºC 
                                        hasta que coja un bonito color dorado.
                                         ',
                                        'meta_description' => 'Lasagna de carne',
                                        'meta_keyword' => 'lasagna, queso, carne',
                                        'meta_author' => 'iSupermarket',
                                        'meta_viewport' => '',
                                        'image_url' => '/images/recipies/lasagna.jpg',
                                        'image_alt' => 'Lasagna de carne',
                                        'image_tooltip' => 'Lasagna de carne',
                                        'post_order' => '1',
                                        'video_url' => ''
                                    )
                                    );

                                    DB::table('post')->insert(
                                        array(
                                            'id' => '12',
                                            'id_language' => '2',
                                            'id_category' => '8',//english
                                            'title' => 'Ravioles de queso',
                                            'description' => '
                                             Ingredientes
                                             • Harina 0000 500 grs.
                                             • Sal Cantidad necesaria
                                             • Aceite de oliva 2 cdas.
                                             • Yemas 2 Unidades
                                             • Crema de leche 4 cdas.
                                             • Tomillo fresco A gusto
                                             • Queso de cabra 100 g
                                             • Pimienta negra Cantidad necesaria
                                             • Ricota 200 grs.
                                             • Queso gruyere rallado 100 g
                                            Preparación
                                            Para la masa
                                            – Mezclá en un recipiente todos los ingredientes y formar una masa.
                                            – Amasá hasta lograr que sea suave y lisa.
                                            – Estirá y cortá 2 rectángulos de tamaño similar. Reservá.
                                            Para el relleno
                                            – En un bol mezclá la ricota, los quesos rallados y la crema. Condimentá.
                                            – Una vez listo, colocá en pequeñas porciones sobre una de las planchas, en línea y dejando un espacio regular entre una y otra, colocá encima la otra masa.
                                            – Marcá bien los ravioles y cortalos con un cuchillo, cerralos bien para que no se abran en medio de la cocción.
                                            – Cocinalos en una olla con abundante agua hirviendo y sal marina.
                                            Salsa
                                            – Calentá en un sartén aceite de oliva y agregá el echalote picado y el diente de ajo ecrasse.
                                            – Añadí el tomate concassé y el vino blanco, dejá cocinar a fuego fuerte para que pierda la acidez, luego, incorporá la salsa de tomate y condimentá.
                                            – Serví la salsa sobre los ravioles y agregá las hojas de albahaca.
                                            – Espolvoreá con queso parmesano rallado.
                                             ',
                                            'meta_description' => 'Ravioles de queso',
                                            'meta_keyword' => 'ravioli, queso',
                                            'meta_author' => 'iSupermarket',
                                            'meta_viewport' => '',
                                            'image_url' => '/images/recipies/ravioli.jpg',
                                            'image_alt' => 'Reavioles',
                                            'image_tooltip' => 'Ravioles de queso',
                                            'post_order' => '2',
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
