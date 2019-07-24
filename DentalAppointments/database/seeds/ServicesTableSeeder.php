<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' => 'Limpieza dental',
            'price' => '15000'
        ]);
        DB::table('services')->insert([
            'name' => 'Extracción dental',
            'price' => '23000'
        ]);
        DB::table('services')->insert([
            'name' => 'Endodoncia',
            'price' => '30000'
        ]);
        DB::table('services')->insert([
            'name' => 'Implante',
            'price' => '100000'
        ]);
        DB::table('services')->insert([
            'name' => 'Frenillos',
            'price' => '200000'
        ]);
    }
}
