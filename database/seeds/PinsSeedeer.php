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
        DB::table('pins')->insert([
            'name' => 'El Triunfo',
            'description' => 'El Triunfo, es un pequeño poblado a 45 kilómetros de La Paz, el cual surgió gracias a la minería y llegó a ser la ciudad más poblada de Baja California Sur hace ya varias décadas.
Visitar El Triunfo, es un viaje al pasado, en donde podrás apreciar una chimenea que realizó Gustav Eiffel para la mina de este lugar.
De igual forma, cuenta con el Santuario de los Cactus, en donde podrás recorrer un pequeño sendero rodeado de diversas variedades de cactaceas y conocerás más de estas plantas.',
            'schedule' => '',
            'imagen' => 'imagen.png',
            'latitude' => 23.803889,
            'longitude' => -110.106111,
            'municipality_id' => '2',

        ]);


        DB::table('pins')->insert([
            'name' => 'Isla Espiritu Santo',
            'description' => 'Isla Espíritu Santo es una isla en el Golfo de California, del estado mexicano de Baja California Sur. Está conectada a la Isla Partida por istmo estrecho. La orografía de ambas es completamente diferente a las otras islas del Golfo. La isla tiene un área de tierra de 80.763 km² la duodécima isla más grande de México. El área terrestre de la Isla Partida es de 15.495 km².
El área es protegida por la Unesco como biosfera, y su importancia como un destino ecoturístico es el factor principal. Las islas están ambas deshabitadas. Las islas son parte del municipio de La Paz.',
            'schedule' => '',
            'imagen' => 'imagen.png',
            'latitude' => 24.5000000,
            'longitude' => -110.3670000,
            'municipality_id' => '2',
        ]);


        DB::table('pins')->insert([
            'name' => 'Museo Regional De Baja California Sur',
            'description' => 'El Museo Regional de Baja California Sur es un recinto que tiene el objetivo tanto de exhibir, como de preservar el patrimonio cultural de la región. Este se inauguró en marzo de 1981.',
            'schedule' => 'Lunes a Domingo de 09:00 a 18:00',
            'imagen' => 'imagen.png',
            'latitude' => -110.308763,
            'longitude' => 24.159558,
            'municipality_id' => '2',
        ]);

        DB::table('pins')->insert([
            'name' => 'Catedral de La Paz',
            'description' => 'La Catedral de La Paz fue construida con un estilo neoclásico en el siglo XIX. Se mantiene como una de las pocas obras de los misioneros Jesuitas que aún están conservadas.
Dentro de la catedral verás pinturas del siglo XVII que quedaron como evidencia de sus misiones por el mundo. Visítala cualquier día de la semana para disfrutar de sus oficios religiosos o para apreciar su belleza y contenido histórico.',
            'schedule' => '',
            'imagen' => 'imagen.png',
            'latitude' => 24.161639,
            'longitude' => -110.313003,
            'municipality_id' => '2',
        ]);

        DB::table('pins')->insert([
            'name' => 'Malecón',
            'description' => 'El malecón de La Paz es un fantástico punto de la ciudad para caminar junto al mar y sentir su rica brisa. Es considerado uno de los más bellos de México. En  toda su extensión podrás ver las 10 esculturas de bronce alegóricas a la navegación. Es muy bello.
Podrás correr, trotar, pasear y hasta comprar en sus tiendas.',
            'schedule' => '',
            'imagen' => 'imagen.png',
            'latitude' => 24.161639,
            'longitude' => -110.313003,
            'municipality_id' => '2',
        ]);

        DB::table('pins')->insert([
            'name' => 'Pueblo Todos Santos',
            'description' => 'Todos Santos es una población de la península de Baja California, en la costa del Pacífico de México, bordeada de la Sierra de la Laguna. Tiene muchos artistas y es conocida por sus numerosas galerías. El moderno Centro Cultural Profesor Néstor Agúndez Martínez se encuentra dentro de una antigua escuela y tiene un museo de historia local. Al sur, las playas como San Pedrito y Los Cerritos son conocidas por su oleaje fuerte.',
            'schedule' => '',
            'imagen' => 'imagen.png',
            'latitude' => 23.448611,
            'longitude' => -110.223333,
            'municipality_id' => '2',
        ]);

        DB::table('pins')->insert([
            'name' => 'Serpentario',
            'description' => 'El Serpentario es un parque ecológico donde se encargan de conservar y proteger a más de 150 especies de reptiles, aves y otros animales que llegan para ser rescatados como serpientes, tortugas, iguanas, lagartijas, cocodrilos y muchos más. El objetivo de este parque es crear conciencia sobre la importancia de estos animales y su preservación.',
            'schedule' => '',
            'imagen' => 'imagen.png',
            'latitude' => 24.145486,
            'longitude' => -110.339553,
            'municipality_id' => '2',
        ]);

        DB::table('pins')->insert([
            'name' => 'Ensenada Grande',
            'description' => 'La playa de Ensenada Grande, es una auténtica belleza natural, sus aguas son tan tranquilas que parece que nadas en una alberca, sus aguas son cristalinas, su arena blanca y un clima perfecto para pasar una gran experiencia.',
            'schedule' => '',
            'imagen' => 'imagen.png',
            'latitude' => 24.566211,
            'longitude' => -110.401558,
            'municipality_id' => '2',
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
