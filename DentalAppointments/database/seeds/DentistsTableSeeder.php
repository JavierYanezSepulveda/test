<?php

use Illuminate\Database\Seeder;

class DentistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dentists')->insert([
            'name' => 'Juan González'
        ]);
        DB::table('dentists')->insert([
            'name' => 'José Pérez'
        ]);
        DB::table('dentists')->insert([
            'name' => 'Cristian Durán'
        ]);
        DB::table('dentists')->insert([
            'name' => 'Diego Hernández'
        ]);
        DB::table('dentists')->insert([
            'name' => 'Ignacia Miño'
        ]);
        DB::table('dentists')->insert([
            'name' => 'Patricia Miranda'
        ]);
    }
}
