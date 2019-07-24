<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            'name' => 'Lucía Ortíz'
        ]);
        DB::table('patients')->insert([
            'name' => 'Alejandra Vergara'
        ]);
        DB::table('patients')->insert([
            'name' => 'Jeferson Molina'
        ]);
        DB::table('patients')->insert([
            'name' => 'Tulio Triviño'
        ]);
        DB::table('patients')->insert([
            'name' => 'Felipe Cáceres'
        ]);
        DB::table('patients')->insert([
            'name' => 'David Concha'
        ]);

    }
}
