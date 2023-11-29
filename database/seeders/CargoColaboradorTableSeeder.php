<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CargoColaborador;

class CargoColaboradorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CargoColaborador::truncate();
        
        CargoColaborador::factory(100)->create();
    }
}
