<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DentistsTableSeeder::class);
        $this->call(PatientsTableSeeder::class);

        $this->call(ServicesTableSeeder::class);

        $this->call(AppointmentsTableSeeder::class);

    }
}
