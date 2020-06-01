<?php

use Illuminate\Database\Seeder;

class PinsSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*Los Cabos Pins*/

        DB::table('pins')->insert([
            'name' => 'El Arco',
            'description' => 'Es una formación rocosa que emerge del mar en el extremo de la península de Baja California, que han dado en llamar «el fin de la tierra» ',
            'schedule' => '',
            'imagen' => 'img/los_cabos/Arco_Los_cabos.jpg',
            'latitude' => 22.875957,
            'longitude' => -109.894673,
            'municipality_id' => '1',

        ]);


        DB::table('pins')->insert([
            'name' => 'Playa el Medano',
            'description' => 'A tan solo kilómetro y medio de Cabo San Lucas se encuentra esta playa, una de las más frecuentadas de la zona y para muchos la mejor. Desde el lugar se puede avistar el extremo peninsular llamado «el fin de la tierra». Sus aguas son calmadas y el arenal es blanco y amplio. Allí dispones también de implementos para snorkel, buceo y paracaidismo de playa. Igualmente, cuenta con una buena dotación de restaurantes y otros servicios. El ocaso sobre el Pacífico visto desde el Médano es espectacular.',
            'schedule' => '',
            'imagen' => 'img/los_cabos/playa-medano.jpg',
            'latitude' => 22.895114,
            'longitude' => -109.893691,
            'municipality_id' => '1',
        ]);


        DB::table('pins')->insert([
            'name' => 'Lover’s Beach',
            'description' => 'De nítidas aguas, ideales para practicar el snorkel. Cuentas con la opción de tomar un paseo solo para ver y fotografiar la formación, pero también puedes quedarte a pasar una jornada de playa inolvidable. Cerca de la playa pueden avistarse colonias de los simpáticos leones marinos.',
            'imagen' => 'img/los_cabos/playa-del-amor.jpg',
            'longitude' => -109.896705,
            'latitude' => 22.876653,
            'municipality_id' => '1',
        ]);

        DB::table('pins')->insert([
            'name' => 'Santiago',
            'description' => 'Esta pequeña población localizada a 45 kilómetros de San José del Cabo fue asiento en el siglo XVIII de la misión jesuita de Santiago de los Coras Aiñiní. Tras la expulsión de los jesuitas, la misión pasó a ser manejada por monjes franciscanos y dominicos, hasta que fue abandonada. La iglesia actual es una reedificación posterior. Santiago gozó por un tiempo de la distinción de ser la única localidad con un zoológico en Baja California Sur. Cuenta también con un sitio de fósiles.',
            'schedule' => '',
            'imagen' => 'img/los_cabos/santiago.jpg',
            'latitude' => 23.478630,
            'longitude' => -109.718630,
            'municipality_id' => '1',
        ]);

        DB::table('pins')->insert([
            'name' => 'Miraflores',
            'description' => 'Es una población situada a poco más de 40 kilómetros de San José del Cabo, que goza de una excelente tradición en la elaboración de productos a base de pitahaya, una fruta cactácea que en su versión de color rojo es más conocida como fruta de dragón. Los miraflorinos la preparan de diversas formas y la ofrecen a los turistas. La Feria de la Pitahaya tiene lugar en julio y en ella se elige a la Reina de la Pitahaya, siempre una bonita lugareña que viste un pintoresco traje típico en el que predominan los colores de la bandera mexicana.',
            'schedule' => '',
            'imagen' => 'img/los_cabos/miraflores-2.jpg',
            'latitude' => 23.369316,
            'longitude' => -109.775368,
            'municipality_id' => '1',
        ]);

        DB::table('pins')->insert([
            'name' => 'La Ribera',
            'description' => 'La Ribera es una agradable población de Los Cabos que vive de la pesca, de la prestación de servicios turísticos y de un poco de agricultura y ganadería. Cuenta con una extensa playa de arena blanca en la que los visitantes nadan y practican sus deportes favoritos. Si has de creerle a los lugareños, es el mejor sitio para partir a pescar un enorme wahoo, marlín o pez vela, como para establecer un record mundial.',
            'schedule' => '',
            'imagen' => 'img/los_cabos/la-ribera.jpg',
            'latitude' => 23.591569,
            'longitude' => -109.589592,
            'municipality_id' => '1',
        ]);

        DB::table('pins')->insert([
            'name' => 'Estero de San Jose',
            'description' => 'Es el estuario del río San José en su encuentro con el Océano Pacífico. En este cuerpo acuático de 50 hectáreas de superficie, situado en las proximidades de San José del Cabo, la reunión de aguas dulces y saladas crea un hábitat propicio para la proliferación de unas particulares especies de flora y fauna. Cuenta con una abundante vegetación y quizá tengas la suerte de avistar un gallito marino. Esta bonita ave tiene la curiosa particularidad de ser una de las pocas que migra de sur a norte y una de sus paradas es el estero.',
            'schedule' => '',
            'imagen' => 'img/los_cabos/el_estero_de_san_jose_del_cabo.jpg',
            'latitude' => 23.056054,
            'longitude' => -109.684763,
            'municipality_id' => '1',
        ]);

        DB::table('pins')->insert([
            'name' => 'Misión de San José del Cabo Anuiti',
            'description' => 'Fue la misión situada más al sur en la Vieja California. Fue dedicada a San José y levantada en un lugar que la etnia de los pericúes llamaba Anuiti. La misión fue destruida por los indígenas en 1736 en su guerra contra los religiosos jesuitas que querían imponer nuevas costumbres. Fue reconstruida y luego abandonada hasta que desapareció y la iglesia que se encuentra en el sitio fue construida en 1940.',
            'schedule' => '',
            'imagen' => 'img/los_cabos/mision-de-san-jose-8.jpg',
            'latitude' => 23.062104,
            'longitude' => -109.695630,
            'municipality_id' => '1',
        ]);

         DB::table('pins')->insert([
            'name' => 'Parque nacional Cabo Pulmo',
            'description' => 'Este espacio protegido del Mar de Cortés cuenta con varios atributos que lo hacen muy especial. Es el único arrecife duro en la península de Baja California y el único vivo en la parte norte de América. La población importante que está más cerca es Cabo San Lucas, situada a poco más de 60 kilómetros. Entre las especies más abundantes en sus aguas están la madre perla, la langosta y el ostión, mientras que en tierra predominan los reptiles. El lugar es uno de los preferidos de los turistas norteamericanos, que van principalmente a practicar la pesca deportiva.',
            'schedule' => '',
            'imagen' => 'img/los_cabos/Parque-Nacional-Cabo-Pulmo.jpg',
            'latitude' => 23.437069,
            'longitude' => -109.429180,
            'municipality_id' => '1',
        ]);

          DB::table('pins')->insert([
            'name' => 'Playa Santa Maria',
            'description' => 'Es un paraíso para el snorkel y el buceo, por sus claras y generalmente calmadas aguas azul turquesa. Está enclavada dentro de un santuario protegido, por lo que hay una nutrida vida submarina, formada por muchos pececillos de colores y por las especies de flora y de fauna que se adhieren a las paredes rocosas. El arenal es de grano grande y puedes acceder a la playa en tours que salen tanto desde Cabo San Lucas como desde San José del Cabo.',
            'schedule' => '',
            'imagen' => 'img/los_cabos/playa-santa-maria.jpg',
            'latitude' => 22.930409,
            'longitude' => -109.816132,
            'municipality_id' => '1',
        ]);

        /*La Paz Pins*/

        DB::table('pins')->insert([
            'name' => 'El Triunfo',
            'description' => 'El Triunfo, es un pequeño poblado a 45 kilómetros de La Paz, el cual surgió gracias a la minería y llegó a ser la ciudad más poblada de Baja California Sur hace ya varias décadas.
Visitar El Triunfo, es un viaje al pasado, en donde podrás apreciar una chimenea que realizó Gustav Eiffel para la mina de este lugar.
De igual forma, cuenta con el Santuario de los Cactus, en donde podrás recorrer un pequeño sendero rodeado de diversas variedades de cactaceas y conocerás más de estas plantas.',
            'schedule' => '',
            'imagen' => 'img/la_paz/el-triunfo.jpg',
            'latitude' => 23.803889,
            'longitude' => -110.106111,
            'municipality_id' => '2',

        ]);


        DB::table('pins')->insert([
            'name' => 'Isla Espiritu Santo',
            'description' => 'Isla Espíritu Santo es una isla en el Golfo de California, del estado mexicano de Baja California Sur. Está conectada a la Isla Partida por istmo estrecho. La orografía de ambas es completamente diferente a las otras islas del Golfo. La isla tiene un área de tierra de 80.763 km² la duodécima isla más grande de México. El área terrestre de la Isla Partida es de 15.495 km².
El área es protegida por la Unesco como biosfera, y su importancia como un destino ecoturístico es el factor principal. Las islas están ambas deshabitadas. Las islas son parte del municipio de La Paz.',
            'schedule' => '',
            'imagen' => 'img/la_paz/isla-espiritu-santo.jpg',
            'latitude' => 24.5000000,
            'longitude' => -110.3670000,
            'municipality_id' => '2',
        ]);


        DB::table('pins')->insert([
            'name' => 'Museo Regional De Baja California Sur',
            'description' => 'El Museo Regional de Baja California Sur es un recinto que tiene el objetivo tanto de exhibir, como de preservar el patrimonio cultural de la región. Este se inauguró en marzo de 1981.',
            'schedule' => 'Lunes a Domingo de 09:00 a 18:00',
            'imagen' => 'img/la_paz/museo_de_antropologia_e_historia.jpg',
            'latitude' => 24.159558,
            'longitude' => -110.308763,
            'municipality_id' => '2',
        ]);

        DB::table('pins')->insert([
            'name' => 'Catedral de La Paz',
            'description' => 'La Catedral de La Paz fue construida con un estilo neoclásico en el siglo XIX. Se mantiene como una de las pocas obras de los misioneros Jesuitas que aún están conservadas.
Dentro de la catedral verás pinturas del siglo XVII que quedaron como evidencia de sus misiones por el mundo. Visítala cualquier día de la semana para disfrutar de sus oficios religiosos o para apreciar su belleza y contenido histórico.',
            'schedule' => '',
            'imagen' => 'img/la_paz/Catedral_La_Paz.jpg',
            'latitude' => 24.161639,
            'longitude' => -110.313003,
            'municipality_id' => '2',
        ]);

        DB::table('pins')->insert([
            'name' => 'Malecón',
            'description' => 'El malecón de La Paz es un fantástico punto de la ciudad para caminar junto al mar y sentir su rica brisa. Es considerado uno de los más bellos de México. En  toda su extensión podrás ver las 10 esculturas de bronce alegóricas a la navegación. Es muy bello.
Podrás correr, trotar, pasear y hasta comprar en sus tiendas.',
            'schedule' => '',
            'imagen' => 'img/la_paz/malecon-de-la-paz-atardecer.jpg',
            'latitude' => 24.161639,
            'longitude' => -110.313003,
            'municipality_id' => '2',
        ]);

        DB::table('pins')->insert([
            'name' => 'Pueblo Todos Santos',
            'description' => 'Todos Santos es una población de la península de Baja California, en la costa del Pacífico de México, bordeada de la Sierra de la Laguna. Tiene muchos artistas y es conocida por sus numerosas galerías. El moderno Centro Cultural Profesor Néstor Agúndez Martínez se encuentra dentro de una antigua escuela y tiene un museo de historia local. Al sur, las playas como San Pedrito y Los Cerritos son conocidas por su oleaje fuerte.',
            'schedule' => '',
            'imagen' => 'img/la_paz/todos_santos.jpg',
            'latitude' => 23.448611,
            'longitude' => -110.223333,
            'municipality_id' => '2',
        ]);

        DB::table('pins')->insert([
            'name' => 'Serpentario',
            'description' => 'El Serpentario es un parque ecológico donde se encargan de conservar y proteger a más de 150 especies de reptiles, aves y otros animales que llegan para ser rescatados como serpientes, tortugas, iguanas, lagartijas, cocodrilos y muchos más. El objetivo de este parque es crear conciencia sobre la importancia de estos animales y su preservación.',
            'schedule' => '',
            'imagen' => 'img/la_paz/serpentario.jpg',
            'latitude' => 24.145486,
            'longitude' => -110.339553,
            'municipality_id' => '2',
        ]);

        DB::table('pins')->insert([
            'name' => 'Ensenada Grande',
            'description' => 'La playa de Ensenada Grande, es una auténtica belleza natural, sus aguas son tan tranquilas que parece que nadas en una alberca, sus aguas son cristalinas, su arena blanca y un clima perfecto para pasar una gran experiencia.',
            'schedule' => '',
            'imagen' => 'img/la_paz/PLAYA-ENSENADA-GRANDE.jpg',
            'latitude' => 24.566211,
            'longitude' => -110.401558,
            'municipality_id' => '2',
        ]);

        DB::table('pins')->insert([
            'name' => 'Puerto Chale',
            'description' => 'Puerto Chale es una comunidad pesquera localizada en la costa del Océano Pacífico en el estado mexicano de Baja California Sur.La principal actividad económica de Puerto Chale es la pesca, siendo las principales especies capturadas son varias de pescado, camarón y callo de hacha, sin embargo no cuenta con servicios básicos como pavimentación, agua potable o luz eléctrica, pues ésta solo es provista por un generador que no cubre al 100% de las viviendas de la población.',
            'schedule' => '',
            'imagen' => 'img/la_paz/PLAYA-ENSENADA-GRANDE.jpg',
            'latitude' => 24.422572,
            'longitude' => -111.553918,
            'municipality_id' => '2',
        ]);

        /*Loreto Pins*/

        DB::table('pins')->insert([
            'name' => 'El Museo de las Misiones Jesuitas',
            'description' => 'Está ubicado en un convento construido en el siglo XVIII por la orden religiosa de los jesuitas. Al paso de los años el templo pasó a manos de los franciscanos y posteriormente de los dominicos. En él se resguardan y exhiben alrededor de 300 piezas, entre vestigios arqueológicos, pinturas y esculturas sacras de los siglos XVII y XVIII, campanas, incensarios y documentos antiguos, tales como el Catecismo histórico impreso en 1681 y el Libro de comentarios del eclesiástico de 1701. Destaca una campana que cayó al mar en 1875, la cual quedó atrapada en las redes de unos pescadores cien años después.',
            'schedule' => 'Martes a Domingo de 9 a 18 hrs',
            'imagen' => 'img/loreto/Misiones_Jesuitas.jpg',
            'latitude' => 26.010259 ,
            'longitude' => -111.343653,
            'municipality_id' => '3',

        ]);


        DB::table('pins')->insert([
            'name' => 'Isla del Carmen',
            'description' => 'Isla del Carmen además de otros atractivos, cuenta con una superficie rocosa de múltiples colores que llaman la atención de cualquiera que visita el lugar, la actividad histórica de su salinera llama la atención de los visitantes, debido a la apertura de la Salinera de Guerrero Negro, fue lo que provoco que las operaciones cesaran, porque  ya no era tan rentable su exportación hacia el Japón, debido a que la exportación era hacia el Pacifico y el extraer la sal de esta isla obligaba a rodear la península de Baja California, esto complicaba tanto el transporte como el costo del mismo.',
            'schedule' => '',
            'imagen' => 'img/loreto/isla-carmen.jpg',
            'latitude' =>  25.938287,
            'longitude' => -111.175537,
            'municipality_id' => '3',
        ]);


        DB::table('pins')->insert([
            'name' => 'Isla Danzante',
            'description' => 'Esta pequeña isla, que solo consta de cuatro kilómetros cuadrados, es un paraíso para todos los que visitan Loreto, México. Una de las más populares islas en Loreto, está se encuentra rodeada de aguas color turquesas repletas de vida marina, como lobos marinos, delfines y una gran variedad de peces, lo que la convierte en un lugar perfecto para realizar diferentes actividades en Loreto como el snorkel y para observar todas las maravillas naturales que abundan. También es el hogar de diversas aves acuáticas, incluido el famoso Bobo Patas Azules, un ave que solo se puede encontrar en muy pocos lugares del mundo.',
            'schedule' => 'Lunes a Domingo de 09:00 a 18:00',
            'imagen' => 'img/loreto/isla-danzante.jpg',
            'latitude' => 25.784856,
            'longitude' => -111.251593,
            'municipality_id' => '3',
        ]);

        DB::table('pins')->insert([
            'name' => 'Isla Monserrat',
            'description' => 'Entre las islas de Loreto se encuentra el lugar perfecto para la aventura, el deporte, el turismo y la fotografía. Es un refugio para diferentes actividades en Loreto, especialmente kayak, snorkel y buceo debido a la abundancia de vida marina que existe en el lugar.',
            'schedule' => '',
            'imagen' => 'img/loreto/isla-monserrat.jpg',
            'latitude' => 25.679130,
            'longitude' => -111.034386,
            'municipality_id' => '3',
        ]);

        DB::table('pins')->insert([
            'name' => 'Isla Coronado',
            'description' => 'Esta isla que está deshabitada, es en realidad una espectacular formación rocosa que se eleva 283 metros sobre el nivel del mar. Ubicada a solo 11 kilómetros al noreste de Loreto, México, el lugar es un refugio de vida silvestre donde los visitantes pueden anclar sus embarcaciones, hacer un picnic en la arena de color marfil, caminar entre la flora y fauna, así como esnorquelear y bucear en las maravillosas aguas azules.',
            'schedule' => '',
            'imagen' => 'img/loreto/isla-coronado.jpg',
            'latitude' => 26.110700,
            'longitude' => -111.279292,
            'municipality_id' => '3',
        ]);

        DB::table('pins')->insert([
            'name' => 'Isla Santa Catalina',
            'description' => 'Un lugar de diversión para aquellos que buscan turismo de aventura y fantásticas cosas que hacer en Loreto, la Isla Santa Catalina ofrece el lugar perfecto para actividades acuáticas, como la pesca deportiva y el buceo, y para actividades terrestres, como acampar y caminatas por la naturaleza.',
            'schedule' => '',
            'imagen' => 'img/loreto/isla-catalina.jpg',
            'latitude' => 25.649703,
            'longitude' => -110.780402,
            'municipality_id' => '3',
        ]);


        DB::table('pins')->insert([
            'name' => 'Villa del Palmar',
            'description' => 'Con sus playas tranquilas, sus vistas panorámicas, su rica historia y el sorprendente hábitat natural que lo rodea, sentirá que ha sido arrastrado al paraíso. Como el mejor de los hoteles de Loreto México, Villa del Palmar Beach Resort & Spa ofrece todas las comodidades modernas que pueda pedir y un servicio verdaderamente excepcional, al tiempo que mantiene la sensación pintoresca del México tradicional.',
            'schedule' => '',
            'imagen' => 'img/loreto/villa-del-palmar.jpg',
            'latitude' => 25.718028,
            'longitude' => -111.233292,
            'municipality_id' => '3',
        ]);

        DB::table('pins')->insert([
            'name' => 'Parque nacional Bahía de Loreto',
            'description' => 'El avistamiento de ballenas es la práctica más común en la zona en las meses de invierno, que es cuando comienzan a llegar al destino final de su migración, aunque también se pueden practicar otras actividades como son el remo, el buceo, el kayak, y el canotaje, así como la pesca de índole deportiva. En los desarrollos cercanos al lugar y en el poblado de Loreto se ofrecen estos servicios así como el recorrido turístico por la zona.',
            'schedule' => '',
            'imagen' => 'img/loreto/Parque-Bahía-de-Loreto.jpg',
            'latitude' => 25.824692,
            'longitude' => -111.046042,
            'municipality_id' => '3',
        ]);
        
         DB::table('pins')->insert([
            'name' => 'Malecon de Loreto',
            'description' => 'El malecón de Loreto es un fantástico punto de la ciudad para caminar junto al mar y sentir su rica brisa. Es considerado uno de los más bellos de México.',
            'schedule' => '',
            'imagen' => 'img/loreto/loreto-malecon.jpg',
            'latitude' =>  26.012128,
            'longitude' => -111.339394,
            'municipality_id' => '3',
        ]);



         /*Comondu Pins*/

         DB::table('pins')->insert([
            'name' => 'Museo de la Ballena y Ciencias del Mar',
            'description' => 'El Museo de La Ballena y Ciencias del Mar, A.C., es una institución educactiva, cultural, de apoyo a la investigación y divulgación científica de los cetáceos, quelonios, pinnípedos, sirenios, elasmobránquios y otras importantes especies marinas.  Es operada por personal de base, voluntarios y estudiantes de nivel licenciatura y medio superior en etapa de servicio social.
                Objeto:
                Divulgar los apectos más relevantes de la filogenia, historia natural y biología de estos organismos marinos, a través de exposiciones
                museológicas y museográficas de colecciones científicas, exposiciones artísticas, pláticas, talleres, conferencias, simposios y
                publicaciones, que permitan al visitante experimentar un encuentro tangible o intangible con estos maravillosos seres.',
            'schedule' => '',
            'imagen' => '',
            'latitude' => 25.193379,
            'longitude' => -112.123978,
            'municipality_id' => '4',
        ]);

         DB::table('pins')->insert([
            'name' => 'San Jose de Comondú',
            'description' => 'La misión fue fundada en 1708 por los padres misioneros Juan María de Salvatierra, Juan de Ugarte y Julián Mayorga este último fue responsable de la construcción y quedó al frente de la misión hasta su muerte el 10 de noviembre de 1736 . Río abajo se estableció una "Visita" que fue establecida por el padre misionero Juan de Ugarte, dicha "Visita" ubicada a pocos km de la misión llevó por nombre San Miguel de Comondú, es importante no confundirse, son dos nombres, dos establecimientos y una sola población.',
            'schedule' => '',
            'imagen' => '',
            'latitude' => 26.059272,
            'longitude' => -111.823061,
            'municipality_id' => '4',
        ]);

         DB::table('pins')->insert([
            'name' => 'La Purisima',
            'description' => 'Fue aquí donde, en 1717, llegó el padre jesuita Nicolás Tamaral para fundar la Misión de la Purísima Concepción de María Cadegomo. Poblaciones rodeadas de cerros de baja altura y erosionados por el tiempo, en su relieve sobresale la figura simbólica del Cerro El Pilón, que no pocas veces ha sido motivo de discordia por estar ubicado en zonas limítrofes. Con una altura de 400 metros, los cuales representan un reto para los conquistadores de las alturas, la figura abstracta de El Pilón significó para los padres jesuitas del siglo XVIII la imagen de la Virgen María, lo que interpretaron como un mensaje divino que les indicaba establecer la misión en este lugar.',
            'schedule' => '',
            'imagen' => '',
            'latitude' => 26.185720,
            'longitude' => -112.077052,
            'municipality_id' => '4',
        ]);


        


         /*Mulege Pins*/

         DB::table('pins')->insert([
            'name' => 'Sierra San Francisco',
            'description' => 'Encuentra un yacimiento de pinturas rupestres que es uno de los más importantes del norte de México, principalmente por el gran tamaño de las obras artísticas prehistóricas. Las pinturas muestran escenas de la vida corriente, como representaciones de cacerías, y otras más complejas y no interpretadas en su totalidad, que se adentran en la visión vital y cósmica de los pueblos que las realizaron.',
            'schedule' => '',
            'imagen' => 'img/mulege/sierra_san_francisco.jpg',
            'latitude' => 27.709991,
            'longitude' => -113.194992,
            'municipality_id' => '5',
        ]);

         DB::table('pins')->insert([
            'name' => 'Faro de mulege',
            'description' => 'No dieron información.',
            'schedule' => '',
            'imagen' => 'img/mulege/faro_de_mulege.jpg',
            'latitude' => 26.901520,
            'longitude' => -111.953433,
            'municipality_id' => '5',
        ]);

         DB::table('pins')->insert([
            'name' => 'Museo de mulege',
            'description' => 'El Museo Regional de Mulegé exhibe piezas arqueológicas halladas en la región. El inmueble fue la cárcel de Cananea, cuya característica fue que no tenía rejas en el estado de Baja California Sur. Cuenta con una colección de fósiles, instrumentos de los antiguos pobladores y otros objetos testimoniales de la vida pasada en Mulegé. Fundación: 1 de enero de 1993',
            'schedule' => '',
            'imagen' => 'img/mulege/museo_mulege.jpg',
            'latitude' =>  26.891928,
            'longitude' => -111.982149,
            'municipality_id' => '5',
        ]);

         DB::table('pins')->insert([
            'name' => 'Volcan Las Tres Virgenes',
            'description' => 'La última erupción de los volcanes en el complejo fue de El Virgen, pero la fecha es objeto de controversia. Un mapa dibujado por el misionero jesuita croata Fernando Consag contiene una referencia a una erupción en 1746.​ Sin embargo, el fechado radiométrico no coincide con esto. Un fragmento de carbón encontrado en un depósito volcánico se fechó en aproximadamente 6,515 años de antigüedad. Un flujo de lava basáltica; que debe ser más reciente que la erupción, fue fechado en aproximadamente 24,000 años de antigüedad, que concuerda con una datación de fragmentos de tefra de El Virgen que resultó en aproximadamente 36,000 años de antigüedad para la erupción.',
            'schedule' => '',
            'imagen' => 'img/mulege/volcan-las-tres-virgenes.jpg',
            'latitude' => 27.469931,
            'longitude' => -112.591630,
            'municipality_id' => '5',
        ]);

         DB::table('pins')->insert([
            'name' => 'Ecoturismo Kuyima',
            'description' => 'Ecoturismo Kuyima en la Laguna de San Ignacio, Baja California Sur te ofrece la oportunidad de vivir una experiencia única e inolvidable: compartir con la majestuosa ballena gris.
                Actividades: Observación de Ballena Gris. Observación de Aves. Ciclismo en zona desértica. Kayaquismo. Pesca recreativa.
                Atractivos: Ballena Gris, Tortugas Marinas, Observación de aves, Zonas Desérticas.',
            'schedule' => '',
            'imagen' => 'img/mulege/ecoturismo-kuyima.png',
            'latitude' => 27.283679,
            'longitude' => -112.897428,
            'municipality_id' => '5',
        ]);

         DB::table('pins')->insert([
            'name' => 'Museo de San ignacio',
            'description' => 'Es una pequeña sala permanente de exposiciones sobre el tema de la pintura rupestre. Anexo a lo que es el módulo de información y manejo de la zona arqueológica de la Sierra de San Francisco, que se localiza ahí en San Ignacio.',
            'schedule' => '',
            'imagen' => 'img/mulege/san-ignacio.jpg',
            'latitude' => 27.282948,
            'longitude' => -112.898673,
            'municipality_id' => '5',
        ]);

         DB::table('pins')->insert([
            'name' => 'La Reserva de la biosfera El Vizcaíno',
            'description' => 'La Reserva de la biosfera El Vizcaíno es un área natural protegida que se localiza en el norte del estado de Baja California Sur, dentro del municipio de Mulegé; sus más de dos millones de hectáreas la ubican como una de las reservas naturales más extensas del mundo.',
            'schedule' => '',
            'imagen' => 'img/mulege/vizcaino.jpg',
            'latitude' => 27.969849,
            'longitude' => -114.042891,
            'municipality_id' => '5',
        ]);

         DB::table('pins')->insert([
            'name' => 'Museo de la Ballena Guerrero Negro',
            'description' => 'El Museo de la Ballena de Guerrero Negro es un espacio para conocer la historia natural de la región, una exposición de piezas y fotografías que nos dan la idea de la riqueza del patrimonio natural del Vizcaíno. Los guías locales hacen amena y divertida la visita.',
            'schedule' => '',
            'imagen' => 'img/mulege/museo_de_la_ballena_logo.png',
            'latitude' => 27.983514,
            'longitude' => -114.013517,
            'municipality_id' => '5',
        ]);




        /*DB::table('pins')->insert([
            'name' => 'Isla Espiritu Santo',
            'description' => 'Descripción del status',
            'schedule' => '',
            'imagen' => 'imagen.png',
            'latitude' => ,
            'longitude' => ,
            'municipality_id' => '2',
        ]);

        DB::table('pins')->insert([
            'name' => 'Isla Espiritu Santo',
            'description' => 'Descripción del status',
            'schedule' => '',
            'imagen' => 'imagen.png',
            'latitude' => ,
            'longitude' => ,
            'municipality_id' => '2',
        ]);*/

    }
}
