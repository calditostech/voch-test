<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Colaborador;
use Illuminate\Support\Facades\DB;

class ColaboradoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('colaboradores')->delete();

        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        Colaborador::factory(100)->create();
    }
}
