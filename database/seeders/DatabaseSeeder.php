<?php

namespace Database\Seeders;

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
        $this->call(UnidadesTableSeeder::class);
        $this->call(ColaboradoresTableSeeder::class);
        $this->call(CargosTableSeeder::class);
        $this->call(CargoColaboradorTableSeeder::class);
    }
}
