<?php

use Illuminate\Database\Seeder;

class MunicipalitiesSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipalities')->insert([
            'name' => 'Los Cabos',
        ]);

        DB::table('municipalities')->insert([
            'name' => 'La Paz',
        ]);

        DB::table('municipalities')->insert([
            'name' => 'Loreto',
        ]);

        DB::table('municipalities')->insert([
            'name' => 'Comondú',
        ]);

        DB::table('municipalities')->insert([
            'name' => 'Mulegé',
        ]);
    }
}
